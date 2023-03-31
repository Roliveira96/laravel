<h3>Fornecedor</h3>



@isset($fornecedores)

    Fornecedor: {{ $fornecedores[0]['nome'] }}
    <br>
    Status: {{ $fornecedores[0]['status'] }}
    <br>
    CNPj: {{ $fornecedores[0]['cnpj'] }}

@endisset
<br>
<br>
@isset($fornecedores)

    Fornecedor: {{ $fornecedores[1]['nome'] }}
    <br>
    Status: {{ $fornecedores[1]['status'] }}
    <br>
    @isset($fornecedores[1]['cnpj'])
        CNPj: {{ $fornecedores[1]['cnpj'] }}
    @endisset

@endisset
