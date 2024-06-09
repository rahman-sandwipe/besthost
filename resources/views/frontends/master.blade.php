<!DOCTYPE html>
<html lang="en">
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
    
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="author" content="Mironcoder">
		<meta name="email" content="mironcoder@gmail.com">
		<meta name="profile" content="https://themeforest.net/user/mironcoder">
		<meta name="name" content="Domhost">
		<meta name="description" content="Domhost - domain web hosting html template">
		<meta name="keywords" content="domain, hosting, whmcs, hosting whmcs, whmcs template, hosting html, web hosting, hosting template, html hosting template, domain market, domain portfolio, domain listing, domain sale, domain broker, domain selling">
		@yield('page_title')
        @include('frontends.inc.styles')
	</head>
	<body>
        
        @include('frontends.inc.header')

		@yield('main_contents')

		@include('frontends.inc.footer')
		@include('frontends.inc.scripts')
	</body>
</html>