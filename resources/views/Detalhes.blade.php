<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Shop Item - Start Bootstrap Template</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{Auth::user()->funcao == 'admin' ? '../../css/detalhes.css' : '../css/detalhes.css'}}" rel="stylesheet" />
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#!">Laravel Shoes</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            </div>
        </div>
    </nav>
    <!-- Product section-->
    <section class="py-5">
        <form class="row m-2" action="{{Auth::user()->funcao == 'admin' ? route('admin.dashboard') : route('dashboard')}}">
            <div class="col-12">
                <button type='submit' class="btn btn-primary">Voltar</button>
            </div>
        </form>
        <div class="container px-4 px-lg-5 my-5">

            <div class="row gx-4 gx-lg-5 align-items-center">
                @foreach($dadosProduto as $dadoProduto)

                <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="{{ Auth::user()->funcao == 'admin' ? '../../storage/imagens/'.$dadoProduto->img : '../storage/imagens/'.$dadoProduto->img }}"  alt="..." /></div>
                <div class="col-md-6">
                    <h1 class="display-5 fw-bolder">{{Str::of($dadoProduto->nome)->limit(12)}}</h1>
                    <div class="fs-5 mb-2">
                        <span>${{$dadoProduto->preco}}</span>
                    </div>
                    <p class="lead">{{$dadoProduto->descricao}}</p>
                    <p class="text-muted"><span>{{$dadoProduto->quantidade}}</span> Restantes</p>
                    
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{Auth::user()->funcao == 'admin' ? '../../js/detalhes.js' : '../js/detalhes.js'}}"></script>
</body>

</html>