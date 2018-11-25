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
<!-- Paciente -->
<hr>
<center><h5>Paciente</h5></center>
<hr>
<div class="form-group">
    {!!Form::label('tratamento', 'Algum tipo de tratamento:')!!}
    {!!Form::textarea('tratamento', null,['class'=>'form-control', 'placeholder'=>'Possui algum tratamento em andamento'])!!}
</div>
<div class="form-group"id="alergico"  style="display:none">
    {!!Form::label('alergico', 'Alergia a medicação:')!!}
    {!!Form::text('alergico', null,['class'=>'form-control', 'placeholder'=>'Alguma alergia a medicação'])!!}
</div>
<div class="form-group">
    {!!Form::label('convulsao', 'Convulsõe/eplepsia:')!!}
    {!!Form::textarea('convulsao', null,['class'=>'form-control', 'placeholder'=>'Qual tipo de convulsão'])!!}
</div>
<div class="form-group">
    {!!Form::label('diabete', 'Diabete:')!!}
    {!!Form::text('diabete', null,['class'=>'form-control', 'placeholder'=>'Qual o tipo de diabetes'])!!}
</div>
<div class="form-group">
    {!!Form::label('marcapasso', 'Marcapasso/Contém:')!!}
    {!!Form::textarea('marcapasso', null,['class'=>'form-control', 'placeholder'=>'Possui algum marcapasso'])!!}
</div>
<div class="form-group">
    {!!Form::label('tipoSanguineo', 'Tipo Sanguineo:')!!}
    {!!Form::select('tipoSanguineo',
    array ('A'=>'A' , 'AB'=>'AB', 'B'=>'B', 'O-'=>'O-', 'O+'=>'O+' ),
    'A',
    ['class'=>'form-control'])!!}
</div>
<div class="form-group">
    {!!Form::label('responsavel_id', 'Responsavel:')!!}
    {!!Form::select('responsavel_id',
    \App\Responsavel::orderBy('nome')->pluck('nome','id')->toArray(),null,
    ['class'=>'form-control','placeholder' => 'Selecione uma opção'])!!}
</div>
        <div class="form-group">
           {!!Form::submit('Criar Usuario', ['class'=>'btn btn-primary'])!!}
        </div>

        {!!Form::close()!!}
    </div>


@endsection
