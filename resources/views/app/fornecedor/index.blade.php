<h3>Fornecedor</h3>



@isset($fornecedores)

    Fornecedor: {{ $fornecedores[0]['nome'] }}
    <br>
    Status: {{ $fornecedores[0]['status'] }}
    <br>
    CNPj: {{ $fornecedores[0]['cnpj'] ?? 'Dado não foi preenchido' }}
    <br>
    Telefone: {{ $fornecedores[0]['ddd'] ?? '' }}  {{ $fornecedores[0]['telefone'] ?? '' }}

    @switch( $fornecedores[3]['ddd'])
        @case('11')
            São Paulo - SP
            @break
        @case('22')
            Guarapuva - PR
            @break
        @case('33')
            Rio - PR
            @break
        @case('44')
            Candoi - PR
            @break
        @default
            Cascavel - PR
    @endswitch

@endisset
