<div class="col-md-8">
    <div class="form-row">
        <div class="form=group col-md-6">
            {!! Form::label('titulo', 'Título: ') !!}
            {!! Form::text('titulo', null, ['class' => 'form-control', 'placeholder' => 'Escolha um título...', 'required' => 'required']) !!}
        </div>

        <div class="form=group col-md-6">
            {!! Form::label('autor', 'Autor: ') !!}
            {!! Form::text('autor', null, ['class' => 'form-control', 'placeholder' => 'Quem escreveu?', 'required' => 'required']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('conteudo', 'Texto:') !!}
        {!! Form::textarea('conteudo', null, ['size' => '30x5', 'class' => 'form-control', 'required' => 'required', 'placeholder' => 'Escreva o que quiser aqui...',]) !!}
    </div>
</div>
