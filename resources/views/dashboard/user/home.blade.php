<!DOCTYPE html>
<html>
<head>
	<title>User Home</title>
</head>
<body>
	<h1>User Home</h1>
	<p>hiiiii</p>
	<table>
		<thead>
			<th>ID</th>
			<th>NAME</th>
			<th>EMAIL</th>
		</thead>
		<tbody>
			
				@foreach($clients as $client)
				<tr>
        		<td>{{$client->id}}</td>
                <td>{{$client->name}}</td>
                <td>{{$client->email}}</td>
                </tr>
                @endforeach
       		
		</tbody>
	</table>
	<a href="{{route('user.login')}}">Log Out</a>
</body>
</html>