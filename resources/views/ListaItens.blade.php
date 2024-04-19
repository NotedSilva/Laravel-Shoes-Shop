@extends('../layouts/layout')
@section('content')
<h1 class="text-center">Gerenciar Produtos</h1>

<section class="container m-5">
  <div class="container m-5">
    <form method="get" action="">
      <div class="row center">
        <div class="col">
          <input type="text" id="nome" name="nome" class="form-control" aria-label="First name">
        </div>
        <div class="col">
          <button type="submit" class="btn btn-info">Buscar</button>
        </div>
      </div>
    </form>
  </div>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Código</th>
        <th scope="col">Nome</th>
        <th scope="col">Preço</th>
        <th scope="col">Descrição</th>
        <th scope="col">Quantidade</th>
        <th scope="col">Editar</th>
        <th scope="col">Exluir</th>
      </tr>
    </thead>
    <tbody>
    @foreach($dadosProduto as $dadoProduto)
      <tr>
        <th scope="row">{{$dadoProduto->id}}</th>
        <td>{{$dadoProduto->nome}}</td>
        <td>${{$dadoProduto->preco}}</td>
        <td>{{$dadoProduto->descricao}}</td>
        <td>{{$dadoProduto->quantidade}}</td>
        <td>
          <a href="">
            <button type="button" class="btn btn-primary">X</button>
          </a>
        </td>
        <td>
          <form method="post" action="">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-danger">X</button>
          </form>
         </td>
      </tr>
    @endforeach
    </tbody>
  </table>
</section>


@endsection