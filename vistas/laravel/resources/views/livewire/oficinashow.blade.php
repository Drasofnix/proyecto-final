<div class="col-md-8 mx-auto">

    <div class="card card-widget widget-user-2">

        <div class="widget-user-header bg-info">
            <div class="widget-user-image">
                <img class="img-circle elevation-2" src="https://th.bing.com/th/id/OIP.w9DKF3YPCuhGD6Eh8mM_1AHaHa?pid=ImgDet&rs=1" alt="Oficina">
            </div>

            <h3 class="widget-user-username">Codigo de la oficina: {{$oficina['CodOficina']}}</h3>
        </div>
        <div class="card-footer p-0">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <span>
                        Direccion: {{$oficina['Direccion']}}
                    </span>
                </li>
                <li class="nav-item">
                    <span>
                        Localidad: {{$oficina['Localidad']}}
                    </span>
                </li>
                <li class="nav-item">
                    <span>
                        Provincia: {{$oficina['Provincia']}}
                    </span>
                </li>
            </ul>
        </div>
    </div>

</div>
