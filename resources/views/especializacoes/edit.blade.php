@extends('adminlte::default')

@section('content')
    <div class="container-fluid">
        <h3>Editar Especialização</h3>

        @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>

            @endforeach
            </ul>

        @endif

        {!!Form::open(['route' =>['especializacoes.update', $especializacao->id],"method"=>'put'])!!}


<div class="form-group">
        {!!Form::label('nome', 'Nome:')!!}
        {!!Form::text('nome', $especializacao->nome,['class'=>'form-control'])!!}
</div>

<div class="form-group">
    {!!Form::label('descricao', 'Descricao:')!!}
    {!!Form::textarea('descricao', $especializacao->descricao,['class'=>'form-control'])!!}
</div>


        <div class="form-group">
           {!!Form::submit('Editar Especialização', ['class'=>'btn btn-primary'])!!}
        </div>

        {!!Form::close()!!}
    </div>
@endsection
