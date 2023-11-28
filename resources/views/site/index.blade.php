<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('site') }}/css/style.css">
    <title>Colligowl</title>
</head>

<body>
    <header id="cabecalho">
        <div class="Logo">
            <a href="#"><img id="coruja" src="{{ asset('site') }}/imagem/Logo-Adapti-Ps.png" alt="Logo do Colligowl"></a>
            <h1>COLLIGOWL</h1>
        </div>
        <nav>
            <div class="dark">
                <button id="btn-dark"></button>
            </div>
            <a href="./dashboard"><h2>Admin</h2></a>
        </nav>
    </header>
    
    <main id="principal">
        <div class="container-cards">
            @foreach ($alunos as $aluno)
            <div class="card">
                <img src="{{ url($aluno->imagem) }}" alt="imagem do aluno">
                    <div class="titulo-card">{{ $aluno->nome }}</div>
                    @foreach ($cursos as $curso)
                        @if ($aluno->curso_id == $curso->id)
                            <tr>
                                <div class="titulo-card">{{ $curso->curso }}</div>
                            </tr>
                        @endif
                    @endforeach
                    @if ($aluno->formado == "1")
                        <div class="titulo-card">Formado</div>
                    @else
                        <div class="titulo-card">Não Formado</div>
                    @endif
                        <div class="titulo-card">{{ $aluno->descricao }}</div>
                        @if ($aluno->contratado)
                            <button class="contratado" name="contratar" type="submit">
                            <p>CONTRATADO</p>
                            </button>
                        @else
                            <form action="{{ route('aluno.contratar', $aluno) }}" method="post">
                            @csrf
                            <button class="contratar" name="contratar" type="submit">
                            <p>CONTRATAR</p>
                            </button>
                            </form>
                        @endif
                </div>
            @endforeach
        </div>

        <footer>
            <p>© 2023, Feito com 💜 por <strong>Kaio Ribeiro Martins Barbosa.</strong> </p>
        </footer>
    </main>

        <script src="{{ asset('site') }}/js/script.js"></script>
</body>
</html>

