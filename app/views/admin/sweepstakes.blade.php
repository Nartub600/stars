<html>
	<head>
		{{ HTML::style('css/admin.css') }}
	</head>
	<body>
		<h2>Sweepstakes entries</h2>
		<p>
		    @if($deleted == 'yes')
		    <a href="{{ route('admin/sweepstakes') . '?page=' . $entries->getCurrentPage() }}">(only active)</a>
		    @else
		    <a href="{{ route('admin/sweepstakes') . '?deleted=yes' . '&page=' . $entries->getCurrentPage() }}">(show deleted)</a>
		    @endif
		</p>
		<div class="paginador">
			{{ $deleted == 'yes' ? $entries->appends(array('deleted' => 'yes'))->links() : $entries->links() }}
		</div>
		<table>
			<tr>
				<th>First name</th>
				<th>Last name</th>
				<th>Email</th>
				<th>Address</th>
				<th>State</th>
				<th>ZIP</th>
				<th>Subscription</th>
				<th>Created at</th>
				<th>Options</th>
			</tr>
			@foreach($entries as $entry)
			<tr {{ $entry->trashed() ? 'class="unpublished"' : '' }}>
				<td>{{ $entry->first_name }}</td>
				<td>{{ $entry->last_name }}</td>
				<td>{{ $entry->email }}</td>
				<td>{{ $entry->address }}</td>
				<td>{{ $entry->state }}</td>
				<td>{{ $entry->zip }}</td>
				<td>{{ $entry->subscription ? 'Yes' : 'No' }}</td>
				<td>{{ $entry->created_at }}</td>
				<td><a href="{{ action('EntryController@toggle', $entry->id) }}">{{ $entry->trashed() ? 'Restore' : 'Delete' }}</a></td>
			</tr>
			@endforeach
		</table>
		<div class="paginador">
			{{ $deleted == 'yes' ? $entries->appends(array('deleted' => 'yes'))->links() : $entries->links() }}
		</div>
		<p><a href="{{ action('AdminController@sweepstakes_export') }}">Download XML</a></p>
	</body>
</html>