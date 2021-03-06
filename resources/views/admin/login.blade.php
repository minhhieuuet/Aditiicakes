@extends('index')
@section('content')

 <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Admin Đăng Nhập</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="{{route('admin/dang-nhap')}}" method="POST">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="hidden" name="_token" value="{{csrf_token()}}">
                                </div>
                                <button type="submit" class="btn btn-lg btn-success btn-block">Đăng nhập</button>
                            </fieldset>
                        </form>
                    </div>
                   
                    
                </div>

                 @if(session('thongbao'))
                    <div class="alert alert-danger alert-dismissable fade in">
                    		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    		{{session('thongbao')}}
                    		

                    </div>
                    @endif

                    @if($errors->any())
                    	<div class="alert alert-danger alert-dismissable fade in">
                    		@foreach ($errors->all() as $error)
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <li>{{ $error }}</li>
                            @endforeach
                    	</div>
                    @endif
            </div>
        </div>
    </div>
@endsection