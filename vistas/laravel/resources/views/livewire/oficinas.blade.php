<div>
    <!-- /.card-header -->
    <div class="card text-bg-dark" style="height: auto;">
        <div class="card-header">
            <div class="row">
                <div class="col-8">
                    <h4 class="card-title">OFICINAS</h4>
                </div>
                <div class="col-4 text-right">
                    <a class="btn btn-success" href="/oficinas/crear">Nueva</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="">
                <table class="table table-dark table-striped" id="">
                    <thead>
                        <tr>
                            <th style="width: 10px">CODIGO</th>
                            <th style="width: 20px">DIRECCION</th>
                            <th style="width: 20px">LOCALIDAD</th>
                            <th style="width: 20px">PROVINCIA</th>
                            <th style="width: 30px" class="text-center">ACCIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($oficinas as $oficina)
                            <tr>
                                <td>{{ $oficina['CodOficina'] }}</td>
                                <td>{{ $oficina['Direccion'] }}</td>
                                <td>{{ $oficina['Localidad'] }}</td>
                                <td>{{ $oficina['Provincia'] }}</td>
                                <td class="text-center">
                                    <a class="btn btn-info btn-sm" href="/oficinas/{{ $oficina['CodOficina'] }}/show" title="Mostrar oficina"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-primary btn-sm" href="/oficinas/{{ $oficina['CodOficina'] }}/edit" title="Modificar oficina"><i class="fa fa-edit"></i></a>
                                    <button wire:click="ConfirmarEliminacion('{{$oficina["CodOficina"]}}')" class="btn btn-danger btn-sm" title="Modificar oficina"><i class="fa fa-close"></i></button>
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
