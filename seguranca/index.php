<?

echo "Se um comando for digitado na input ele irá exibir o resultado <br/>";
echo "Caso não exiba o resultado, é porque está protegido <br/>";

if ($_SERVER["REQUEST_METHOD"] === "POST"){

    //$cmd = $_POST['cmd'];

    //O que precisa fazer para evitar
    $cmd = escapeshellarg($_POST["cmd"]);       //Para Linux
    //$cmd = escapeshellcmd($_POST["cmd"]);       //Para Windows
    
    echo "<pre>";

    $comando = system($cmd, $retorno);

    echo "</pre>";

}

?>

<form method="POST">

    <input type="text" name="cmd" />
    <input type="submit" value="Enviar" />

</form>

<a href="sql_injection.php" target="_blank">SQL Injection</a> <br/>
<a href="permissoes.php" target="_blank">Permissões das pastas</a> <br/>
<a href="recaptcha.php" target="_blank">reCaptcha</a> <br/>
<a href="xss.php" target="_blank">XSS</a> <br/>
<a href="criptografia/criptografia.php" target="_blank">Criptografia de Dados</a> <br/>
<a href="ataque_sessao.php" target="_blank">Ataque Sessão</a> <br/>