@extends('adminlte::default')

@section('content')
    <div class="container-fluid">
        <h3>Novo Atendente</h3>

        @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>

                @endforeach
            </ul>

        @endif

        {!!Form::open(['route' =>'atendentes.store'])!!}

        <div class="form-group">
            {!!Form::label('user_id', 'Usuario:')!!}
            {!!Form::select('user_id',
            \App\User::orderBy('name')->pluck('name','id')->toArray(),null,
            ['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!!Form::label('dtAdmissao', 'Data Admissao:')!!}
            {!!Form::text('dtAdmissao', null,['class'=>'form-control'])!!}
    </div>
    <div class="form-group">
        {!!Form::label('cracha', 'Numero do Cracha:')!!}
        {!!Form::text('cracha', null,['class'=>'form-control'])!!}
</div>
        <div class="form-group">
            {!!Form::submit('Criar Atendente', ['class'=>'btn btn-primary'])!!}
        </div>

        {!!Form::close()!!}
    </div>
@endsection
