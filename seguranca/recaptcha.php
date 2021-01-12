<script src="https://www.google.com/recaptcha/api.js" async defer></script>


<form action="recaptcha/cadastrar.php" method="POST">
    
    <!-- Em data-sitekey devo inserir a Chave Pública que o site da recaptcha me passa-->
    <div class="g-recaptcha" data-sitekey="6LeV9BsaAAAAADiMDKGQv4Fh2zVTMnXlj0JXOw0X"></div>

    <input type="email" name="inputEmail" />
    <input type="submit" value="Enviar" />

</form>


