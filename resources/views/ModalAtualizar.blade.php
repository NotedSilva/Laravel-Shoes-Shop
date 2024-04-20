@extends('../layouts/layout')
@section('content')
<form class="row m-2" action="{{route('dashboard')}}">
    <div class="col-12">
      <button type='submit' class="btn btn-primary">Voltar</button>
    </div>
</form>
<form class="row g-3 p-5" method='post' action="{{route('product.update', $dadosProduto->id)}}" enctype="multipart/form-data">
@method('put')
@csrf
  <div class="col-md-6">
    <label for="inputNome" class="form-label">Nome</label>
    <input type="text" name="nome" class="form-control" id="inputNome" value="{{old('nome', $dadosProduto->nome)}}" required>
  </div>
  <div class="col-md-6">
    <label for="inputPreco" class="form-label">Preço</label>
    <input type="number" name="preco"  class="form-control" id="inputPreco" value="{{old('preco', $dadosProduto->preco)}}" required>
  </div>
  <div class="col-12">
    <label for="inputDescricao" class="form-label">Descrição</label>
    <textarea name="descricao" class="form-control" id="inputDescricao" cols="30" rows="7" value="{{old('descricao', $dadosProduto->descricao)}}" required>{{$dadosProduto->descricao}}</textarea>
  </div>
  <div class="col-12">  
    <label for="inputQuantidade" class="form-label">Quantidade</label>
    <input type="number" name="quantidade" class="form-control" id="inputQuantidade" value="{{old('quantidade', $dadosProduto->quantidade)}}" required>
  </div>
  <label for="img" class="form-label">Imagem Atual:</label>
  <div class="container px-4 px-lg-5 mt-5">
    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 ">
        <div class="col mb-5">
          <div class="card h-100">
            <img class="card-img-top" src="../storage/imagens/{{$dadosProduto->img}}" alt="..." />
          </div>
        </div>
    </div>
  </div>
  <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
  <div class="custom-file">
    <input type="file" class="custom-file-input" name="img" value="" id="input_img_itens">
    <label class="custom-file-label" for="input_img_itens">Escolha o arquivo</label>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-success">Atualizar</button>
  </div>
</form>


@endsection