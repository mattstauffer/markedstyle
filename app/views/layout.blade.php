<!DOCTYPE html>
<html>
	<head>
		<title>Markedstyle</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
        <link href="/css/app.css" rel="stylesheet">
	</head>
	<body>
		@include('partials.header')
		@yield('content')
		@include('partials.footer')

        <script src="/js/vendor/jquery-2.0.3.min.js"></script>
        <script src="/js/main.js"></script>

		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-40114814-2', 'markedstyle.com');
		  ga('send', 'pageview');
		</script>
	</body>
</html>
