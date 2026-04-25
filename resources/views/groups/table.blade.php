<div class="table-responsive">
    <table class="table" id="groups-table">
        <thead>
            <tr>
                <th>Sl </th>
                <th>Name</th>
                <th>Key</th>
                <th>Created At</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @php
            http://127.0.0.1:8000/groups?page=2
            @endphp

        @foreach($groups as $k => $group)
            <tr>
                <td>{{ $groups->firstItem() + $k }}</td>
                <td>{{ $group->name }}</td>
                <td>{{ $group->key }}</td>
                <td>{{ $group->created_at }}</td>
                    <td>
                        {!! Form::open(['route' => ['groups.destroy', $group->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('groups.show', [$group->id]) }}" class='btn btn-outline-primary btn-xs'><i class="im im-icon-Eye" data-placement="top" title="View"></i></a>
                            <a href="{{ route('groups.edit', [$group->id]) }}" class='btn btn-outline-primary btn-xs'><i
                                    class="im im-icon-Pen"  data-toggle="tooltip" data-placement="top" title="Edit"></i></a>
                            {!! Form::button('<i class="im im-icon-Remove" data-toggle="tooltip" data-placement="top" title="Delete"></i>', ['type' => 'submit', 'class' => 'btn btn-outline-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
