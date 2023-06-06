@extends('layouts.app')
@section('main')



@if(!\App\Models\Endereco::where('USUARIO_ID' , Auth::user()->USUARIO_ID)->count())

<h1 style="text-align: center; margin: 30px; ">Informe o seu endereço</h1>
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

    <label for="inputCity" class="form-label">Cidade</label>
    <select type="text" class="form-control" id="inputCity" name="Cidade" required>
        <option value="São Paulo" >São Paulo</option>
        <option value="Guarulhos">Guarulhos</option>
        <option value="São Bernardo do Campo">São Bernardo do Campo</option>
        <option value="Santo André" >Santo André</option>
        <option value="Osasco">Osasco</option>
        <option value="Sorocaba" >Sorocaba</option>
        <option value="Ribeirão Preto" >Ribeirão Preto</option>
        <option value="São José dos Campos" >São José dos Campos</option>
        <option value="Santos" >Santos</option>
        <option value="Mauá" >Mauá</option>
        <option value="Mogi das Cruzes">Mogi das Cruzes</option>
        <option value="Diadema"  >Diadema</option>
        <option value="Jundiaí">Jundiaí</option>
        <option value="Carapicuíba" >Carapicuíba</option>
    </select>
</div>
<div class="col-md-4">
    <label for="inputState" class="form-label">Estado</label>
    <select class="form-select" id="inputState" name="Estado" required>
        <option value="AC" >AC</option>
        <option value="AL" >AL</option>
        <option value="AP" >AP</option>
        <option value="AM" >AM</option>
        <option value="BA" >BA</option>
        <option value="CE" >CE</option>
        <option value="DF">DF</option>
        <option value="ES" >ES</option>
        <option value="GO" >GO</option>
        <option value="MA">MA</option>
        <option value="MT" >MT</option>
        <option value="MS" >MS</option>
        <option value="MG" >MG</option>
        <option value="PA" >PA</option>
        <option value="PB" >PB</option>
        <option value="PR">PR</option>
        <option value="PE" >PE</option>
        <option value="PI" >PI</option>
        <option value="RJ" >RJ</option>
        <option value="RN" >RN</option>
        <option value="RS" >RS</option>
        <option value="RO" >RO</option>
        <option value="RR" >RR</option>
        <option value="SC" >SC</option>
        <option value="SP" >SP</option>
        <option value="SE" >SE</option>
        <option value="TO" >TO</option>
    </select>
</div>

  <div class="col-12">
    <button type="submit" class="btn btn-dark btn-block btn-lg" type="submit" style="margin-left: 85px;">Salvar Endereco</button>
  </div>
</form>


@else
<h1 style="text-align: center; margin: 25px; ">Edite o seu endereço</h1>
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

    <label for="inputCity" class="form-label">Cidade</label>
    <select type="text" class="form-control" id="inputCity" name="Cidade" required>
        <option value="São Paulo" @if($endereco->ENDERECO_CIDADE == 'São Paulo') selected @endif>São Paulo</option>
        <option value="Guarulhos" @if($endereco->ENDERECO_CIDADE == 'Guarulhos') selected @endif>Guarulhos</option>
        <option value="São Bernardo do Campo" @if($endereco->ENDERECO_CIDADE == 'São Bernardo do Campo') selected @endif>São Bernardo do Campo</option>
        <option value="Santo André" @if($endereco->ENDERECO_CIDADE == 'Santo André') selected @endif>Santo André</option>
        <option value="Osasco" @if($endereco->ENDERECO_CIDADE == 'Osasco') selected @endif>Osasco</option>
        <option value="Sorocaba" @if($endereco->ENDERECO_CIDADE == 'Sorocaba') selected @endif>Sorocaba</option>
        <option value="Ribeirão Preto" @if($endereco->ENDERECO_CIDADE == 'Ribeirão Preto') selected @endif>Ribeirão Preto</option>
        <option value="São José dos Campos" @if($endereco->ENDERECO_CIDADE == 'São José dos Campos') selected @endif>São José dos Campos</option>
        <option value="Santos" @if($endereco->ENDERECO_CIDADE == 'Santos') selected @endif>Santos</option>
        <option value="Mauá" @if($endereco->ENDERECO_CIDADE == 'Mauá') selected @endif>Mauá</option>
        <option value="Mogi das Cruzes" @if($endereco->ENDERECO_CIDADE == 'Mogi das Cruzes') selected @endif>Mogi das Cruzes</option>
        <option value="Diadema" @if($endereco->ENDERECO_CIDADE == 'Diadema') selected @endif>Diadema</option>
        <option value="Jundiaí" @if($endereco->ENDERECO_CIDADE == 'Jundiaí') selected @endif>Jundiaí</option>
        <option value="Carapicuíba" @if($endereco->ENDERECO_CIDADE == 'Carapicuíba') selected @endif>Carapicuíba</option>
    </select>
</div>
    </div>
  </div>


  <div class="col-md-4">
    <label for="inputState" class="form-label">Estado</label>
    <select class="form-select" id="inputState" name="Estado" required>
        <option value="AC" @if($endereco->ENDERECO_ESTADO == 'AC') selected @endif>AC</option>
        <option value="AL" @if($endereco->ENDERECO_ESTADO == 'AL') selected @endif>AL</option>
        <option value="AP" @if($endereco->ENDERECO_ESTADO == 'AP') selected @endif>AP</option>
        <option value="AM" @if($endereco->ENDERECO_ESTADO == 'AM') selected @endif>AM</option>
        <option value="BA" @if($endereco->ENDERECO_ESTADO == 'BA') selected @endif>BA</option>
        <option value="CE" @if($endereco->ENDERECO_ESTADO == 'CE') selected @endif>CE</option>
        <option value="DF" @if($endereco->ENDERECO_ESTADO == 'DF') selected @endif>DF</option>
        <option value="ES" @if($endereco->ENDERECO_ESTADO == 'ES') selected @endif>ES</option>
        <option value="GO" @if($endereco->ENDERECO_ESTADO == 'GO') selected @endif>GO</option>
        <option value="MA" @if($endereco->ENDERECO_ESTADO == 'MA') selected @endif>MA</option>
        <option value="MT" @if($endereco->ENDERECO_ESTADO == 'MT') selected @endif>MT</option>
        <option value="MS" @if($endereco->ENDERECO_ESTADO == 'MS') selected @endif>MS</option>
        <option value="MG" @if($endereco->ENDERECO_ESTADO == 'MG') selected @endif>MG</option>
        <option value="PA" @if($endereco->ENDERECO_ESTADO == 'PA') selected @endif>PA</option>
        <option value="PB" @if($endereco->ENDERECO_ESTADO == 'PB') selected @endif>PB</option>
        <option value="PR" @if($endereco->ENDERECO_ESTADO == 'PR') selected @endif>PR</option>
        <option value="PE" @if($endereco->ENDERECO_ESTADO == 'PE') selected @endif>PE</option>
        <option value="PI" @if($endereco->ENDERECO_ESTADO == 'PI') selected @endif>PI</option>
        <option value="RJ" @if($endereco->ENDERECO_ESTADO == 'RJ') selected @endif>RJ</option>
        <option value="RN" @if($endereco->ENDERECO_ESTADO == 'RN') selected @endif>RN</option>
        <option value="RS" @if($endereco->ENDERECO_ESTADO == 'RS') selected @endif>RS</option>
        <option value="RO" @if($endereco->ENDERECO_ESTADO == 'RO') selected @endif>RO</option>
        <option value="RR" @if($endereco->ENDERECO_ESTADO == 'RR') selected @endif>RR</option>
        <option value="SC" @if($endereco->ENDERECO_ESTADO == 'SC') selected @endif>SC</option>
        <option value="SP" @if($endereco->ENDERECO_ESTADO == 'SP') selected @endif>SP</option>
        <option value="SE" @if($endereco->ENDERECO_ESTADO == 'SE') selected @endif>SE</option>
        <option value="TO" @if($endereco->ENDERECO_ESTADO == 'TO') selected @endif>TO</option>
    </select>
</div>



  <div class="col-12">
  <button type="submit" class="btn btn-dark btn-block btn-lg" style="margin-top: -5px;" onclick="exibirAlerta()" >Editar meu endereço</button>
</div>



</form>

@endif

<button type="submit" class="btn btn-dark btn-block btn-lg" data-mdb-ripple-color="dark" style="margin-left:85px;margin-top:50px"><a style=" text-decoration: none;color:white; " href="/pedido">Finalizar Pedido</a></button>




@endsection



