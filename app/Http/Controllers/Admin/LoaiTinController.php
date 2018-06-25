<?php

namespace App\Http\Controllers\Admin;
use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\LoaiTin;
use App\Post;
use Session;

class LoaiTinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $loaitin = Loaitin::all();
        return view('loaitin.index',compact('loaitin'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $loaitin = LoaiTin::all();
        return view('loaitin.create',compact('loaitin'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $validated = $request->validated();
        // $data = $request->all(); 
         $loaitin = new LoaiTin;
        $loaitin->tenloaitin = $request->tenloaitin;
        $loaitin->save();
        //3. Trả về thông tin sau khi lưu xong
        //return back();// giữ nguyên view này - không có message
        Session::flash('ketqua','Luu du lieu thanh cong');
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

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $loaitin_edit = LoaiTin::find($id);
        return view('loaitin.edit', compact('loaitin_edit'));
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
        $data = Loaitin::findOrFail($id);
        //1. lay du liệu view
        $update_data= $request->all();
        //2. xác định từng field trong CSDL cần cập nhật - theo view
        $data->tenloaitin=$update_data['tenloaitin']; 
        //3. Lưu
        $data->save();
        //4. Hiển thị view cùng với thông báo

        Session::flash('ketqua','cap nhat du lieu thanh cong');
        return redirect('admin/loaitin/create');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $delete_data = LoaiTin::findOrFail($id);

       
        $delete_data->delete();

        Session::flash('ketqua', 'Delete thành công!!!');
        return redirect('admin/loaitin/create');
    }
}