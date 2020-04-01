@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row mt-5">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Usuarios</h3>

            <div class="card-tools">
              <button class="btn btn-success" data-toggle="modal" data-target="#agregarEmpleado">Agregar <i class="fas fa-user-plus"></i></button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive ">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nombre(s)</th>
                  <th>Apellido Paterno</th>
                  <th>Apellido Materno</th>
                  <th>Sexo</th>
                  <th>Tipo Usuario</th>
                  <th>Opciones</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($usuarios as $u)
                      <tr id="{{$u->id}}">
                        <td>{{$u->id}}</td>
                        <td>{{$u->name}}</td>
                        <td>{{$u->apellido_paterno}}</td>
                        <td>{{$u->apellido_materno}}</td>
                        <td>{{$u->sexo}}</td>
                        <td>{{$u->sexo}}</td>
                        <td>
                            <a href=""  class="show-modal" data-id="{{$u->id}}" data-title="{{$u->name}}">
                                <i class="fa fa-eye" title="Mostrar"></i>
                            </a>
                            <a href=""  class="edit-modal" data-id="{{$u->id}}">
                                <i class="fa fa-pencil-alt" title="Editar"></i>
                            </a>
                            <a href=""  class="delete-modal" data-id="{{$u->id}}">
                                <i class="fa fa-eraser" title="Eliminar"></i>
                            </a>
                        </a></td>
                    </tr>
                  @endforeach
              </tbody>
              
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>

    <div class="modal fade" id="agregarEmpleado" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Agregar Empleado</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            
                <div class="modal-body">
                    <form action="" class="form-horizontal" role="form">
                         <div class="form-group">
                            <label>Nombre</label>
                            <input  type="text" name="name" placeholder="Nombre"
                            class="form-control">
                         </div>

                         <div class="form-group">
                            <label>Apellido Paterno</label>
                            <input type="text" name="apellido_paterno" placeholder="Apellido Paterno"
                              class="form-control" >
                            
                          </div>
                  
                          <div class="form-group">
                            <label>Apellido Materno</label>
                            <input  type="text" name="apellido_materno" placeholder="Apellido Materno"
                              class="form-control" >
                            
                          </div>
                  
                          <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Email">
                          </div>
                  
                          <div class="form-group">
                                <label for="password">Password</label>
                                <input  type="password" class="form-control" id="password" placeholder="Password">
                          </div>
                  
                         <div class="form-group">
                            <label>Sexo</label>
                            <select class="form-control" >
                              <option value="" selected disabled>Seleccionar sexo</option>
                              <option value="M">Mujer</option>
                              <option value="H">Hombre</option>
                            </select>
                         </div>
                  
                         <div class="form-group">
                            <label>Fecha de nacimiento</label>
                              <div class="input-group date">
                                  <input type="date" class="form-control pull-right" id="datepicker">
                              </div>
                         </div>
                  
                         <div class="form-group">
                            <label>Estado</label>
                            <select class="form-control">
                              <option value="" selected disabled>Seleccionar Estado</option>
                              <option value="Oaxaca">Oaxaca</option>
                              <option value="Mexico">Mexico</option>
                            </select>
                         </div>
                  
                         <div class="form-group">
                            <label>Municipio</label>
                            <select class="form-control">
                              <option value="" selected disabled>Seleccionar Municipio</option>
                              <option value="1">Oaxaca de juarez</option>
                              <option value="2">Santa Cruz Xoxocotlan</option>
                            </select>
                         </div>
                    </form>
                </div>
            
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">
                  Cerrar
                  <i class="fa fa-times-circle"></i>
              </button>
              <button type="button" id="agregar" class="btn btn-primary">
                  Guardar
                  <i class="fa fa-save"></i>
              </button>
            </div>
          </div>
        </div>
      </div>

      <script type="text/javascript">
        $(document).on('click','create-modal',function(){
          $('#agregarEmpleado').modal('show');
          $('.form-horizontal').show();
          $('.modal-title').text('Add Post');
        }); 
      </script>

@endsection