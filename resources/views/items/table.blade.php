<table class="table table-responsive" id="items-table">
    <thead>
        <tr>
            <th>Name</th>
        <th>Item Type</th>
        <th>Category Id</th>
        <th>Start Date</th>
        <th>End Date</th>
        <th>Use Pin</th>
        <th>Pin</th>
        <th>Url</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($items as $item)
        <tr>
            <td>{!! $item->name !!}</td>
            <td>{!! $item->item_type !!}</td>
            <td>{!! $item->category_id !!}</td>
            <td>{!! $item->start_date !!}</td>
            <td>{!! $item->end_date !!}</td>
            <td>{!! $item->use_pin !!}</td>
            <td>{!! $item->pin !!}</td>
            <td>{!! $item->url !!}</td>
            <td>
                {!! Form::open(['route' => ['items.destroy', $item->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('items.show', [$item->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('items.edit', [$item->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>