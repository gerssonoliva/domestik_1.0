@extends('../layout.plantilla')

@section('content')
<?php 
use App\Banco;
$cboBanco = array(Banco::pluck('nombre'));
?>
    <h1>Editar Cuenta Bancaria</h1>
    <table>
        {!! Form::model($cuentas, ['method'=>'POST', 'action' => ['Cuenta_bancariaController@update', $cuentas->id]]) !!}
        <tr>
            <td>{!!Form::label('numero_cuenta', 'Número de Cuenta:')!!}</td>
            <td>{!!Form::text('nro_cuenta');!!}</td>
        </tr>
        {{csrf_field()}}
        <tr>
            <td>{!!Form::label('bancos_id', 'Banco:')!!}</td>
            <td>{!!Form::select('bancos_id', $cboBanco, null, ['placeholder' => 'Selecciona Banco'])!!}</td>
        </tr>
        <br>
        <tr>
            <td colspan="2" align="center">{!!Form::submit('Editar')!!}</td>
        </tr>
        {!! Form::close() !!}
    </table>
@stop