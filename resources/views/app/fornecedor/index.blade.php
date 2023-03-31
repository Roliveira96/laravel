<h3>Fornecedor</h3>

@php


@endphp



@if( count($fornecedores)> 0 && count($fornecedores) < 10)
    <h4>Existem fornecedores</h4>
@elseif(count($fornecedores)> 10)
    <h4>Existem vários fornecedores</h4>
@else
    <h4>Não exitem fornecedores</h4>
@endif
