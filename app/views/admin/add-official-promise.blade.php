<html>
    <head>
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="{{ asset('js/jquery.form.min.js') }}"></script>
        {{ HTML::style('css/admin.css') }}
        <script>
        $(function(){
            $('#btn_official_promise').one('click', official_promise_handler);

            function official_promise_handler(e) {
                e.preventDefault();

                $('#frm_official_promise').ajaxSubmit({
                    beforeSubmit: function() {
                        $('*').css('cursor', 'wait');
                    },
                    success: function(data) {
                        if(data.status == 'ok') {
                            location.reload();
                        } else {
                            alert(data.message);
                        }
                    },
                    complete: function() {
                        $('#btn_official_promise').one('click', official_promise_handler);
                        $('*').css('cursor', 'auto');
                    }
                });
            }

            $('#user_id').on('change', function(){
                if($('#user_id').val() != '') {
                    $('#user_fieldset').hide();
                } else {
                    $('#user_fieldset').show();
                }
            });

            $('.btn_delete').on('click', function(e){
                e.preventDefault();

                var boton = $(this);

                $.ajax({
                    beforeSend: function() {
                        return confirm('Confirm delete');
                    },
                    url: boton.attr('href'),
                    success: function(data) {
                        location.reload();
                    }
                });
            });
        });
        </script>
    </head>
    <body>
        <div>
            <h2>Official promises</h2>
            <p>
                @if($unpublished == 'yes')
                <a href="{{ route('admin/official_promises') }}">(only published)</a>
                @else
                <a href="{{ route('admin/official_promises') . '?unpublished=yes' }}">(show unpublished)</a>
                @endif
            </p>
            <table>
                <tr>
                    <th>User name</th>
                    <th>Profile picture</th>
                    <th>Promise text</th>
                    <th>Options</th>
                </tr>
                @foreach($promises as $promise)
                <tr {{ $promise->trashed() ? 'class="unpublished"' : '' }}>
                    <td>{{ $promise->user->name }}</td>
                    <td><img src="{{ $promise->user->profile_picture }}" /></td>
                    <td>{{ $promise->text }}</td>
                    <td>
                        <a href="{{ url('admin/toggle-promise', $promise->id) }}">{{ $promise->trashed() ? 'Publish' : 'Unpublish' }}</a>
                        <a class="btn_delete" href="{{ action('PromiseController@delete', $promise->id) }}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>

        <div>
            <h2>Add new official promise</h2>
            <form id="frm_official_promise" action="{{ action('PromiseController@add_official_promise') }}" method="post">
                @if(count($users) > 0)
                <!-- <label for="user_id">User:</label>
                <select id="user_id" name="user_id">
                    <option value="">---</option>
                    @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select> -->
                @endif
                <fieldset id="user_fieldset">
                    <h3>User:</h3>
                    <p>
                        <label>Name:</label>
                        <input type="text" name="user_name" />
                    </p>
                    <p>
                        <label>Profile picture URL:</label>
                        <input type="text" name="profile_picture" />
                    </p>
                </fieldset>
                <fieldset>
                    <h3>Promise:</h3>
                    <p>
                        <label>Text:</label>
                        <input type="text" name="text" />
                    </p>
                </fieldset>
                <p>
                    <input id="btn_official_promise" type="submit" value="Submit" />
                </p>
            </form>
        </div>
    </body>
</html>