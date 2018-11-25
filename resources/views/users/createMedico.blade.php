@extends('adminlte::default')

@section('content')
    <div class="container-fluid">
        <h3>Novo Médico</h3>

        @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>

            @endforeach
            </ul>

        @endif

        {!!Form::open(['route' =>'users.store'])!!}


<div class="form-group">
        {!!Form::label('name', 'Nome:')!!}
        {!!Form::text('name', null,['class'=>'form-control','placeholder'=>'Digite seu nome'])!!}
</div>

<div class="form-group">
    {!!Form::label('email', 'email:')!!}
    {!!Form::email('email', null,['class'=>'form-control','placeholder'=>'Digite um email válido Ex: teste@teste.com'])!!}
</div>

<div class="form-group">
    {!!Form::label('password', 'Senha:')!!}
    {!!Form::password('password',['class'=>'form-control','placeholder'=>'Digite a senha'])!!}
</div>
<div class="form-group">
    {!!Form::label('password_confirmation', 'Digite a Senha Novamente:')!!}
    {!!Form::password('password_confirmation',['class'=>'form-control','placeholder'=>'Repita a senha'])!!}
</div>

<div class="form-group">
    {!!Form::label('telefone', 'Telefone:')!!}
    {!!Form::text('telefone', null,['class'=>'form-control', 'placeholder'=>"(00) 0000-0000"])!!}
</div>
<div class="form-group">
    {!!Form::label('cpf', 'CPF:')!!}
    {!!Form::text('cpf', null,['class'=>'form-control', 'placeholder'=>'Ex.: 000.000.000-00'])!!}
</div>
<div class="form-group">
    {!!Form::label('rg', 'RG:')!!}
    {!!Form::text('rg', null,['class'=>'form-control', 'placeholder'=>'00.000.000-0'])!!}
</div>
<div class="form-group" >
    {!!Form::label('nivel_acesso', 'Nivel de Acesso:' )!!}
    {!!Form::select('nivel_acesso',
    array (0 =>'Admin' , 1=> 'Atendente',  2=> 'Medico', 3=> 'Paciente'  ),
    3,
    ['class'=>'form-control'])!!}
</div>
<div class="form-group">
    {!!Form::label('dtNascimento', 'Data Nascimento:')!!}
    {!!Form::date('dtNascimento',
    '2017-05-18 00:00:00',
     ['class'=>'form-control'])!!}
</div>
<div class="form-group" >
    {!!Form::label('status', 'Status:' )!!}
    {!!Form::select('status',
    array ('A' =>'Ativo' , 'I'=> 'Inativo' ),
    'Ativo',
    ['class'=>'form-control'])!!}
</div>
<!-- Medicos -->
<hr>
<center><h5>Médico</h5></center>
<hr>
<div class="form-group">
    {!!Form::label('crm', 'CRM:')!!}
    {!!Form::text('crm', null,['class'=>'form-control', 'placeholder'=>'digite o crm medico'])!!}
</div>
<div class="form-group">
    {!!Form::label('especializacao_id', 'Especializacao:')!!}
    {!!Form::select('especializacao_id',
    \App\Especializacao::orderBy('nome')->pluck('nome','id')->toArray(),null,
    ['class'=>'form-control','placeholder' => 'Selecione uma opção'])!!}
</div>

        <div class="form-group">
           {!!Form::submit('Criar Usuario', ['class'=>'btn btn-primary'])!!}
        </div>

        {!!Form::close()!!}
    </div>


@endsection
