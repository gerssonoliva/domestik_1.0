@extends('../layout.plantilla')

@section('content')
<?php 
use App\Proveedor;
$cboProveedor = Proveedor::pluck('nombre', 'id');
?>
    <h1>Registrar Producto</h1>
    <table>
        {!! Form::open(['url' => '/productos', 'method'=>'post']) !!}
        <tr>
            <td>{!!Form::label('p_nombre', 'Nombre Producto:')!!}</td>
            <td>{!!Form::text('p_nombre');!!}</td>
        </tr>
        {{csrf_field()}}
        <tr>
            <td>{!!Form::label('fecha_ing', 'Fecha de Ingreso:')!!}</td>
            <td>{!!Form::date('fecha_ing', \Carbon\Carbon::now());!!}</td>
        </tr>
        <tr>
            <td>{!!Form::label('costo', 'Costo:')!!}</td>
            <td>{!!Form::number('costo', '');!!}</td>
        </tr>
        <tr>
            <td>{!!Form::label('stock', 'Stock:')!!}</td>
            <td>{!!Form::text('stock');!!}</td>
        </tr>
        <tr>
            <td>{!!Form::label('proveedores_id', 'Proveedor:')!!}</td>
            <td>{!!Form::select('proveedores_id', $cboProveedor, null, ['placeholder' => 'Selecciona Proveedor', 'class' => 'form-control m-bot15'])!!}</td>
        </tr>
        <br>
        <tr>
            <td colspan="2" align="center">{!!Form::submit('Guardar')!!}</td>
        </tr>
        {!! Form::close() !!}
    </table>
@stop