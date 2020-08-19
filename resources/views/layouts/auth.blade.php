<!DOCTYPE html>
<html lang="en" >

    <head>
        <meta charset="utf-8" />
        
        <title>Metronic | Login</title>
        <meta name="description" content="Latest updates and statistic charts"> 
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

        <!--begin::Web font -->
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
        <script>
          WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>
        <!--end::Web font -->

        
		<!--begin::Base Styles -->
				<link href="{{asset('assets/vendors/base/vendors.bundle.css')}}" rel="stylesheet" type="text/css" /><!--RTL version:<link href="../../../assets/vendors/base/vendors.bundle.rtl.css" rel="stylesheet" type="text/css" />-->


				<link href="{{asset('assets/demo/default/base/style.bundle.css')}}" rel="stylesheet" type="text/css" /><!--RTL version:<link href="../../../assets/demo/default/base/style.bundle.rtl.css" rel="stylesheet" type="text/css" />-->


		        <!--end::Base Styles -->

        <link rel="shortcut icon" href="{{asset('assets/demo/default/media/img/logo/favicon.ico')}}" /> 
    </head>

    <body  class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >

        
        
    	<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page">
    
			
				<div class="m-grid__item m-grid__item--fluid m-grid m-grid--desktop m-grid--ver-desktop m-grid--hor-tablet-and-mobile m-login m-login--6" id="m_login">
	<div class="m-grid__item   m-grid__item--order-tablet-and-mobile-2  m-grid m-grid--hor m-login__aside " style="background-image: url(../../../assets/app/media/img//bg/bg-4.jpg);">
		<div class="m-grid__item">
			<div class="m-login__logo">
				<a href="#">
					<img src="{{asset('assets/app/media/img/logos/FINAL-Logo-200x70.png')}}">
				</a>
			</div>
		</div>

		<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver">
			<div class="m-grid__item m-grid__item--middle">
				<span class="m-login__title">Creative Lok Tender Management</span>
				
			</div>
		</div>

		<div class="m-grid__item">
			<div class="m-login__info">
				<div class="m-login__section">
					<a href="#" class="m-link">&copy 2020 @TrendsBirdLtd</a>
				</div>
				
			</div>
		</div>
    </div>
    <div class="m-grid__item m-grid__item--fluid  m-grid__item--order-tablet-and-mobile-1  m-login__wrapper">
    @yield('content')
   
</div>
<!--end::Body-->
 </div>
</div>


    <!--begin::Base Scripts -->        
<script src="{{asset('assets/vendors/base/vendors.bundle.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/demo/default/base/scripts.bundle.js')}}" type="text/javascript"></script>
    <!--end::Base Scripts -->   




        
<!--begin::Page Snippets --> 
    <script src="{{asset('assets/snippets/custom/pages/user/login6.js')}}" type="text/javascript"></script>
    <!--end::Page Snippets -->   

</body>

</html>