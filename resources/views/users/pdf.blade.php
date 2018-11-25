<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Usuários</title>
    <link rel="stylesheet" type="text/css" href="css/pdfUser.css"

</head>
<body>
    <h1>Usuários</h1>
<table>
<thead>
    <tr>
        <th>Nome</th>
        <th>Telefone</th>
        <th>Email</th>
        <th>CPF</th>
    </tr>
</thead>
<tbody>
        @foreach($users as $user)
        <tr>
            <td>{{ $user->name}}</td>
            <td>{{ $user->telefone }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->cpf }}</td>
        </tr>
        @endforeach
</tbody>
</table>


















</body>
</html>
