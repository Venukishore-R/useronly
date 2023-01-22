<!DOCTYPE html>
<html>
<head>
	<title>Admin Home</title>
</head>
<body>
	<h1>Admin Home</h1>
	<p>Hello</p>
	<table>
		<thead>
			<th>ID</th>
			<th>NAME</th>
			<th>EMAIL</th>
		</thead>
		<tbody>
			
			@foreach($admins as $admins)
			<tr>
				<td>{{ $admins->id }}</td>
				<td>{{ $admins->name }}</td>
				<td>{{ $admins->email }}</td>
			</tr>
       		@endforeach
		
		</tbody>
	</table>
</body>
</html>