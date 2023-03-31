<h3>Fornecedor</h3>



@isset($fornecedores)

    Fornecedor: {{ $fornecedores[0]['nome'] }}
    <br>
    Status: {{ $fornecedores[0]['status'] }}

@endisset
