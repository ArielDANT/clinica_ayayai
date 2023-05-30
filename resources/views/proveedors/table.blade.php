<div class="table-responsive-sm">
    <table class="table table-striped" id="proveedors-table">
        <thead>
            <tr>
                <th>Nombres</th>
        <th>Dirección</th>
        <th>Teléfono</th>
        <th>Correo</th>
        <th>Cédula</th>
        <th>Descripción</th>
        <th>Estado</th>
                <th colspan="3">Acción</th> 
            </tr>
        </thead>
        <tbody>
        @foreach($proveedors as $proveedor)
            <tr>
                <td>{{ $proveedor->pro_nombre }}</td>
            <td>{{ $proveedor->pro_direccion }}</td>
            <td>{{ $proveedor->pro_telefono }}</td>
            <td>{{ $proveedor->pro_correo }}</td>
            <td>{{ $proveedor->pro_cedula }}</td>
            <td>{{ $proveedor->pro_descripcion }}</td>
            <td>@if($proveedor->pro_estado == 1)
                Activo
                @else
                Inactivo
                @endif
               </td>
                <td>
                    {!! Form::open(['route' => ['proveedors.destroy', $proveedor->pro_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('proveedors.show', [$proveedor->pro_id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('proveedors.edit', [$proveedor->pro_id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>