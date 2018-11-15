@extends('adminlte::default')

@section('content')

<div class="container-fluid">

    @if($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <h3>Convenios</h3>


    <table class="table table-striped table-bordered table-hover" id="Tabela1">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Numero Cracha</th>
                <th>Admissao</th>
                <th>Telefone</th>
                <th></th>
            </tr>
        </thead>
        @foreach ($atendentes as $at)
    <tr>
        <td> {{$at->user->name}}</td>
        <td> {{$at->cracha}}</td>
        <td> {{$at->dtAdmissao}}</td>
        <td> {{$at->user->telefone}}</td>

        <td>
            <a href="{{route('atendentes.edit', ['id'=>$at->id]) }}"
                class="btn-sm btn-success">Editar</a>
            <a href="{{route('atendentes.delete', ['id'=> $at->id]) }}"
                        class="btn-sm btn-danger">Remover</a>

        </td>

    </tr>
    @endforeach
        </tbody>
    </table>
                {!!$atendentes->links()!!}
</div>
@endsection


@section('dyn_scripts')
<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.3.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>

    <script>
    $(document).ready( function () {
        $('#Tabela1').DataTable();});
    </script>
@endsection
