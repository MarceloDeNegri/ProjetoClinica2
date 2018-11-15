@extends('adminlte::default')

@section('content')

<div class="row">
    <div class="col-lg-12">

@if(Session('mensagem'))
<div class="alert alert-info">
    {{Session('mensagem')}}
</div>
@endif
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>IMG</th>
                    <th>Descrição</th>
                    <th>Dt. Criação</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
        @foreach($arquivos as $a)
        <tr>
            <td><img src=$a->url></img></td>
            <td>{{$a->descricao}}</td>
            <td>{{$a->created_at->format('d/m/Y')}}</td>
            <td>
            {{csrf_field()}}
            <a href="{{route('arquivos.destroy', ['id'=> $a->id]) }}"
                    class="btn-sm btn-danger">Remover</a>
            </form>
            </td>
        </tr>
        @endforeach
        </tbody>
        </table>
    </div>
</div>

@endsection
