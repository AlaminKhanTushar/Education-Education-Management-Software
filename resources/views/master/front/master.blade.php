<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Education</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
    <meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
    <meta name="author" content="freehtml5.co" />

    <!--
    //////////////////////////////////////////////////////

    FREE HTML5 TEMPLATE
    DESIGNED & DEVELOPED by FreeHTML5.co

    Website: 		http://alamintushar.com/
    Email: 			alamincse28@gmail.com
    Twitter: 		http://twitter.com/alamintushar
    Facebook: 		https://www.facebook.com/alamintushar.cse

    //////////////////////////////////////////////////////
     -->

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    @include('master.front.includes.css')
</head>
<body>

<div class="fh5co-loader"></div>

<div id="page">
    @include('master.front.includes.menu')
    @yield('body')



    @include('master.front.includes.footer')
</div>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
</div>

<!-- ModalLogin Box -->
<div class="modal fade" id="ModalLogin" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">

                <div class="wm-modallogin-form wm-login-popup">
                    <span class="wm-color">Login to Your Account</span>
                    <p class="text-success text-center">{{Session::get('message')}}</p>
                    <form action="{{route('user-login')}}" method="POST">
                        @csrf
                        <ul>
                            <li> <input type="text" name="email" value="Your Email" onblur="if(this.value == '') { this.value ='Your Username'; }" onfocus="if(this.value =='Your Username') { this.value = ''; }"> </li>
                            <li> <input type="password" name="password" value="password" onblur="if(this.value == '') { this.value ='password'; }" onfocus="if(this.value =='password') { this.value = ''; }"> </li>
                            <li> <a href="#" class="wm-forgot-btn">Forgot Password?</a> </li>
                            <div class="">
                                <label><input type="radio" name="check" value="1"/> Teacher</label>
                                <label><input type="radio" name="check" value="0"/> Student</label>
                                <label><input type="radio" name="check" value="2"/> Employ</label>
                            </div>
                            <li> <input type="submit" value="Sign In"> </li>
                        </ul>
                    </form>
                </div>
                <div class="wm-modallogin-form wm-register-popup">
                    <span class="wm-color">create Your Account today</span>
                    <form>
                        <ul>
                            <li> <input type="text" value="Your Email" onblur="if(this.value == '') { this.value ='Your Username'; }" onfocus="if(this.value =='Your Username') { this.value = ''; }"> </li>
                            <li> <input type="text" value="Your E-mail" onblur="if(this.value == '') { this.value ='Your E-mail'; }" onfocus="if(this.value =='Your E-mail') { this.value = ''; }"> </li>
                            <li> <input type="password" value="password" onblur="if(this.value == '') { this.value ='password'; }" onfocus="if(this.value =='password') { this.value = ''; }"> </li>
                            <li> <input type="text" value="Confirm Password" onblur="if(this.value == '') { this.value ='Confirm Password'; }" onfocus="if(this.value =='Confirm Password') { this.value = ''; }"> </li>
                            <li> <input type="submit" value="Create Account"> </li>
                        </ul>
                    </form>
                </div>

            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- ModalLogin Box -->

<!-- jQuery -->
@include('master.front.includes.script')
</body>
</html>

