@extends('../layouts.app')

@section('content')
    <h1>Registrar Perfil</h1>
    <table>
        {!! Form::open(['url' => '/tipo_empleados', 'method'=>'post']) !!}
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
            <td colspan="2" align="center">{!!Form::submit('Guardar')!!}</td>
        </tr>
        {!! Form::close() !!}
    </table>
    <!--</form>-->
@stop