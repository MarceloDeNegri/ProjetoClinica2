@extends('adminlte::default')

@section('content')
    <div class="container-fluid">
        <h3>Novo Usuario</h3>

        @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>

            @endforeach
            </ul>

        @endif

        {!!Form::open(['route' =>['users.update', $user->id],"method"=>'put'])!!}


<div class="form-group">
        {!!Form::label('name', 'Nome:')!!}
        {!!Form::text('name', $user->name,['class'=>'form-control'])!!}
</div>

<div class="form-group">
    {!!Form::label('email', 'email:')!!}
    {!!Form::email('email', $user->email,['class'=>'form-control'])!!}
</div>

<div class="form-group">
    {!!Form::label('password', 'Senha:')!!}
    {!!Form::password('password',['class'=>'form-control'])!!}
</div>

<div class="form-group">
    {!!Form::label('telefone', 'Telefone:')!!}
    {!!Form::text('telefone', $user->telefone,['class'=>'form-control'])!!}
</div>
<div class="form-group">
    {!!Form::label('cpf', 'CPF:')!!}
    {!!Form::text('cpf', $user->cpf,['class'=>'form-control'])!!}
</div>
<div class="form-group">
    {!!Form::label('rg', 'RG:')!!}
    {!!Form::text('rg', $user->rg,['class'=>'form-control'])!!}
</div>
<div class="form-group" >
    {!!Form::label('nivel_acesso', 'Nivel de Acesso:' )!!}
    {!!Form::select('nivel_acesso',
    array (0 =>'Admin' , 1=> 'Atendente',  2=> 'Medico', 3=> 'Paciente'  ),
    $user->nivel_acesso,
    ['class'=>'form-control'])!!}
</div>
<div class="form-group">
    {!!Form::label('dtNascimento', 'Data Nascimento:')!!}
    {!!Form::date('dtNascimento',
    $user->dtNascimentoForms(),
     ['class'=>'form-control'])!!}
</div>
<div class="form-group" >
    {!!Form::label('status', 'Status:' )!!}
    {!!Form::select('status',
    array ('A' =>'Ativo' , 'I'=> 'Inativo' ),
    $user->status,
    ['class'=>'form-control'])!!}
</div>
<!-- Medicos -->
<hr>
<center><h5>Médico</h5></center>
<hr>
<div class="form-group">
    {!!Form::label('crm', 'CRM:')!!}
    {!!Form::text('crm', $user->crm,['class'=>'form-control'])!!}
</div>
<div class="form-group">
    {!!Form::label('especializacao_id', 'Especializacao:')!!}
    {!!Form::select('especializacao_id',
    \App\Especializacao::orderBy('nome')->pluck('nome','id')->toArray(),$user->especializacao_id,
    ['class'=>'form-control','placeholder' => 'Selecione uma opção'])!!}
</div>
<!-- Atendente -->
<hr>
<center><h5>Atendente</h5></center>
<hr>
<div class="form-group">
    {!!Form::label('cracha', 'N° Cracha:')!!}
    {!!Form::text('cracha', $user->cracha,['class'=>'form-control'])!!}
</div>
<!-- Paciente -->
<hr>
<center><h5>Paciente</h5></center>
<hr>
<div class="form-group">
    {!!Form::label('tratamento', 'Algum tipo de tratamento:')!!}
    {!!Form::textarea('tratamento', $user->tratamento,['class'=>'form-control'])!!}
</div>
<div class="form-group"id="alergico"  style="display:none">
    {!!Form::label('alergico', 'Alergia a medicação:')!!}
    {!!Form::text('alergico', $user->alergia,['class'=>'form-control'])!!}
</div>
<div class="form-group">
    {!!Form::label('convulsao', 'Convulsõe/eplepsia:')!!}
    {!!Form::textarea('convulsao', $user->convulsao,['class'=>'form-control'])!!}
</div>
<div class="form-group">
    {!!Form::label('diabete', 'Diabete:')!!}
    {!!Form::text('diabete', $user->diabete,['class'=>'form-control'])!!}
</div>
<div class="form-group">
    {!!Form::label('marcapasso', 'Marcapasso/Contém:')!!}
    {!!Form::textarea('marcapasso', $user->marcapasso,['class'=>'form-control'])!!}
</div>
<div class="form-group">
    {!!Form::label('tipoSanguineo', 'Tipo Sanguineo:')!!}
    {!!Form::select('tipoSanguineo',
    array ('A'=>'A' , 'AB'=>'AB', 'B'=>'B', 'O-'=>'O-', 'O+'=>'O+' ),
    $user->tipoSanguineo,
    ['class'=>'form-control'])!!}
</div>
<div class="form-group">
    {!!Form::label('responsavel_id', 'Responsavel:')!!}
    {!!Form::select('responsavel_id',
    \App\Responsavel::orderBy('nome')->pluck('nome','id')->toArray(),$user->responsavel_id,
    ['class'=>'form-control','placeholder' => 'Selecione uma opção'])!!}
</div>
        <div class="form-group">
           {!!Form::submit('Criar Usuario', ['class'=>'btn btn-primary'])!!}
        </div>

        {!!Form::close()!!}
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>

<script type="text/javascript">
        $('document').ready(function(){
            var option = document.getElementById("nivel_acesso").value;
            //alert('opcao: '+option);
            if(option == 2){
                $('#alergico').show();
            }
        });

function optionCheck(){
    var option = document.getElementById("nivel_acesso").value;
    if(option == 2){
        $('#alergico').show();
    }
    if(option == 0){
        $('#alergico').hide();
    }
}
</script>
@endsection
