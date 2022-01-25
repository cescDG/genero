<table>
    <thead>
    <tr>
        <th>Servidor Público</th>
        <th>Adscripción</th>
        <th>Dirección</th>
        <th>Departamento</th>
    </tr>
    </thead>
    @foreach ($usuarios as $us)
        <tbody>
        <tr>
            <td>{{$us->Nombre}}</td>
            <td>{{$us->dependencia->Nombre}}</td>
            <td>{{$us->direccion->Nombre}}</td>
            <td>{{$us->departamento->Nombre}}</td>
        </tr>
        </tbody>
    @endforeach
</table>


