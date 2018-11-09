@extends('adminlte::default')

@section('content')
    <div class="container-fluid">
        <h3>Novo Paciente</h3>

        @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>

                @endforeach
            </ul>

        @endif

        {!!Form::open(['route' =>['responsaveis.update', $responsavel->id],"method"=>'put'])!!}


        <div class="form-group">
            {!!Form::label('user_id', 'Usuario:')!!}
            {!!Form::select('user_id',
            \App\Responsavel::orderBy('name')->pluck('name','id')->toArray(),$responsavel->responsavel_id,
            ['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!!Form::submit('Editar Responsavel', ['class'=>'btn btn-primary'])!!}
        </div>

        {!!Form::close()!!}
    </div>
@endsection
