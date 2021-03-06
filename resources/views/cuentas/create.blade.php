@extends('../layouts.app')

@section('content')
<?php 
use App\Banco;
$cboBanco = Banco::pluck('nombre', 'id');
?>
    <h1>Registrar Cuenta Bancaria</h1>
    <table>
        {!! Form::open(['url' => '/cuentas', 'method'=>'post']) !!}
        <tr>
            <td>{!!Form::label('numero_cuenta', 'Número de Cuenta:')!!}</td>
            <td>{!!Form::text('nro_cuenta');!!}</td>
        </tr>
        {{csrf_field()}}
        <tr>
            <td>{!!Form::label('numero_cci', 'Número de CCI:')!!}</td>
            <td>{!!Form::text('cci');!!}</td>
        </tr>
        <tr>
            <td>{!!Form::label('bancos_id', 'Banco:')!!}</td>
            <td>{!!Form::select('bancos_id', $cboBanco, null, ['placeholder' => 'Selecciona Banco', 'class' => 'form-control m-bot15'])!!}</td>
        </tr>
        <br>
        <tr>
            <td colspan="2" align="center">{!!Form::submit('Guardar')!!}</td>
        </tr>
        {!! Form::close() !!}
    </table>
    @if(count($errors) > 0)
        @foreach($errors->all() as $error)
            {{$error}}
        @endforeach
    @endif
@stop