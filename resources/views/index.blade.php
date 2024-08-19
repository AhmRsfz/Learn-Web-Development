<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Data</title>
	</head>
	<body>
		<div class="container">
			<table border="1">
				<tr>
					<td>Nama</td>
					<td>Email</td>
				</tr>
				@foreach ($data as $d)
				<tr>
					<td>{{ $d->name }}</td>
					<td>{{ $d->email }}</td>
				</tr>
				@endforeach
			</table>
		</div>
	</body>
</html>