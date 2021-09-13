<html>
    <head>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>

    <body>
        <h1>Textos</h1>

        {!! Form::open(['route'=>'textos.salvar',  'method'=>'post', 'onsubmit'=>'ShowLoading()']) !!}

        @include('_textos-form')

        <div class="form-group col-md-8">

            {!! Form::submit('Criar conteúdo', ['class' => 'btn btn-primary form-control']) !!}
        </div>

        {!! Form::close() !!}

        <table class="table table-bordered table-responsive table-striped" width="100%" cellspacing="0">
            @forelse ($textos as $texto )
                <thead>
                    <tr>
                        <th style="width: 15%">Título</th>
                        <th style="width: 15%">Autor</th>
                        <th style="width: 70%">Texto</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>{{ $texto->titulo }}</td>
                        <td>{{ $texto->autor }}</td>
                        <td>{{ $texto->conteudo }}</td>
                    </tr>
                </tbody>
            @empty
            <td colspan="4">Não há conteúdo criado ainda.</td>
            @endforelse
        </table>
    </body>
</html>
