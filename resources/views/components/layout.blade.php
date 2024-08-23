<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{--Chamada do FontAwesome--}}
    <script src="https://kit.fontawesome.com/1f62ce0ae5.js" crossorigin="anonymous"></script>

    {{--Consulta do css pro layout e consulta customisada pra cada pagina --}}
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    <link rel="stylesheet" href="{{ asset('css/'. Request::segment(1) .'.css') }}">

    {{-- Erro no Vite, chamando o "boots" pelo header mesmo... --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Unetvale</title>
</head>
<body>
    <nav>
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 header">
            <div class="row">
                <div class="col-6 col-sm-8 col-md-8 col-lg-8">
                    <h1>Unetvale</h1>
                </div>
                <div class="col-6 col-sm-4 col-md-4 col-lg-4 text-right">
                    <a href="https://www.unetvale.com.br/" target="_blank"><i class="fa-solid fa-globe icon"></i></a>
                    <a href="https://www.instagram.com/unetvale/" target="_blank"><i class="fa-brands fa-instagram icon"></i></a>
                    <a href="https://www.linkedin.com/company/unetvale/" target="_blank"><i class="fa-brands fa-linkedin icon"></i></a>
                </div>
            </div>
        </div>
    </nav>
    <main>
        <div class="container-fluid">
            {{--Yield guarda o conteudo do "Body" da aplicação, mantendo o padrão--}}
            @yield('content')
        </div>
    </main>
    <footer>
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center footer">
            <h5>Feito por: <a class="custom-link" target="_blank" href="https://github.com/Jo4ovieira">Jo4ovieira</a></h5>
        </div>
    </footer>
</body>
</html>
