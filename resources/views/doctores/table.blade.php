<div class="table-responsive-sm">
    <table class="table table-striped" id="doctores-table">
        <thead>
            <tr>
                <th>Doc Nombres</th>
        <th>Doc Apellidos</th>
        <th>Doc Cedula</th>
        <th>Doc Direccion</th>
        <th>Doc Correo</th>
        <th>Doc Sexo</th>
        <th>Doc Especialidad</th>
        <th>Doc Estado</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($doctores as $doctores)
            <tr>
                <td>{{ $doctores->doc_nombres }}</td>
            <td>{{ $doctores->doc_apellidos }}</td>
            <td>{{ $doctores->doc_cedula }}</td>
            <td>{{ $doctores->doc_direccion }}</td>
            <td>{{ $doctores->doc_correo }}</td>
            <td>{{ $doctores->doc_sexo }}</td>
            <td>{{ $doctores->doc_especialidad }}</td>
            <td>{{ $doctores->doc_estado }}</td>
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