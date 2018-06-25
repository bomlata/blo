<?php

namespace App\Http\Controllers\Admin;
use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Comment;
use App\LoaiTin;
use Auth;
use App\User;
use Session;
use Gate;
use DB;
use Mail;
use App\Mail\UpdateMail;
use App\Mail\Erromail;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        
        // $userid = User::where('idUser',$id);
        // $post=Post::pluck('id');
        // $tent=posts::with('LoaiTin')->findOrFail($post);
        
        $loaitin = LoaiTin::all();  
        if (Auth::user()->id == 3) {
             $post = Post::paginate(4); 
             return view('admin.index', compact('post','loaitin'));
         } else {
            $post = Post::where('idUser',Auth::user()->id)->paginate(4);
            return view('post.index', compact('post','loaitin'));
         }
         DB::table('post')->count();
          
        
    
       // $loaitin = Post::where('tenloaitin','id');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $loaitin = LoaiTin::pluck('tenloaitin','id');
        return view('post.create',compact('tag','loaitin'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        $validated = $request->validated();
        $po = new Post;
        $po->title = $request->title;
        $po->status = $request->status;
        $po->content = $request->content;
        $po->loaitin_id = $request->loaitin;
        $po->idUser = Auth::user()->id;
        $po->image = request()->image->getClientOriginalName();
        request()->image->move(public_path('Update/Product/'),$po->image);
        $po->save();       
        Session::flash('ketqua','Luu Thanh Cong');
        return back();       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $loaitin = LoaiTin::all();
        $post= Post::findOrFail($id);
        //3. Lấy dữ liệu của id được chọn
        //4. Đẩy dữ liệu ra view
        // Lấy dữ liệu Tag theo Post_id

        // dd($tags_list);
        return view('post.show',compact('post','loaitin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post_edit = Post::find($id);
        return view('post.edit', compact('post_edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         //0. Check Id có tồn tại không
        $thisUser = User::findOrFail($id);
        $data = Post::findOrFail($id);
        //1. lay du liệu view
        $update_data= $request->all();
        //2. xác định từng field trong CSDL cần cập nhật - theo view
        $data->title=$update_data['title']; 
        $data->status=$update_data['status'];   
        $data->content=$update_data['content']; 
        //3. Lưu
        $data->save();
        //4. Hiển thị view cùng với thông báo
        if ($data->status == 0) {
            $this->sEmail($thisUser);
        } else {
            $this->erEmail($thisUser);
        }

        
        Session::flash('ketqua','cap nhat du lieu thanh cong');
        return redirect('admin/post');
        
    }
    public function sEmail($thisUser)
    {   
        
        Mail::to($thisUser['email'])->send(new UpdateMail($thisUser));
    }
    public function erEmail($thisUser)
    {
        Mail::to($thisUser['email'])->send(new Erromail($thisUser));
    }
 // nhìn thấy lỗi chưa ? thằng popst này chưa thuộc loại tin nào :) vâng. cái này e nối sai đúng k a nối k sai nhưng chưa có thừng loại tin nào chứa thằng này
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete_data = Post::findOrFail($id);

       
        $delete_data->delete();

        Session::flash('ketqua', 'Delete thành công!!!');
        return redirect('admin/post');
    }
    // Hiện thị các Pót có cùng Tag
    public function home()
    {
        
        return view('post.home');
    }
    public function dashboard()
    {
      
        $loaitin = LoaiTin::all();
        $post = Post::all();
        $comment = Comment::all();
        DB::table('post')->count();
        DB::table('loaitin')->count();
        DB::table('comment')->count();
        return view('post.dashboard',compact('post','loaitin','comment'));
    }
}
