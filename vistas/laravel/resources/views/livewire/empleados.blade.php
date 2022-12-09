<div>
    <!-- /.card-header -->
    <div class="card text-bg-dark" style="height: auto;">
        <div class="card-header">
            <div class="row">
                <div class="col-8">
                    <h4 class="card-title">Empleados</h4>
                </div>
                <div class="col-4 text-right">
                    <a class="btn btn-success" href="/empleados/crear">Nuevo</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="">
                <table class="table table-dark table-striped" id="">
                    <thead>
                        <tr>
                            <th style="width: 10px">CODIGO</th>
                            <th style="width: 20px">NOMBRE</th>
                            <th style="width: 20px">APELLIDO</th>
                            <th style="width: 20px">SALARIO</th>
                            <th style="width: 20px">UBICACION</th>
                            <th style="width: 20px">FECHA</th>
                            <th style="width: 30px" class="text-center">ACCIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($empleados as $empleado)
                            <tr>
                                <td>{{ $empleado['CodEmpleado'] }}</td>
                                <td>{{ $empleado['nombre'] }}</td>
                                <td>{{ $empleado['apellido'] }}</td>
                                <td>{{ $empleado['salario'] }}</td>
                                <td>{{ $empleado['oficinas']['Direccion'] }}</td>
                                <td>{{ $empleado['fecha'] }}</td>
                                <td class="text-center">
                                    <a class="btn btn-info btn-sm" href="/empleados/{{ $empleado['CodEmpleado'] }}/show" title="Mostrar empleado"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-primary btn-sm" href="/empleados/{{ $empleado['CodEmpleado'] }}/edit" title="Modificar empleado"><i class="fa fa-edit"></i></a>
                                    <button wire:click="ConfirmarEliminacion('{{$empleado["CodEmpleado"]}}')" class="btn btn-danger btn-sm" title="Modificar empleado"><i class="fa fa-close"></i></button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- /.card-body -->
</div>
