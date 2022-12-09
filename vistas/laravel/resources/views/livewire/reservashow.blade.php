<div class="col-md-8 mx-auto">

    <div class="card card-widget widget-user-2">

        <div class="widget-user-header bg-info">
            <div class="widget-user-image">
                <img class="img-circle elevation-2" src="https://th.bing.com/th/id/R.8718565d9d73c5eb55abd4d9ff2f95b6?rik=4TH7LElNRGPYCw&pid=ImgRaw&r=0" alt="reserva">
            </div>

            <h3 class="widget-user-username">Codigo de reservacion: {{$reserva['CodReserva']}}</h3>
        </div>
        <div class="card-footer p-0">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <span>
                        Fecha: {{$reserva['fecha']}}
                    </span>
                </li>
                <li class="nav-item">
                    <span>
                        Destino: {{$reserva['destino']}}
                    </span>
                </li>
                <li class="nav-item">
                    <span>
                        Distancia: {{$reserva['kilometros']}}
                    </span>
                </li>
                <li class="nav-item">
                    <span>
                        Empleado: {{ $reserva['empleados']['nombre'] }} {{ $reserva['empleados']['apellido'] }}
                    </span>
                </li>
                <li class="nav-item">
                    <span>
                        Vehiculo {{$reserva['vehiculos']['descripcion']}}
                    </span>
                </li>
            </ul>
        </div>
    </div>

</div>
