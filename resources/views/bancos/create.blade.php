@extends('../layouts.app')

@section('content')
    <h1>Registrar Banco</h1>
    <!--<form action="/domestik_1.0/public/admin" method="post">-->
    <table>
        {!! Form::open(['url' => '/bancos', 'method'=>'post']) !!}
        <tr>
            <td>{!!Form::label('nombre', 'Nombre de Banco:')!!}</td>
            <td>{!!Form::text('nombre');!!}</td>
        </tr>
        {{csrf_field()}}
        <tr>
            <td></td>
            <td>
                @if(count($errors) > 0)
                    @foreach($errors->all() as $error)
                        {{$error}}
                    @endforeach
                @endif
            </td>
        </tr>
        <br>
        <tr>
            <td colspan="2" align="center">{!!Form::submit('Guardar')!!}</td>
        </tr>
        {!! Form::close() !!}
    </table>
    <!--</form>-->
@stop