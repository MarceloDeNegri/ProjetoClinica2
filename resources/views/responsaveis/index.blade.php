@extends('adminlte::default')


@section('styles')
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
@endsection

@section('content')


    <div class="container-fluid">

        @if($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <h3>Responsaveis</h3>


        <table class="table table-striped table-bordered table-hover" id="responsaveis">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Nascimento</th>
                <th>CPF</th>
                <th>Telefone</th>
                <th></th>
            </tr>
            </thead>
            @foreach ($responsaveis as $resp)
                <tr>
                    <td> {{$resp->user->name}}</td>
                    <td> {{$resp->user->email}}</td>
                    <td> {{$resp->user->cpf}}</td>
                    <td> {{$resp->user->telefone}}</td>

                        @if (Auth::user()->nivel_acesso == 1 || Auth::user()->nivel_acesso == 2 )
                    <td>
                        <a href="{{route('responsaveis.edit', ['id'=>$resp->id]) }}"
                           class="btn-sm btn-success">Editar</a>


                    </td>

                    @elseif(Auth::user()->nivel_acesso == 0)
                    <td>
                            <a href="{{route('responsaveis.edit', ['id'=>$resp->id]) }}"
                               class="btn-sm btn-success">Editar</a>
                               <a href="{{route('responsaveis.delete', ['id'=> $resp->id]) }}"
                                    class="btn-sm btn-danger">Remover</a>

                        </td>
                    @endif

                </tr>

                @endforeach

                </tbody>
        </table>

    </div>
@endsection

@section('dyn_scripts')
                <script  src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
                <script>
                    $(document).ready( function () {
                        $('#responsaveis').DataTable();
                    } );
                </script>
            @endsection



