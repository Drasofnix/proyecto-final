<div class="col-md-8 mx-auto">

    <div class="card card-widget widget-user-2">

        <div class="widget-user-header bg-info">
            <div class="widget-user-image">
                <img class="img-circle elevation-2" src="https://th.bing.com/th/id/R.8718565d9d73c5eb55abd4d9ff2f95b6?rik=4TH7LElNRGPYCw&pid=ImgRaw&r=0" alt="empleado">
            </div>

            <h3 class="widget-user-username">Codigo de empleado: {{$empleado['CodEmpleado']}}</h3>
        </div>
        <div class="card-footer p-0">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <span>
                        Nombre: {{$empleado['nombre']}}
                    </span>
                </li>
                <li class="nav-item">
                    <span>
                        Apellidos: {{$empleado['apellido']}}
                    </span>
                </li>
                <li class="nav-item">
                    <span>
                        Salario: {{$empleado['salario']}}
                    </span>
                </li>
                <li class="nav-item">
                    <span>
                        Ubicacion: {{ $empleado['oficinas']['Direccion'] }}
                    </span>
                </li>
                <li class="nav-item">
                    <span>
                        Fecha de contratacion: {{$empleado['fecha']}}
                    </span>
                </li>
            </ul>
        </div>
    </div>

</div>
