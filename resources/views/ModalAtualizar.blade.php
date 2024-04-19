@extends('../layouts/layout')
@section('content')
<form class="row m-2" action="{{route('dashboard')}}">
    <div class="col-12">
      <button type='submit' class="btn btn-primary">Voltar</button>
    </div>
</form>
<form class="row g-3 p-5" method='post' action="{{route('product.update', $dadosProduto->id)}}">
@method('put')
@csrf
  <div class="col-md-6">
    <label for="inputNome" class="form-label">Nome</label>
    <input type="text" name="nome" class="form-control" id="inputNome" value="{{old('nome', $dadosProduto->nome)}}" required>
  </div>
  <div class="col-md-6">
    <label for="inputPreco" class="form-label">Preço</label>
    <input type="number" name="preco"  class="form-control" id="inputPreco" value="{{old('nome', $dadosProduto->preco)}}" required>
  </div>
  <div class="col-12">
    <label for="inputDescricao" class="form-label">Descrição</label>
    <textarea name="descricao" class="form-control" id="inputDescricao" cols="30" rows="7" value="{{old('nome', $dadosProduto->descricao)}}" required>{{$dadosProduto->descricao}}</textarea>
  </div>
  <div class="col-12">  
    <label for="inputQuantidade" class="form-label">Quantidade</label>
    <input type="number" name="quantidade" class="form-control" id="inputQuantidade" value="{{old('nome', $dadosProduto->quantidade)}}" required>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-success">Atualizar</button>
  </div>
</form>


@endsection