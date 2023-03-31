<h3>Fornecedor</h3>

@php
    $i = 0
@endphp


@forelse($fornecedores as $key=> $fornecedor)

    Interação: {{ $loop->iteration }}<br>
    Firt: {{ $loop->first }}<br>
    Last {{ $loop->last }}<br>
    Count {{ $loop->count }}<br>
    @dd($loop) --> Caso tenha interesse de saber o que está dentro do objeto loop

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
    Não exitem fornecedore cadastrad

@endforelse

<br>

