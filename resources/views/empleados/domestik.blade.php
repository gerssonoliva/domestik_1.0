@extends('../layouts.app')

@section('content')
    <h1>Lista de Domestikas</h1>
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
    <button type="button" class="btn btn-success" onclick="location.href='{{route('empleados.create')}}'">
        <font style="vertical-align: float;">
            <i class="nav-icon fas fa-plus"></i>
            <font style="vertical-align: inherit;">Nuevo Empleado</font>
        </font>
    </button>
    <hr>
@if(count($empleados)==0)
    <h3 class="text-warning">No se encontraron resultados.</h3>
@else
    <div width="70%">
    <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" 
    role="grid" aria-describedby="example1_info" >
        <thead>
            <tr role="row">
                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Motor de renderizado: actívelo para ordenar la columna descendente">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Nombre</font>
                    </font>
                </th>
                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Motor de renderizado: actívelo para ordenar la columna descendente">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Apellido</font>
                    </font>
                </th>
                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Motor de renderizado: actívelo para ordenar la columna descendente">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Dirección</font>
                    </font>
                </th>
                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Motor de renderizado: actívelo para ordenar la columna descendente">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Teléfono</font>
                    </font>
                </th>
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
                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Motor de renderizado: actívelo para ordenar la columna descendente">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Contraseña</font>
                    </font>
                </th>
                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Motor de renderizado: actívelo para ordenar la columna descendente">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Estado</font>
                    </font>
                </th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="2">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Operaciones</font>
                    </font>
                </th>
            </tr>
        </thead>
        @foreach($empleados as $empleado)
        <tbody>
            <tr role="row" class="old">
                <td tabindex="0" class="">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">{{$empleado->e_nombre}}</font>
                    </font>
                </td>
                <td tabindex="0" class="">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">{{$empleado->apellido}}</font>
                    </font>
                </td>
                <td tabindex="0" class="">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">{{$empleado->direccion}}</font>
                    </font>
                </td>
                <td tabindex="0" class="">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">{{$empleado->telefono}}</font>
                    </font>
                </td>
                <td tabindex="0" class="">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">{{$empleado->correo}}</font>
                    </font>
                </td>
                <td tabindex="0" class="">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">{{$empleado->usuario}}</font>
                    </font>
                </td>
                <td tabindex="0" class="">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">{{$empleado->contra}}</font>
                    </font>
                </td>
                <td tabindex="0" class="">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">{{$empleado->estado}}</font>
                    </font>
                </td>
                <td tabindex="0" class="">
                    <button type="button" class="btn btn-warning btn-xs" onclick="location.href='{{route('empleados.edit', $empleado->id)}}'">
                        <font style="vertical-align: inherit;">
                            <i class="nav-icon fas fa-edit"></i>
                            <font style="vertical-align: inherit;">Editar</font>
                        </font>
                    </button>
                </td>
                <td tabindex="0" class="">
                {!! Form::open(['method'=>'DELETE', 'action' => ['EmpleadoController@destroy', $empleado->id]]) !!}
                    <button type="submit" class="btn btn-danger btn-xs">
                        <font style="vertical-align: inherit;">
                            <i class="nav-icon fas fa-x"></i>
                            <font style="vertical-align: inherit;">Eliminar</font>
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


