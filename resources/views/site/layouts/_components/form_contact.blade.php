

<form action="{{ route('site.contato') }}" method="post">
    @csrf
    <input type="text" name="name" placeholder="Nome" class="borda-preta">
    <br>
    <input type="text" name="phone" placeholder="Telefone" class="borda-preta">
    <br>
    <input type="text" name="email" placeholder="E-mail" class="borda-preta">
    <br>
    <select name="reason-for-contact" class="borda-preta">
        <option value="">Qual o motivo do contato?</option>
        <option value="1">Dúvida</option>
        <option value="2">Elogio</option>
        <option value="3">Reclamação</option>
    </select>
    <br>
    <textarea name="message" class="borda-preta">Preencha aqui a sua mensagem</textarea>
    <br>
    <button type="submit" class="borda-preta">ENVIAR</button>
</form>
