<div class="table-responsive-sm">
    <table class="table table-striped" id="salas-table">
        <thead>
            <tr>
                <th>Cli Id</th>
        <th>#</th>
        <th>Clínica</th>
        <th>Sal Nombre</th>
        <th>Sal Descripcion</th>
        <th>Sal Piso</th>
        <th>Sal Numsal</th>
        <th>Sal Estado</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($salas as $salas)
            <tr>
                <td>{{ $salas->cli_id }}</td>
                <td>{{ $loop->iteration}}</td>
                <td>{{ $salas->cli_nombres }}</td>
            <td>{{ $salas->sal_nombre }}</td>
            <td>{{ $salas->sal_descripcion }}</td>
            <td>{{ $salas->sal_piso }}</td>
            <td>{{ $salas->sal_numsal }}</td>
            <td>{{ $salas->sal_estado }}</td>
                <td>
                    {!! Form::open(['route' => ['salas.destroy', $salas->sal_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('salas.show', [$salas->sal_id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('salas.edit', [$salas->sal_id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>