<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Đăng nhập Aditii</title>
        <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 

        <link rel="stylesheet" type="text/css" href="{{asset('login/css/demo.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{asset('login/css/style.css')}}" />
		<link rel="stylesheet" type="text/css" href="{{asset('login/css/animate-custom.css')}}" />

    </head>
    <body>
        <div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top">
                
                <span class="left">
                    <a href="{{ url('trang-chu')}}">
                        <strong>Trở lại trang chủ</strong>
                    </a>
                </span>
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
            <header>
                <h1>Login <span> ADITII</span></h1>
				
            </header>
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="{{route('dangnhap')}}" method="POST" autocomplete="on"> 
                                <h1>Log in</h1> 
                                
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Email </label>
                                    <input id="username" name="email" required="required" type="email" placeholder="mymail@mail.com"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Mật khẩu </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" /> 
                                </p>
                                <p class="keeplogin"> 
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
									<label for="loginkeeping">Lưu mật khẩu</label>
								</p>
                                <p class="login button"> 
                                    <input type="submit" value="Login" /> 
								</p>
                                <p> 
                                    
                                    <input name="_token" type="hidden" value="{{csrf_token()}}" /> 
                                </p>

                                @if(session('thongbao'))
                                <div class="alert alert-success" style="color:red;font-size: 20px;"> 
                                    <b>{{session('thongbao')}}</b>
                                </div>  
                                @endif
                                <p class="change_link">
									Bạn chưa là thành viên ?
									<a href="#toregister" class="to_register">Đăng ký</a>
								</p>
                            </form>
                        </div>

                        <div id="register" class="animate form">
                            <form  action="{{route('dangky')}}" autocomplete="on" method="POST"> 
                                <h1> Sign up </h1> 
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Tên </label>
                                    <input id="usernamesignup" name="usernamesignup" required="required" type="text" placeholder="mysuperusername690" />
                                </p>
                                <p> 
                                    <label for="emailsignup" class="youmail" data-icon="e" > Email</label>
                                    <input id="emailsignup" type="email" name="emailsignup" required="required" type="email" placeholder="mysupermail@mail.com"/> 
                                </p>
                                <p> 
                                    <label for="emailsignup" class="youmail" data-icon="u" > Phone</label>
                                    <input id="emailsignup" type="number" name="phone" required="required"  placeholder="093xxxxx"/> 
                                </p>
                                <p> 
                                    <label for="emailsignup" class="youmail" data-icon="u" >Địa chỉ</label>
                                    <input id="emailsignup" type="text" name="address" required="required"  placeholder="Hà Nội - Viêt Nam .."/> 
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">Password </label>
                                    <input id="passwordsignup" name="passwordsignup" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p> 
                                    <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Nhập lại password </label>
                                    <input id="passwordsignup_confirm" name="passwordsignup_confirm" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p class="signin button"> 
									<input type="submit" value="Sign up"/> 
								</p>
                                <p>
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                </p>
                                <p class="change_link">  
									Bạn đã là thành viên?
									<a href="#tologin" class="to_register"> Đăng nhập </a>
								</p>

                            </form>
                            @if(session('thongbao1'))
                                <div class="alert alert-success" style="color:red;font-size: 20px;"> 
                                    <b>{{session('thongbao1')}}</b>
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
            </section>
        </div>
    </body>
</html>