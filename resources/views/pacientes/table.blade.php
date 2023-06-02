<div class="table-responsive-sm">
    <table class="table table-striped" id="pacientes-table">
        <thead>
            <tr>
                <th>Nombres</th>
        <th>Apellidos</th>
        <th>Cédula</th>
        <th>Dirección</th>
        <th>Teléfono</th>
        <th>Sexo</th>
        <th>Correo</th>
        <th>Repre</th>
        <th>Estado</th>
                <th colspan="3">Opciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach($pacientes as $pacientes)
            <tr>
                <td>{{ $pacientes->pac_nombres }}</td>
            <td>{{ $pacientes->pac_apellidos }}</td>
            <td>{{ $pacientes->pac_cedula }}</td>
            <td>{{ $pacientes->pac_direccion }}</td>
            <td>{{ $pacientes->pac_celular }}</td>
            <td>{{ $pacientes->pac_sexo }}</td>
            <td>{{ $pacientes->pac_correo }}</td>
            <td>{{ $pacientes->pac_repre }}</td>
            <td>{{ $pacientes->pac_estado }}</td>
                <td>
                    {!! Form::open(['route' => ['pacientes.destroy', $pacientes->pac_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('pacientes.show', [$pacientes->pac_id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('pacientes.edit', [$pacientes->pac_id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('¿Estás seguro de eliminar este paciente?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>