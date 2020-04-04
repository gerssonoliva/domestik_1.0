@extends('../layouts.app')

@section('content')
    <h1>Editar Cliente</h1>
    <table>
        {!! Form::model($clientes, ['method'=>'POST', 'action' => ['ClienteController@update', $clientes->id]]) !!}
        <tr>
            <td>{!!Form::label('nombre', 'Nombre:')!!}</td>
            <td>{!!Form::text('nombre');!!}</td>
        </tr>
        {{csrf_field()}}
        <tr>
            <td>{!!Form::label('apellido', 'Apellido:')!!}</td>
            <td>{!!Form::text('apellido');!!}</td>
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
            <td>{!!Form::label('fecha_nac', 'Fecha de Nacimiento:')!!}</td>
            <td>{!!Form::date('fecha_nac');!!}</td>
        </tr>
        <tr>
            <td>{!!Form::label('correo', 'Correo:')!!}</td>
            <td>{!!Form::email('correo');!!}</td>
        </tr>
        <tr>
            <td>{!!Form::label('usuario', 'Usuario:')!!}</td>
            <td>{!!Form::text('usuario');!!}</td>
        </tr>
        <tr>
            <td>{!!Form::label('contra', 'Contraseña:')!!}</td>
            <td>{!!Form::password('contra');!!}</td>
        </tr>
        <br>
        <tr>
            <td colspan="2" align="center">{!!Form::submit('Editar')!!}</td>
        </tr>
        {!! Form::close() !!}
    </table>
@stop