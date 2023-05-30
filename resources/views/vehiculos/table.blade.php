<div class="table-responsive-sm">
    <table class="table table-striped" id="vehiculos-table">
        <thead>
            <tr>
        <th>#</th>
        <th>Empresa</th>
        <th> Id</th>
        <th>Marca</th>
        <th>Modelo</th>
        <th>Áño</th>
        <th>Kilometraje</th>
        <th>Subtipo</th>
        <th>Color</th>
        <th>Estado</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($vehiculos as $vehiculos)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $vehiculos->emp_nombres }}</td>
                <td>{{ $vehiculos->veh_id }}</td>
            <td>{{ $vehiculos->veh_marca }}</td>
            <td>{{ $vehiculos->veh_modelo }}</td>
            <td>{{ $vehiculos->veh_anio }}</td>
            <td>{{ $vehiculos->veh_kilometraje }}</td>
            <td>{{ $vehiculos->veh_subtipo }}</td>
            <td>{{ $vehiculos->veh_color }}</td>
            <td>@if($vehiculos->veh_estado ==1)
                Activo
                @else
                Inactivo
                @endif
            </td>
                <td>
                    {!! Form::open(['route' => ['vehiculos.destroy', $vehiculos->veh_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('vehiculos.show', [$vehiculos->veh_id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('vehiculos.edit', [$vehiculos->veh_id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>