<html>
    <head>
        <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        {{ HTML::style('css/admin.css') }}
    </head>
    <body>
        <h2>Flagged promises</h2>
        <div class="paginador">
            {{ $promises->links() }}
        </div>
        <table>
            <tr>
                <th>Social network</th>
                <th>Social network ID</th>
                <th>Name</th>
                <th>E-mail</th>
                <th>ZIP</th>
                <th>Promise</th>
                <th>Profile picture</th>
                <th>Flagged</th>
                <th># Shares</th>
                <th>Created at</th>
                <th>Options</th>
            </tr>
            @foreach($promises as $promise)
            <tr {{ $promise->trashed() ? 'class="deleted"' : '' }}>
                <td>{{ $promise->user->social_network }}</td>
                <td>{{ $promise->user->social_network != 'tumblr' ? $promise->user->social_network_id : $promise->user->name }}</td>
                <td>{{ $promise->user->social_network != 'tumblr' ? $promise->user->name : 'N/A' }}</td>
                <td>{{ $promise->user->email }}</td>
                <td>{{ $promise->user->zip }}</td>
                <td>{{ $promise->text }}</td>
                <td><img src="{{ $promise->user->profile_picture }}" /></td>
                <td>{{ $promise->flagged ? 'Yes' : 'No' }}</td>
                <td>{{ count($promise->shares) }}</td>
                <td>{{ $promise->created_at }}</td>
                <td>
                    <a href="{{ url('admin/toggle-promise', $promise->id) }}">{{ $promise->trashed() ? 'Publish' : 'Unpublish' }}</a>
                    @if($promise->flagged)
                    <a href="{{ url('unflag', $promise->id) }}">Unflag</a>
                    @endif
                </td>
            </tr>
            @endforeach
        </table>
        <div class="paginador">
            {{ $promises->links() }}
        </div>
    </body>
</html>