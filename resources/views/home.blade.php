@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <div class="card-header"><h2>Bienvenido al Sistema Domestik</h2></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p class="d-block"><strong>Usted está en línea</strong></p>
                </div>
        </div>
    </div>
</div>
@endsection
