@extends('../layouts/layout')
@section('content')

<form class="row m-2" action="{{route('dashboard')}}">
    <div class="col-12">
      <button type='submit' class="btn btn-primary">Voltar</button>
    </div>
</form>
<h1 class="text-center">Gerenciar Produtos</h1>

<section class="container m-5">
  <div class="container m-5">
    <form method="get" action="{{route('product.list')}}">
      <div class="row center">
        <div class="col">
          <input type="text" name="nome" class="form-control" aria-label="First name">
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
      </tr>
    </thead>
    <tbody>
    @foreach($dadosProduto as $dadoProduto)
      <tr>
        <th scope="row">{{$dadoProduto->id}}</th>
        <td>{{Str::of($dadoProduto->nome)->limit(30)}}</td>
        <td>${{$dadoProduto->preco}}</td>
        <td>{{Str::of($dadoProduto->descricao)->limit(100)}}</td>
        <td>{{$dadoProduto->quantidade}}</td>
        <td>
          <a href="{{route('product.edit', $dadoProduto->id)}}">
            <button type="button" class="btn btn-outline-primary">Editar</button>
          </a>
        </td>
        <td>
          <form method="post" action="{{route('product.destroy', $dadoProduto->id)}}">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-outline-danger">Excluir</button>
          </form>
         </td>
      </tr>
    @endforeach
    </tbody>
  </table>
</section>


@endsection