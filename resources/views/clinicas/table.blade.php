<div class="table-responsive-sm">
    <table class="table table-striped" id="clinicas-table">
        <thead>
            <tr>
                <th>Cli Nombres</th>
        <th>Cli Ruc</th>
        <th>Cli Telefono</th>
        <th>Cli Direccion</th>
        <th>Cli Correo</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($clinicas as $clinica)
            <tr>
                <td>{{ $clinica->cli_nombres }}</td>
            <td>{{ $clinica->cli_ruc }}</td>
            <td>{{ $clinica->cli_telefono }}</td>
            <td>{{ $clinica->cli_direccion }}</td>
            <td>{{ $clinica->cli_correo }}</td>
                <td>
                    {!! Form::open(['route' => ['clinicas.destroy', $clinica->cli_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('clinicas.show', [$clinica->cli_id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('clinicas.edit', [$clinica->cli_id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>