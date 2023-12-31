<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Ansonika">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">
	
    <!-- GOOGLE WEB FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{asset('assetss/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assetss/css/style.css')}}" rel="stylesheet">

	<!-- SPECIFIC CSS -->
    <link href="{{asset('assetss/css/home_1.css')}}" rel="stylesheet">
    <link href="{{asset('assetss/css/blog.css')}}" rel="stylesheet">


    <!-- YOUR CUSTOM CSS -->
    <link href="{{asset('assetss/css/custom.css')}}" rel="stylesheet">

</head>


<body>
    <div id="page">
		
		
        @include('frontend.inc.header')
     
        @yield('content')
   
        @include('frontend.inc.footer')

	</div>
        
    </body>
</html>