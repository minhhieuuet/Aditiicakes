@extends('admin.index')
@section('content')
    <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Người dùng
                            <small>Danh sách</small>
                        </h1>
                    </div>
                    @if(session('xoa'))
                        <div class="alert alert-success">
                            {{session('xoa')}}
                        </div>

                    @endif
                    @if(session('thongbao'))
                        <div class="alert alert-danger">
                            {{session('thongbao')}}
                        </div>
                    @endif
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Tên người dùng</th>
                                
                                
                                <th>Email</th>
                                <th>Địa chỉ</th>
                               	<th>Số điện thoại</th>
                                <th>Ngày tạo tài khoản</th>
                                <th>Quyền hạn</th>
                                <th>Xóa</th>
                                <th>Block</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($nguoidung as $value)
                            <tr class="odd gradeX" align="center">
                                <td>{{$value->id}}</td>
                                <td><a href="khach-hang/profile/{{$value->id}}">{{$value->full_name}}<a></td>
                               
                                <td>{{$value->email}}
                                

                                <td>{{$value->address}}</td>
                                <td>{{$value->phone}}</td>
                                <td>{{$value->created_at}}</td>
                                <td>@if($value->rank==1) Admin @else User @endif</td>

                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="nguoi-dung/xoa/{{$value->id}}"> Delete</a></td>
                                <td>
                                    <a href="nguoi-dung/khoa/{{$value->id}}">
                                    @if($value->rank!=1)
                                    @if($value->block=='true')
                                        <button type="button" class="btn btn-success">
                                            unblock
                                        </button>
                                    @else
                                        <button type="button" class="btn btn-danger">
                                            block
                                        </button>
                                    @endif

                                    @endif
                                </a>
                                </td>
                            </tr>
                            @endforeach


                        </tbody>
                    </table>
                    {{$nguoidung->links()}}   
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

@endsection