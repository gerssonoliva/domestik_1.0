@extends('../layout.plantilla')

@section('content')
    <h1>Editar Banco</h1>
    <table>
        {!! Form::model($bancos, ['method'=>'POST', 'action' => ['BancoController@update', $bancos->id]]) !!}
        <tr>
            <td>{!!Form::label('nombre', 'Nombre de Banco:')!!}</td>
            <td>{!!Form::text('nombre');!!}</td>
        </tr>
        {{csrf_field()}}
        <br>
        <tr>
            <td colspan="2" align="center">{!!Form::submit('Editar')!!}</td>
        </tr>
        {!! Form::close() !!}
    </table>
    <!--
    {!! Form::open(['method'=>'DELETE', 'action' => ['BancoController@destroy', $bancos->id]]) !!}
        {{csrf_field()}}
        {!!Form::submit('Eliminar')!!}
    {!! Form::close() !!}
    -->
@stop