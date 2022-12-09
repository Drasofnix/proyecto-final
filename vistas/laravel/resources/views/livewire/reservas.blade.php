<div>
    <!-- /.card-header -->
    <div class="card text-bg-dark" style="height: auto;">
        <div class="card-header">
            <div class="row">
                <div class="col-8">
                    <h4 class="card-title">RESERVACIONES</h4>
                </div>
                <div class="col-4 text-right">
                    <a class="btn btn-success" href="/reservas/crear">Nueva</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="">
                <table class="table table-dark table-striped" id="">
                    <thead>
                        <tr>
                            <th style="width: 10px">CODIGO</th>
                            <th style="width: 20px">FECHA</th>
                            <th style="width: 20px">DESTINO</th>
                            <th style="width: 20px">DISTANCIA</th>
                            <th style="width: 20px">EMPLEADO</th>
                            <th style="width: 20px">VEHICULO</th>
                            <th style="width: 30px" class="text-center">ACCIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reservas as $reserva)
                            <tr>
                                <td>{{$reserva['CodReserva']}}</td>
                                <td>{{$reserva['fecha']}}</td>
                                <td>{{$reserva['destino']}}</td>
                                <td>{{$reserva['kilometros']}}</td>
                                <td>{{$reserva['empleados']['nombre']}} {{$reserva['empleados']['apellido']}}</td>
                                <td>{{$reserva['vehiculos']['descripcion']}}</td>
                                <td class="text-center">
                                    <a class="btn btn-info btn-sm" href="/reservas/{{$reserva['CodReserva']}}/show" title="Mostrar reserva"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-primary btn-sm" href="/reservas/{{$reserva['CodReserva']}}/edit" title="Modificar reserva"><i class="fa fa-edit"></i></a>
                                    <button wire:click="ConfirmarEliminacion('{{$reserva["CodReserva"]}}')" class="btn btn-danger btn-sm" title="Modificar reserva"><i class="fa fa-close"></i></button>
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
