<div class="table-responsive-sm">
    <table class="table table-striped" id="doctores-table">
        <thead>
            <tr>
                <th>Nombres</th>
        <th>Apellidos</th>
        <th>Cédula</th>
        <th>Correo</th>
        <th>Estado</th>
                <th colspan="3">Opciones</th>
            </tr>
        </thead>
        <tbody>
        <form action="{{route('doctores.index')}}" method="GET">
                <div class="btn-group">
                    <input type="text" name="busqueda" class="form-control">
                    <input type="submit" value="Buscar" class="btn btn-primary">
                </div>
                        
        </form>

        @foreach($doctores as $doctores)
            <tr>
                <td>{{ $doctores->doc_nombres }}</td>
            <td>{{ $doctores->doc_apellidos }}</td>
            <td>{{ $doctores->doc_cedula }}</td>
            <td>{{ $doctores->doc_correo }}</td>
            <td>@if($doctores->doc_estado == 1)
                Activo
                @else
                Inactivo
                @endif
            </td>
                <td>
                    {!! Form::open(['route' => ['doctores.destroy', $doctores->doc_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('doctores.show', [$doctores->doc_id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('doctores.edit', [$doctores->doc_id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
</div>
