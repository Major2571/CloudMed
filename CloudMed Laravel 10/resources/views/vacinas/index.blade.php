<x-layout>

    <h1> Minhas Vacinas </h1>
<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Titulo</th>
            <th>Tipo de Dose</th>
            <th>Data</th>
            <th>Fabricante</th>
            <th>Cidade</th>
            <th>UF</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($vacinas as $vacinas)
        <tr>
            <td>{{$vacinas->id}}</td>
            <td>{{$vacinas->titulo}}</td>
            <td>{{$vacinas->tipoDose}}</td>
            <td>{{$vacinas->date}}</td>
            <td>{{$vacinas->fabricante}}</td>
            <td>{{$vacinas->cidade}}</td>
            <td>{{$vacinas->uf}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

</x-layout>