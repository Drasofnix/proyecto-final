<div>
    <!-- /.card-header -->
    <div class="card text-bg-dark" style="height: auto;">
        <div class="card-header">
            <div class="row">
                <div class="col-8">
                    <h4 class="card-title">vehiculo</h4>
                </div>
                <div class="col-4 text-right">
                    <a class="btn btn-success" href="/vehiculos/crear">Nuevo</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="">
                <table class="table table-dark table-striped" id="">
                    <thead>
                        <tr>
                            <th style="width: 10px">CODIGO</th>
                            <th style="width: 20px">DESCRIPCION</th>
                            <th style="width: 30px" class="text-center">ACCIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($vehiculos as $vehiculo)
                            <tr>
                                <td>{{ $vehiculo['CodVehiculo'] }}</td>
                                <td>{{ $vehiculo['descripcion'] }}</td>
                                <td class="text-center">
                                    <a class="btn btn-info btn-sm" href="/vehiculos/{{ $vehiculo['CodVehiculo'] }}/show" title="Mostrar vehiculo"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-primary btn-sm" href="/vehiculos/{{ $vehiculo['CodVehiculo'] }}/edit" title="Modificar vehiculo"><i class="fa fa-edit"></i></a>
                                    <button wire:click="ConfirmarEliminacion('{{$vehiculo["CodVehiculo"]}}')" class="btn btn-danger btn-sm" title="Modificar vehiculo"><i class="fa fa-close"></i></button>
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
