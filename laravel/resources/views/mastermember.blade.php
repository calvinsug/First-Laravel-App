<html>
	<head>
		
		<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/style.css') }}">
		<script src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
		<script src="{{ asset('js/notify.min.js') }}"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$(".notif").notify("Update member success",{className : 'success',autoHideDelay: 3000 , hideDuration: 200});

			})
		</script>
	</head>
	
	<body>

		<div class="container">

			<h1>List Member:</h1>

			@yield('content')
			@yield('footer')


			
		</div>
	</body>

</html>