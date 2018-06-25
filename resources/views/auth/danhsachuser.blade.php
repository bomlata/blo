<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
  
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>

    @extends('Admin.HomeAD')
    
    @section('PageAd')

     <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Danh Sách User</h1>
                    <div class="form-group">
        @if (session('ketqua'))
        <div class="col-sm-9 mx-auto">
            <div class="alert alert-success" role="alert">
                <strong>{{ session('ketqua') }}</strong></a>.
            </div>
        </div>
        @endif
    </div>
    <div class="form-group">

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                  
                    <th>Name</th>
                    <th>Email</th>
                    <th>Quyền</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($user as $us)
                <tr>
                    {{-- <td>{{ $po['id'] }}</td> --}}
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $us->name }}</td>
                    <td>{{ $us->email }}</td>
                    <td>
                        @if($us->quyen == 0)
                        {{"Thường"}}
                        @else
                        {{"Admin"}}
                        @endif
                    </td>   
                    
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('register') }}">Thêm User</a>
    </div>
</div>
<div class="container">
    {{-- <div class="row">
        <div class="mx-auto">
            {{ $post->links()}}
        </div>
    </div> --}}
                </div>
            </div>

            <!-- ... Your content goes here ... -->

        </div>
    </div>

</div>
    @endsection
</body>
</html>
