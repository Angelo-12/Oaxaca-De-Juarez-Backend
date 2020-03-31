<template>
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
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nombre</th>
                      <th>Apellido Paterno</th>
                      <th>Apellido Materno</th>
                      <th>Edad</th>
                      <th>Tipo Usuario</th>
                    </tr>
                  </thead>
                  
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>

    <!-- Modal -->
<div class="modal fade" id="agregarEmpleado" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="Agregar Emeplado">Nuevo Empleado</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form @submit.prevent="crearUsuario">
      <div class="modal-body">
        <div class="form-group">
          <label>Nombre</label>
          <input v-model="form.name" type="text" name="name" placeholder="Nombre"
            class="form-control" :class="{ 'is-invalid': form.errors.has('name') }">
          <has-error :form="form" field="name"></has-error>
        </div>

        <div class="form-group">
          <label>Apellido Paterno</label>
          <input v-model="form.apellido_paterno" type="text" name="apellido_paterno" placeholder="Apellido Paterno"
            class="form-control" :class="{ 'is-invalid': form.errors.has('apellido_paterno') }">
          <has-error :form="form" field="apellido_paterno"></has-error>
        </div>

        <div class="form-group">
          <label>Apellido Materno</label>
          <input v-model="form.apellido_materno" type="text" name="apellido_materno" placeholder="Apellido Materno"
            class="form-control" :class="{ 'is-invalid': form.errors.has('apellido_materno') }">
          <has-error :form="form" field="apellido_materno"></has-error>
        </div>

        <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input type="email" v-model="form.email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
        </div>

        <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input v-model="form.password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>

       <div class="form-group">
          <label>Sexo</label>
          <select class="form-control" v-model="form.sexo">
            <option value="" selected disabled>Seleccionar sexo</option>
            <option value="M">Mujer</option>
            <option value="H">Hombre</option>
          </select>
       </div>

       <div class="form-group">
          <label>Fecha de nacimiento</label>
            <div class="input-group date">
                <input v-model="form.fecha_nacimiento" type="date" class="form-control pull-right" id="datepicker">
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
          <select class="form-control" v-model="form.id_municipio">
            <option value="" selected disabled>Seleccionar Municipio</option>
            <option value="1">Oaxaca de juarez</option>
            <option value="2">Santa Cruz Xoxocotlan</option>
          </select>
       </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Guardar</button>
      </div>

      </form>
    </div>
  </div>
</div>

    </div>
</template>

<script>
    export default {
        data(){
          return {
            form: new Form({
              name:'',
              apellido_paterno:'',
              apellido_materno:'',
              fecha_nacimiento:'',
              foto_perfil:'',
              sexo:'',
              email:'',
              password:'',
              id_municipio:''
            })
          }
        },
        methods:{
          crearUsuario(){
            this.form.post('api/crearUsuario');
          }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
