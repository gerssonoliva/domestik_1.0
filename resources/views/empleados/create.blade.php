@extends('../layouts.app')

@section('content')
<?php 
use App\Tipo_empleado;
$cboPerfil = Tipo_empleado::pluck('nombre', 'id');
?>
    <h1>Registrar Producto</h1>
    <table>
        {!! Form::open(['url' => '/empleados', 'method'=>'post']) !!}
        <tr>
            <td>{!!Form::label('e_nombre', 'Nombre:')!!}</td>
            <td>{!!Form::text('e_nombre');!!}</td>
        </tr>
        {{csrf_field()}}
        <tr>
            <td>{!!Form::label('apellido', 'Apellido:')!!}</td>
            <td>{!!Form::text('apellido');!!}</td>
        </tr>
        <tr>
            <td>{!!Form::label('direccion', 'Dirección:')!!}</td>
            <td>{!!Form::text('direccion', '');!!}</td>
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
            <td>{!!Form::label('correo', 'Correo Personal:')!!}</td>
            <td>{!!Form::email('correo');!!}</td>
        </tr>
        
        <tr>
            <td>{!!Form::label('email', 'Correo Domestik:')!!}</td>
            <td>{!!Form::email('email');!!}</td>
        </tr>
        <tr>
            <td>{!!Form::label('password', 'Contraseña:')!!}</td>
            <td>{!!Form::password('password');!!}</td>
        </tr>
        <tr>
            <td>{!!Form::label('tipo_empleados_id', 'Perfil:')!!}</td>
            <td>{!!Form::select('tipo_empleados_id', $cboPerfil, null, ['placeholder' => 'Selecciona Perfil', 'class' => 'form-control m-bot15'])!!}</td>
        </tr>
        <br>
        <tr>
            <td colspan="2" align="center">{!!Form::submit('Guardar')!!}</td>
        </tr>
        {!! Form::close() !!}
    </table>
@stop