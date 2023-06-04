@extends('layouts.app')
@section('main')

<h1 style="text-align: center; margin: 25px; ">Informe o seu endereço</h1>

@if(!\App\Models\Endereco::where('USUARIO_ID' , Auth::user()->USUARIO_ID)->count())

<form class="row g-3" method="POST" action="{{route('endereco.save', Auth::user()->USUARIO_ID)}}" >
    @csrf
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Nome do endereço</label>
    <input type="text" class="form-control"  placeholder="casa, trabalho..." name="Endereco_nome" required>
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Logradouro</label>
    <input type="text" class="form-control"  name="Logradouro" required>
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Número</label>
    <input type="number" class="form-control"  placeholder="" name="Numero" required>
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Complemento</label>
    <input type="text" class="form-control"  name="Complemento" required>
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">CEP</label>
    <input type="text" class="form-control" id="inputCity" name="Cep" required min=8 max=8>
  </div>
  <div class="col-md-4">
        <div class="col-md-6">
        <label for="inputCity" class="form-label">Cidade</label>
        <input type="text" class="form-control" id="inputCity" name="Cidade" required>
    </div>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Estado</label>
    <input type="text" class="form-control" id="inputZip" name="Estado" required>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Salvar Endereco</button>
  </div>
</form>


@else

<form class="row g-3" method="POST" action="{{route('endereco.save', Auth::user()->USUARIO_ID)}}"  style="margin: 5%;">
@csrf
<div class="col-md-6">
    <label for="inputAddress" class="form-label">Casa</label>
    <input type="text" class="form-control" placeholder="casa, trabalho..." name="Endereco_nome" value="{{$endereco->ENDERECO_NOME}}" required>


</div>

  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Logradouro</label>
    <input type="text" class="form-control"  name="Logradouro" value="{{$endereco->ENDERECO_LOGRADOURO}}" required>
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Número</label>
    <input type="number" class="form-control"  placeholder="" name="Numero" value="{{$endereco->ENDERECO_NUMERO}}" required>
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Complemento</label>
    <input type="text" class="form-control"  name="Complemento" value="{{$endereco->ENDERECO_COMPLEMENTO}}" required>
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">CEP</label>
    <input type="text" class="form-control" id="inputCity" name="Cep" value="{{$endereco->ENDERECO_CEP}}" required>
  </div>
  <div class="col-md-4">
        <div class="col-md-6">
        <label for="inputCity" class="form-label">Cidade</label>
        <input type="text" class="form-control" id="inputCity" name="Cidade" value="{{$endereco->ENDERECO_CIDADE}}" required>
    </div>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Estado</label>
    <input type="text" class="form-control" id="inputZip" name="Estado" value="{{$endereco->ENDERECO_ESTADO}}" required>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary" style="margin-top:5%;">Editar</button>

  </div>
</form>

@endif

<button type="submit" class="btn btn-dark btn-block btn-lg" data-mdb-ripple-color="dark"><a href="/pedido">pedido</a></button>




@endsection



