@extends('../layout.plantilla')

@section('content')
    <h1>Registrar Proveedor</h1>
    <!--<form action="/domestik_1.0/public/admin" method="post">-->
    <table>
        {!! Form::open(['url' => '/proveedores', 'method'=>'post']) !!}
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
            <td colspan="2" align="center">{!!Form::submit('Guardar')!!}</td>
        </tr>
        {!! Form::close() !!}
    </table>
    <!--</form>-->
@stop