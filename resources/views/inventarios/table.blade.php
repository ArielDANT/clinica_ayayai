<div class="table-responsive-sm">
    <table class="table table-striped" id="inventarios-table">
        <thead>
            <tr>
                <th>Proveedor</th>
        <th>Fecha</th>
        <th>Documento</th>
        <th>Estado</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($inventarios as $inventario)
            <tr>
                <td>{{ $inventario->pro_id }}</td>
            <td>{{ $inventario->inv_fecha }}</td>
            <td>{{ $inventario->inv_documento }}</td>
            <td>{{ $inventario->inv_estado }}</td>
                <td>
                    {!! Form::open(['route' => ['inventarios.destroy', $inventario->inv_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('inventarios.show', [$inventario->inv_id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('inventarios.edit', [$inventario->inv_id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>