@extends('../layouts.app')

@section('content')
    <h1>Lista de Usuarios</h1>
    <!-- Búsquedas -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Buscar" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
    <br>
    <button type="button" class="btn btn-success" onclick="location.href='{{route('users.create')}}'">
        <font style="vertical-align: float;">
            <i class="nav-icon fas fa-plus"></i>
            <font style="vertical-align: inherit;">Nuevo Usuario</font>
        </font>
    </button>
    <hr>
@if(count($users)==0)
    <h3 class="text-warning">No se encontraron resultados.</h3>
@else
    <div width="70%">
    <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" 
    role="grid" aria-describedby="example1_info" >
        <thead>
            <tr role="row">
                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Motor de renderizado: actívelo para ordenar la columna descendente">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Correo</font>
                    </font>
                </th>
                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Motor de renderizado: actívelo para ordenar la columna descendente">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Usuario</font>
                    </font>
                </th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="2">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Operaciones</font>
                    </font>
                </th>
            </tr>
        </thead>
        @foreach($users as $user)
        <tbody>
            <tr role="row" class="old">
                <td tabindex="0" class="">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">{{$user->email}}</font>
                    </font>
                </td>
                <td tabindex="0" class="">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">{{$user->name}}</font>
                    </font>
                </td>
                <td tabindex="0" class="">
                    <button type="button" class="btn btn-primary btn-sm" onclick="location.href='{{route('users.edit', $user->id)}}'">
                        <font style="vertical-align: inherit;">
                            <i class="fas fa-pencil-alt"></i>
                        </font>
                    </button>
                </td>
                <td tabindex="0" class="">
                {!! Form::open(['method'=>'DELETE', 'action' => ['UserController@destroy', $user->id]]) !!}
                    <button type="submit" class="btn btn-danger btn-sm">
                        <font style="vertical-align: inherit;">
                            <i class="fas fa-pencil-alt"></i>
                        </font>
                    </button>
                {!!Form::close()!!}
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
    </div>
@endif
@stop


