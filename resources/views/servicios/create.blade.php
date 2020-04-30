@extends('../layouts.app')

@section('content')
    <h1>Registrar Servicio</h1>
    <table>
        {!! Form::open(['url' => '/servicios', 'method'=>'post']) !!}
        <tr>
            <td>{!!Form::label('nombre', 'Nombre de Servicio:')!!}</td>
            <td>{!!Form::text('nombre');!!}</td>
        </tr>
        {{csrf_field()}}
        <tr>
            <td>{!!Form::label('costo', 'Costo de Servicio:')!!}</td>
            <td>{!!Form::text('costo');!!}</td>
        </tr>
        <br>
        <tr>
            <td colspan="2" align="center">{!!Form::submit('Guardar')!!}</td>
        </tr>
        {!! Form::close() !!}
    </table>
@stop