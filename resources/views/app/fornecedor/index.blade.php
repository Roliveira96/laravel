<h3>Fornecedor</h3>



@isset($fornecedores)

    Fornecedor: {{ $fornecedores[0]['nome'] }}
    <br>
    Status: {{ $fornecedores[0]['status'] }}
    <br>
    CNPj: {{ $fornecedores[0]['cnpj'] }}
    @empty($fornecedores[0]['cnpj'])
        <h4>O CNPJ está vazio</h4>
    @endempty

@endisset
