<h3>Fornecedor</h3>



@isset($fornecedores)
    @for($i = 0 ; isset($fornecedores[$i]); $i++)
        Fornecedor: {{ $fornecedores[$i]['nome'] }}
        <br>
        Status: {{ $fornecedores[$i]['status'] }}
        <br>
        CNPj: {{ $fornecedores[$i]['cnpj'] ?? 'Dado não foi preenchido' }}
        <br>
        Telefone: {{ $fornecedores[$i]['ddd'] ?? '' }}  {{ $fornecedores[$i]['telefone'] ?? '' }}
        <br>
        <hr>
    @endfor
@endisset

<br>

