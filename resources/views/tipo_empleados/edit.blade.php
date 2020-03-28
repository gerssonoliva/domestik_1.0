@extends('../layout.plantilla')

@section('content')
    <h1>Editar Perfil</h1>
    <table>
        {!! Form::model($tipo_empleados, ['method'=>'post', 'action' => ['Tipo_empleadoController@update', $tipo_empleados->id]]) !!}
        <tr>
            <td>{!!Form::label('nombre', 'Nombre de Perfil:')!!}</td>
            <td>{!!Form::text('nombre');!!}</td>
        </tr>
        {{csrf_field()}}
        <br>
        <tr>
            <td>{!!Form::label('descripcion', 'Descripción:')!!}</td>
            <td>{!!Form::text('descripcion');!!}</td>
        </tr>
        <br>
        <tr>
            <td colspan="2" align="center">{!!Form::submit('Editar')!!}</td>
        </tr>
        {!! Form::close() !!}
    </table>
@stop