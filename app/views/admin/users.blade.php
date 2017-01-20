<html>
	<head>

	</head>
	<body>
		<h1>Users</h1>
		<table>
			<tr>
				<th>ID</th>
				<th>Social network</th>
				<th>Social network ID</th>
				<th>Name</th>
				<th>E-mail</th>
				<th>ZIP</th>
				<th>Profile picture</th>
				<th>Last IP address</th>
				<th>Last login</th>
				<th>Created at</th>
				<th>Promise</th>
				<th>Moderation</th>
			</tr>
			@foreach($users as $user)
			<tr>
				<td>{{ $user->id }}</td>
				<td>{{ $user->social_network }}</td>
				<td>{{ $user->social_network != 'tumblr' ? $user->social_network_id : $user->name }}</td>
				<td>{{ $user->social_network != 'tumblr' ? $user->name : 'N/A' }}</td>
				<td>{{ $user->email }}</td>
				<td>{{ $user->zip }}</td>
				<td><img src="{{ $user->profile_picture }}" /></td>
				<td>{{ $user->ip_address }}</td>
				<td>{{ $user->last_login }}</td>
				<td>{{ $user->created_at }}</td>
				<td>{{ $user->promise ? $user->promise->text : '' }}</td>
				<td>
					{{ $user->promise ? ($user->promise->moderated ? 'Not visible' : 'Visible') : 'N/A' }}
				</td>
			</tr>
			@endforeach
		</table>
	</body>
</html>