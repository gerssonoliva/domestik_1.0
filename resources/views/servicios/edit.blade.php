@extends('../layouts.app')

@section('content')
    <h1>Editar Servicio</h1>
    <table>
        {!! Form::model($servicios, ['method'=>'POST', 'action' => ['ServicioController@update', $servicios->id]]) !!}
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
            <td colspan="2" align="center">{!!Form::submit('Editar')!!}</td>
        </tr>
        {!! Form::close() !!}
    </table>
@stop