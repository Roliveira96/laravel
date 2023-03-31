<h3>Fornecedor</h3>

@php
    $i = 0
@endphp

@isset($fornecedores)

 @foreach($fornecedores as $key=> $fornecedor)
        Fornecedor: {{ $fornecedor['nome'] }}
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        CNPj: {{ $fornecedor['cnpj'] ?? 'Dado não foi preenchido' }}
        <br>
        Telefone: {{ $fornecedor['ddd'] ?? '' }}  {{ $fornecedor['telefone'] ?? '' }}
        <br>
        <hr>
 @endforeach
@endisset

<br>

