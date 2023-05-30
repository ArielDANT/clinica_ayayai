<div class="table-responsive-sm">
    <table class="table table-striped" id="precios-table">
        <thead>
            <tr>
                <th>Pvp</th>
        <th>Pvd</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($precios as $precios)
            <tr>
                <td>{{ $precios->pre_pvp }}</td>
            <td>{{ $precios->pre_pvd }}</td>
                <td>
                    {!! Form::open(['route' => ['precios.destroy', $precios->pre_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('precios.show', [$precios->pre_id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('precios.edit', [$precios->pre_id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>