<div>
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">USUARIOS</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th style="width: 10px">ID</th>
                <th style="width: 20px">Nombre</th>
                <th style="width: 30px">Email</th>
                <th style="width: 40px">Acciones</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($usuarios as $usuario)
              <tr>
                <td>{{$usuario["id"]}}</td>
                <td>{{$usuario["name"]}}</td>
                <td>{{$usuario["email"]}}</td>
                <td><span class="badge bg-danger">acciones</span></td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
          <ul class="pagination pagination-sm m-0 float-right">
            <li class="page-item"><a class="page-link" href="#">«</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">»</a></li>
          </ul>
        </div>
      </div>
</div>
