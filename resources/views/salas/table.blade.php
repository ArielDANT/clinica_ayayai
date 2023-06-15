<div class="table-responsive-sm">
    <table class="table table-striped" id="salas-table">
        <thead>
            <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Piso</th>
        <th>Número de sala</th>
        <th>Estado</th>
                <th colspan="3">Opciones</th>
            </tr>
        </thead>
        <tbody>
        <form action="{{route('salas.index')}}" method="GET">
                <div class="btn-group">
                    <input type="text" name="busqueda" class="form-control">
                    <input type="submit" value="Buscar" class="btn btn-primary">
                </div>
                        
        </form>
        @foreach($salas as $salas)
            <tr>
                <td>{{ $loop->iteration}}</td>
            <td>{{ $salas->sal_nombre }}</td>
            <td>{{ $salas->sal_piso }}</td>
            <td>{{ $salas->sal_numsal }}</td>
            <td>@if($salas->sal_estado == 1)
                Activo
                @else
                Inactivo
                @endif</td>
                <td>
                    {!! Form::open(['route' => ['salas.destroy', $salas->sal_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('salas.show', [$salas->sal_id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('salas.edit', [$salas->sal_id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        <!--<a href="{{ route('salas.onepdf', [$salas->sal_id]) }}" class='btn btn-ghost-info'><i class="fa fa-book"></i></a> -->
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>