
@extends('layouts.app')
@section('main')

@foreach($pedidos as $pedido)





<div class="card-group">
  <div class="card">
    <div class="card-body d-inline-block">PEDIDO ID: {{$pedido->PEDIDO_ID}}</div>
  </div>

  <div class="card">
    <div class="card-body d-inline-block">USUARIO ID: {{$pedido->USUARIO_ID}}</div>
  </div>

  <div class="card">
    <div class="card-body d-inline-block">STATUS DO PEDIDO: {{$pedido->status->STATUS_DESC}}</div>
  </div>

  <div class="card">
    <div class="card-body d-inline-block">DATA DO PEDIDO: {{$pedido->PEDIDO_DATA}}</div>
  </div>
</div>

@endforeach
@endsection
