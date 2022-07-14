<h1>Tabelas</h1>

<style>
    table{
       border-color: blue;
    }

</style>

<table border="1"width=50%>

    <thead>
        <th>Nome</th>
        <th>Idade</th>
        <th>Profissão</th>
        <th>Sexo</th>
    </thead>
 
    @foreach ($clientes as $item)

        <tr>
            <td>{{ $item['Nome'] }} </td>
            <td>{{ $item['Idade'] }} </td>
            <td>{{ $item['Profissão'] }} </td>
            <td>{{ $item['Sexo'] }} </td>
        </tr>
    @endforeach


</table>