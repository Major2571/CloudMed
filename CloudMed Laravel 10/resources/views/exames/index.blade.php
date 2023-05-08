<x-layout>

    <h1>Meus Exames </h1>
<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Titulo</th>
            <th>Especialidade</th>
            <th>Data</th>
            <th>Instituicao</th>
            <th>Cidade</th>
            <th>UF</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($exames as $exames)
        <tr>
            <td>{{$exames->id}}</td>
            <td>{{$exames->titulo}}</td>
            <td>{{$exames->especialidade}}</td>
            <td>{{$exames->date}}</td>
            <td>{{$exames->instituicao}}</td>
            <td>{{$exames->cidade}}</td>
            <td>{{$exames->uf}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

</x-layout>