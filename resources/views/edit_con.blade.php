<!doctype html>
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

		<!-- Popper JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

	</head>

    <body>

    	<form action="{{ url('up-con/'.$sngl_view->id) }}" method="POST">
    		@csrf
    		<label>Full Name</label><input type="text" name="name" value="{{ $sngl_view->name }}">
    		<label>Email Address</label><input type="text" name="email" value="{{ $sngl_view->email }}">
    		<label>Mobile Number</label><input type="text" name="phone" value="{{ $sngl_view->phone }}">
    		<button type="submit">Update Contac</button>
    	</form>
       
    </body>
</html>