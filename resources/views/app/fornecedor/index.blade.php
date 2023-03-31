<h3>Fornecedor</h3>

@php


    @endphp


Fornecedor: {{ $fornecedores[0]['nome'] }}
<br>
Status: {{ $fornecedores[0]['status'] }}

@if($fornecedores[0]['status'] == 'n' )
    <p><b>Fornecedor Inativo</b></p>

@endif

@unless($fornecedores[0]['status'] == 'n')
    <p><b>Fornecedor Ativo</b></p>
@endunless
