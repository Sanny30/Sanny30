<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    
    @if (Session::has('status'))
        <div class="alert alert-success">{{ Session::get('status') }}</div>
    @endif

    <form action="{{ url('add-con') }}" method="POST">
        @csrf
        <label>Name: <input type="text" name="name"></label>
        <br>
        <label>Email: <input type="email" name="email"></label>
        <br>
        <label>Phone: <input type="text" name="phone"></label>
        <br>    

        <input type="submit" value="Add Contact">
    </form>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th></th>
                <th></th>
                <th></th>            
            </tr>        
        </thead>
        @foreach($contacts as $contact)
        <tbody>
            <tr>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->phone }}</td>
                <td>
    				<a href="{{ url('edit-con/' .$contact->id) }}">Edit |</a>
    				<a href="{{ url('show-con/' .$contact->id) }}">View |</a>
    				<a href="{{ url('/del-con/' .$contact->id) }}">Delete</a>
    			</td>
            </tr>
        </tbody>
        @endforeach
    </table>

</body>
</html>