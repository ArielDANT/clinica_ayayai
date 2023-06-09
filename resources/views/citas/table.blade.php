<div class="table-responsive-sm">
    <table class="table table-striped" id="citas-table">
        <thead>
            <tr>
                <th>Sal Id</th>
        <th>Cit Fecha</th>
        <th>Cit Documento</th>
        <th>Cit Estado</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($citas as $citas)
            <tr>
                <td>{{ $citas->sal_id }}</td>
            <td>{{ $citas->cit_fecha }}</td>
            <td>{{ $citas->cit_documento }}</td>
            <td>{{ $citas->cit_estado }}</td>
                <td>
                    {!! Form::open(['route' => ['citas.destroy', $citas->cit_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('citas.show', [$citas->cit_id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('citas.edit', [$citas->cit_id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>