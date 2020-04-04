@extends('../layouts.app')

@section('content')
    <h1>Lista de Productos</h1>
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
    <button type="button" class="btn btn-success" onclick="location.href='{{route('productos.create')}}'">
        <font style="vertical-align: float;">
            <i class="nav-icon fas fa-plus"></i>
            <font style="vertical-align: inherit;">Nuevo Registro</font>
        </font>
    </button>
    <hr>
@if(count($productos)==0)
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
                        <font style="vertical-align: inherit;">Fecha Ingreso</font>
                    </font>
                </th>
                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Motor de renderizado: actívelo para ordenar la columna descendente">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Costo</font>
                    </font>
                </th>
                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Motor de renderizado: actívelo para ordenar la columna descendente">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Stock</font>
                    </font>
                </th>
                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Motor de renderizado: actívelo para ordenar la columna descendente">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Proveedor</font>
                    </font>
                </th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="2">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Operaciones</font>
                    </font>
                </th>
            </tr>
        </thead>
        @foreach($productos as $producto)
        <tbody>
            <tr role="row" class="old">
                <td tabindex="0" class="">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">{{$producto->p_nombre}}</font>
                    </font>
                </td>
                <td tabindex="0" class="">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">{{$producto->fecha_ing}}</font>
                    </font>
                </td>
                <td tabindex="0" class="">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">{{$producto->costo}}</font>
                    </font>
                </td>
                <td tabindex="0" class="">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">{{$producto->stock}}</font>
                    </font>
                </td>
                <td tabindex="0" class="">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">{{$producto->nombre}}</font>
                    </font>
                </td>
                <td tabindex="0" class="">
                    <button type="button" class="btn btn-warning btn-xs" onclick="location.href='{{route('productos.edit', $producto->id)}}'">
                        <font style="vertical-align: inherit;">
                            <i class="nav-icon fas fa-edit"></i>
                            <font style="vertical-align: inherit;">Editar</font>
                        </font>
                    </button>
                </td>
                <td tabindex="0" class="">
                {!! Form::open(['method'=>'DELETE', 'action' => ['ProductoController@destroy', $producto->id]]) !!}
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


