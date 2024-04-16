@extends('../layouts/layout')
@section('content')
<form class="row g-3 p-5" method='post' action="{{route('product.create')}}">
  <div class="col-md-6">
    <label for="inputNome" class="form-label">Nome</label>
    <input type="text" name="nome" class="form-control" id="inputNome">
  </div>
  <div class="col-md-6">
    <label for="inputPreco" class="form-label">Preço</label>
    <input type="text" name="preco"  class="form-control" id="inputPreco">
  </div>
  <div class="col-12">
    <label for="inputDescricao" class="form-label">Descrição</label>
    <textarea name="descricao" class="form-control" id="inputDescricao" cols="30" rows="7"></textarea>
  </div>
  <div class="col-12">
    <label for="inputQuantidade" class="form-label">Quantidade</label>
    <input type="number" name="quantidade" class="form-control" id="inputQuantidade">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Adicionar</button>
  </div>
</form>

@endsection