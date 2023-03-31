<h3>Fornecedor</h3>

@php
    $i = 0
@endphp

@isset($fornecedores)

 @while( isset($fornecedores[$i] ))

        Fornecedor: {{ $fornecedores[$i]['nome'] }}
        <br>
        Status: {{ $fornecedores[$i]['status'] }}
        <br>
        CNPj: {{ $fornecedores[$i]['cnpj'] ?? 'Dado não foi preenchido' }}
        <br>
        Telefone: {{ $fornecedores[$i]['ddd'] ?? '' }}  {{ $fornecedores[$i]['telefone'] ?? '' }}
        <br>
        <hr>
        @php
            $i++
        @endphp
 @endwhile
@endisset

<br>

