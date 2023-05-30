<div class="table-responsive-sm">
    <table class="table table-striped" id="usuarios-table">
        <thead>
            <tr>
                <th>#</th>
                <th>Empleado</th>
                <th>Usuario</th>
                <th>Perfil</th>
                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach($usuarios as $usuarios)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $usuarios->epl_nombres }}</td>
            <td>{{ $usuarios->usu_usuario }}</td>
            <td>{{ $usuarios->usu_perfil }}</td>
                <td>
                    {!! Form::open(['route' => ['usuarios.destroy', $usuarios->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('usuarios.show', [$usuarios->id]) }}" class='btn btn-ghost-success'><i class="fa fa-key"></i></a>
                        <a href="{{ route('usuarios.edit', [$usuarios->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>