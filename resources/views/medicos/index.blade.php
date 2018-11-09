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
        <h3>Medicos</h3>


        <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
                <th>Nome</th>
                <th>CRM</th>
                <th>Especialização</th>
                <th></th>
            </tr>

            </thead>
            @foreach ($medicos as $med)
                <tr>
                    <td> {{$med->user->name}}</td>
                    <td> {{$med->crm}}</td>
                    <td> {{$med->especializacao->nome}}</td>




                    <td>
                        <a href="{{route('medicos.edit', ['id'=>$med->id]) }}"
                           class="btn-sm btn-success">Editar</a>
                        <a href="{{route('medicos.destroy', ['id'=> $med->id]) }}"
                           class="btn-sm btn-danger">Remover</a>

                    </td>

                </tr>
                @endforeach
                </tbody>
        </table>
        {!!$medicos->links()!!}
    </div>
@endsection

