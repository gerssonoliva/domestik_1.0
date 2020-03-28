@extends('../layout.plantilla')

@section('content')
    <h1>Editar Proveedor</h1>
    <table>
        {!! Form::model($proveedores, ['method'=>'post', 'action' => ['ProveedorController@update', $proveedores->id]]) !!}
        <tr>
            <td>{!!Form::label('nombre', 'Nombre o Razón Social:')!!}</td>
            <td>{!!Form::text('nombre');!!}</td>
        </tr>
        {{csrf_field()}}
        <tr>
            <td>{!!Form::label('ruc', 'N° RUC:')!!}</td>
            <td>{!!Form::text('ruc');!!}</td>
        </tr>
        <tr>
            <td>{!!Form::label('direccion', 'Dirección:')!!}</td>
            <td>{!!Form::text('direccion');!!}</td>
        </tr>
        <tr>
            <td>{!!Form::label('telefono', 'Teléfono:')!!}</td>
            <td>{!!Form::text('telefono');!!}</td>
        </tr>
        <tr>
            <td>{!!Form::label('correo', 'Correo:')!!}</td>
            <td>{!!Form::text('correo');!!}</td>
        </tr>
        <tr>
            <td>{!!Form::label('titular', 'Titular:')!!}</td>
            <td>{!!Form::text('titular');!!}</td>
        </tr>
        <br>
        <tr>
            <td colspan="2" align="center">{!!Form::submit('Editar')!!}</td>
        </tr>
        {!! Form::close() !!}
    </table>
@stop