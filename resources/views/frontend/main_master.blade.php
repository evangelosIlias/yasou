<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Yasou</title>
	<meta name="description" content="">  
	<meta name="author" content="">

   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="{{ asset('frontend/assets/css/base.css')}} ">  
   <link rel="stylesheet" href="{{ asset('frontend/assets/css/main.css')}} ">
   <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor.css')}} ">     

   <!-- script
   ================================================== -->   
	<script src="{{ asset('frontend/assets/js/modernizr.js')}} "></script>
	<script src="{{ asset('frontend/assets/js/pace.min.js')}} "></script>

   <!-- favicons
	================================================== -->
	<link rel="icon" type="{{ asset('frontend/assets/img/png')}}" href="favicon.png">

</head>

<body id="top">

<!-- Start Header -->
@include('frontend.body.header')

<!-- Start Nav -->
@include('frontend.body.navbar')

<!-- The main index yied -->
<main>
    @yield('main')
</main>

<!-- Start right Footer here -->
@include('frontend.body.footer')

</body>
</html>