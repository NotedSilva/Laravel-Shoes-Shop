@extends('../layouts/layout')
@section('content')
<form class="row m-2" action="{{route('dashboard')}}">
    <div class="col-12">
      <button type='submit' class="btn btn-primary">Voltar</button>
    </div>
</form>
<form class="row g-3 p-5" method='post' action="{{route('product.create')}}" enctype="multipart/form-data">
@csrf
  <div class="col-md-6">
    <label for="inputNome" class="form-label">Nome</label>
    <input type="text" name="nome" class="form-control" id="inputNome" required>
  </div>
  <div class="col-md-6">
    <label for="inputPreco" class="form-label">Preço</label>
    <input type="number" step="0.01" name="preco"  class="form-control" id="inputPreco" required>
  </div>
  <div class="col-12">
    <label for="inputDescricao" class="form-label">Descrição</label>
    <textarea name="descricao" class="form-control" id="inputDescricao" cols="30" rows="7" required></textarea>
  </div>
  <div class="col-12">
    <label for="inputQuantidade" class="form-label">Quantidade</label>
    <input type="number" name="quantidade" class="form-control" id="inputQuantidade" required>
  </div>
  <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
  <div class="custom-file">
    <input type="file" class="custom-file-input" name="img" id="input_img_itens">
    <label class="custom-file-label" for="input_img_itens">Escolha o arquivo</label>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-success">Adicionar</button>
  </div>
</form>


@endsection