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

        {!!Form::open(['route' =>'medicos.masterDetail'])!!}

    <div class="form-group">
        {!!Form::label('nome', 'Nome:')!!}
        {!!Form::text('nome', null,['class'=>'form-control'])!!}
</div>

<div class="form-group">
    {!!Form::label('crm', 'CRM:')!!}
    {!!Form::text('crm', null,['class'=>'form-control'])!!}
</div>
<div class="form-group">
    {!!Form::label('user_id', 'Usuario:')!!}
    {!!Form::select('user_id',
    \App\User::orderBy('name')->pluck('name','id')->toArray(),null,
    ['class'=>'form-control'])!!}
</div>

<hr/>

    <h4>Especializações</h4>

    <div class="input_fields_wrap"></div>
    <br>

    <button style="float:right;" class="add_field_button btn btn-success">Especialização</button>

    <br>
    <hr/>


        <div class="form-group">
           {!!Form::submit('Adicionar Medico', ['class'=>'btn btn-primary'])!!}
        </div>

        {!!Form::close()!!}
    </div>
@endsection

@section('dyn_scripts')
<script>
    $(document).ready(function(){
        var wrapper = $(".input_fields_wrap");
        var add_button = $(".add_field_button");

        var x = 0;
        $(add_button).click(function(e){
            x++;
            var newField =
           `<div>
                <div style="width:94%; float:left" id="especializacao">
                    {!! Form::select("itens[]",
                    \App\Especializacao::orderBy("nome")->pluck("nome","id")->toArray(),
                    null,
                    ["class"=>"form-control", "required",
                        "placeholder"=>"Selecione uma Especializacao"])
                    !!}
                    </div>
                    <button type="button" Class="remove_field btn btn-danger
                        btn-circle"><i class="fa fa-times">
                        </button>
                        </div>`;

                        $(wrapper).append(newField);

        });

         $(wrapper).on("click",".remove_field", function(e){
             e.preventDefault(); $(this).parent('div').remove(); x--;
         })
    });
</script>
@endsection
