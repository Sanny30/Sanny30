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

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>            
                </tr>        
            </thead>
            
            <tbody>
                <tr>
                    <td>{{ $sngl_con->name }}</td>
                    <td>{{ $sngl_con->email }}</td>
                    <td>{{ $sngl_con->phone }}</td>
                    <td>{{ $sngl_con->company->name }}</td>
                    <td>{{ $sngl_con->company->address }}</td>
                    <td>{{ $sngl_con->company->country }}</td>
                </tr>
            </tbody>
        
        </table>
    </body>
</html>