<h3>Fornecedor</h3>

@php
    $i = 0
@endphp


@forelse($fornecedores as $key=> $fornecedor)

    Fornecedor: {{ $fornecedor['nome'] }}
    <br>
    Status: {{ $fornecedor['status'] }}
    <br>
    CNPj: {{ $fornecedor['cnpj'] ?? 'Dado não foi preenchido' }}
    <br>
    Telefone: {{ $fornecedor['ddd'] ?? '' }}  {{ $fornecedor['telefone'] ?? '' }}
    <br>
    <hr>

@empty
    Não exitem fornecedore cadastrado

@endforelse

<br>

