@extends('adminlte::default')

@section('content')



<div class="container-fluid">
    <h3>Medicos</h3>

    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>Nome</th>
                <th>CRM</th>
                <th>ESPECIALIZAÇÃO</th>
            </tr>
        </thead>

        @foreach ($medicos as $m)
    <tr>
        <td> {{$m->nome}}</td>
        <td> {{$m->crm}}</td>

        <td>
            @foreach($m->especializacoes as $e)
            <li>{{$e->nome}}</li>
            @endforeach
        </td>


    </tr>
    @endforeach
        </tbody>
    </table>
    {!!$medicos->links()!!}
</div>
@endsection

