@extends('websites.content')

@section('content')
<style>
.suscripcion{
  height: 100%;
margin: 0;
padding: 0;
}
</style>
<div id="suscripcion" class="col-md-12">
            <!-- Widget: user widget style 1 -->
            <div class="card card-widget widget-user">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-info">
                <h3 class="widget-user-username"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Alexander Pierce</font></font></h3>
                <h5 class="widget-user-desc"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Fundador y jefe ejecutivo</font></font></h5>
              </div>
              <div class="widget-user-image">
                <img class="img-circle elevation-2" src="../dist/img/user1-128x128.jpg" alt="Avatar de usuario">
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-4 border-right">
                  <div class="card bg-primary">
              <div class="card-header">
                <h3 class="card-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Primario</font></font></h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                El cuerpo de la tarjeta
              </font></font></div>
              <!-- /.card-body -->
            </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">13,000</font></font></h5>
                      <span class="description-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">SEGUIDORES</font></font></span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4">
                    <div class="description-block">
                      <h5 class="description-header"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">35</font></font></h5>
                      <span class="description-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Productos</font></font></span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
            <!-- /.widget-user -->
          </div>

    <div class="col-md-8">
            
            <!-- /.card -->
          </div>

          <div class="col-md-8">
            <div class="card bg-success">
              <div class="card-header">
                <h3 class="card-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Éxito</font></font></h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                El cuerpo de la tarjeta
              </font></font></div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>

          <div class="col-md-8">
            <div class="card bg-warning">
              <div class="card-header">
                <h3 class="card-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Advertencia</font></font></h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                El cuerpo de la tarjeta
              </font></font></div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>

@endsection