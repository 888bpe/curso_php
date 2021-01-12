<style>
    *{
        font-size:12px;
        color:black;
        font-family:arial;
        padding:0;
        margin:0;
    }
    hr{
        border:1px solid black;
        width:50%;
        float:left;
    }
    .title{
        font-weight:bold;
        font-size:18px;
    }
    .explicacao{
        color:rgba(0,0,200,1);
        font-size:12px;
        
    }
</style>
<?php

$nome = "João";                 // Variável tipo string
$ano = 1999;                    // Variável tipo int
$salario = 500.00;              // Variável tipo float
$bloqueado = false;             // Variável tipo bool
$frutas = array("abacaxi", "laranja", "manga", "maçã"); // Array
$nascimento = new DateTime();   // Orientação a objeto

////////////////////////////////////////////////////////////////////////////////////////////////////////
echo "<p class='title'>!!!!!!!!!! VAR DUMP's !!!!!!!!!!<p>";
var_dump($nome);      //Mostra os dados da variável
echo "<br>";
var_dump($ano);       //Mostra os dados da variável
echo "<br>";
var_dump($salario);   //Mostra os dados da variável
echo "<br>";
var_dump($bloqueado); //Mostra os dados da variável
echo "<br>";
var_dump($frutas);    //Mostra os dados da variável
echo "<br>";
var_dump($nascimento);
echo "<br><br><hr>";

////////////////////////////////////////////////////////////////////////////////////////////////////////
echo "<br><p class='title'>!!!!!!!!!! FOPEN !!!!!!!!!!<p>";
$arquivo = fopen("index.php", "r");
var_dump($arquivo);
echo "<br><br><hr>";

////////////////////////////////////////////////////////////////////////////////////////////////////////
echo "<br><p class='title'>!!!!!!!!!! ARRAY !!!!!!!!!!<p>";
echo $frutas[2];       //Irá mostrar a manga, pois está na posição 2;
echo "<br><br><hr>";

////////////////////////////////////////////////////////////////////////////////////////////////////////
echo "<br><p class='title'>!!!!!!!!!! UNSET E ISSET !!!!!!!!!!<p>";
unset($nome); //Limpa a variável

if(isset($nome)){   //isset = se existir
    echo "Variável existente: $nome!";
}else if(!isset($nome)){ //!isset = se não existir
    echo "Variável não existe!";
}else{

}
echo "<br><br><hr>";

////////////////////////////////////////////////////////////////////////////////////////////////////////
#exit; //Para o sistema aqui

////////////////////////////////////////////////////////////////////////////////////////////////////////
echo "<br><p class='title'>!!!!!!!!!! VARIÁVEIS GLOBAIS !!!!!!!!!!<p>";
$usuario = (int)$_GET["usuario"];   // Para testar, colocar ?usuario=123
var_dump($usuario);
echo "<br>";
$id = (int)$_GET["id"];             // Para testar, colocar ?usuario=123
var_dump($id);
echo "<br><br><hr>";

////////////////////////////////////////////////////////////////////////////////////////////////////////
echo "<br><p class='title'>!!!!!!!!!! IP DO USUÁRIO !!!!!!!!!!<p>";
$ip = $_SERVER["REMOTE_ADDR"];       // Para pegar o IP do usuário
var_dump($ip);                       // Localhost, mostrará estranho, mas na internet mostrará corretamente
echo "<br>";
$ipLog = $_SERVER["SCRIPT_NAME"];    // Mostra qual página está sendo acessada (ideal para fazer arquivo de log)
var_dump($ipLog);
echo "<br><br><hr>";

////////////////////////////////////////////////////////////////////////////////////////////////////////
echo "<br><p class='title'>!!!!!!!!!! ESCOPO / FUNCTION !!!!!!!!!!<p>";
$nome = "João";
function testeUm(){
    global $nome;   //Preciso definir ela como variável global para aparecer dentro desta function, caso a variável tenha sido criado fora
    echo $nome;
    unset($nome);
}

function testeDois(){
    global $teste;
    $teste = "Teste de function 02";
}

#testeUm();

testeDois();        // Ela tem que ser transformada em global na function
echo $teste;        // Exibirá o conteudo de teste
echo "<br><br><hr>";

////////////////////////////////////////////////////////////////////////////////////////////////////////
echo "<br><p class='title'>!!!!!!!!!! OPERADORES !!!!!!!!!!<p>";
// Concatenação
$nome = "João";                 
$sobrenome = "Rangel";          
$nomeCompleto = $nome . " " . $sobrenome;
echo $nomeCompleto;
echo "<br>";
echo $nome .= " Mais alguma coisa";
echo "<br><br>";

$a = 5.0;
$b = 5;
$c = NULL;
$valorTotal = 10;
echo "Valor total + : ".$valorTotal += 25;
echo "<br>";
echo "Valor total - : ".$valorTotal -= 25;
echo "<br>";
echo "Valor total * : ".$valorTotal *= 25;
echo "<br>";
echo "Valor total / : ".$valorTotal /= 25;
echo "<br>";
echo "Valor total MOD : ".$valorTotal %= 25;
echo "<br><br>";

echo "Adição: ";
echo $a+$b;
echo "<br>Subtração: ";
echo $a-$b;
echo "<br>Multiplicação: ";
echo $a*$b;
echo "<br>Divisão: ";
echo $a/$b;
echo "<br>MOD: ";
echo $a%$b;
echo "<br> Elevado: ";
echo $a ** $b;
echo "<br><br>";

echo "A > B: ";
var_dump($a > $b);      // Pode ser >, <, =, !=
echo "<br> A igual B: ";
var_dump($a === $b);    // ===  ou !== são para comparar valor e tipo
echo "<br> A <=> B: ";
var_dump($a <=> $b);    // Para comparar se é maior, igual ou menor (1)maior, (0)igual, (-1) menor
echo "<br>";
echo $c ?? $a ?? $b;     // Se $c for nulo, mostre-me $a, se $a for nulo, mostre-me $b

echo "<br><br><hr>";

////////////////////////////////////////////////////////////////////////////////////////////////////////
echo "<br><p class='title'>!!!!!!!!!! FUNÇÕES !!!!!!!!!!<p>";
$nome = "MathEuS baTiSta piMenTel";  
$frase = "A repetição é a mãe da retenção.";
echo "Variável normal: $nome";
echo "<br>Transformar em minúsculo: ". strtolower($nome);
echo "<br>Transformar em maiusculo: ". strtoupper($nome);
echo "<br>1ª Letra maiúscula: ". ucfirst($nome);
echo "<br>1ª Letra de todas as palavras maiúscula: ". ucwords($nome);
echo "<br>1ª Letra de todas as palavras maiúscula e resto minúscula: ". ucwords(strtolower($nome));
echo "<br>Troca de letras/palavras: ". $nome . " (troca letra 'a' por 'x') -> ". str_replace("a", "x", $nome);
echo "<br>";
echo "<br>Frase normal: $frase";
echo "<br>Diz qual é a posição daquela letra/palavra: (repetição) -> ". strpos($frase, "mãe");
echo "<br>Cortar frase na posição 19: ". substr($frase, 0, 19); // Do inicio da frase ate o começo da mãe
echo "<br>Começa a partir da posição 19: ". substr($frase, 19); // Pega a partir da palavra mãe
echo "<br>Cortar frase: ". substr($frase, 0, 19);               // Do inicio da frase ate o começo da mãe
unset($nome, $frase);
echo "<br><br><hr>";

////////////////////////////////////////////////////////////////////////////////////////////////////////
echo "<br><p class='title'>!!!!!!!!!! INCLUDE / REQUIRE !!!!!!!!!!<p>";
echo "Busca o número aleatório do arquivo <u>apoio.php</u> utilizando include<br>";
include("apoio.php");       // Include vai copiar o arquivo apoio.php INTEIRO e colocar naquela linha
require("apoio.php");       // Require é mais seguro
require_once("apoio.php");  // Require que trará a mesma função ou variável apenas uma vez
                            // Como já busquei o apoio.php (duas vezes), ele não buscará novamente
echo "<br><br><hr>";

////////////////////////////////////////////////////////////////////////////////////////////////////////
echo "<br><p class='title'>!!!!!!!!!! ESTRUTUDA DE CONDIÇÃO (IF - ELSE IF - ELSE) !!!!!!!!!!<p>";
echo "Duas formas de fazer o IF<br>";
$valor1 = 20;
$valor2 = 50;
if ($valor1 > $valor2){
    echo "Variável valor1 é maior que valor2";
}else{
    echo "Variável valor2 é maior que valor1";
}

echo "<br>";

echo ($valor1 > $valor2)?"Variável valor1 é maior que valor2":"Variável valor2 é maior que valor1";
echo "<br><br><hr>";

////////////////////////////////////////////////////////////////////////////////////////////////////////
echo "<br><p class='title'>!!!!!!!!!! ESTRUTUDA DE CONDIÇÃO (SWITCH - CASE) !!!!!!!!!!<p>";
echo "Dias da semana<br>";
$diaDaSemana = date("w");

switch($diaDaSemana){
    case 0:
        echo "Domingo";
    break;
    
    case 1:
        echo "Segunda-feira";
    break;
    
    case 2:
        echo "Terça-feira";
    break;
    
    case 3:
        echo "Quarta-feira";
    break;
    
    case 4:
        echo "Quinta-feira";
    break;

    case 5:
        echo "Sexta-feira";
    break;

    case 6:
        echo "Sábado";
    break;

    default:
        echo "Erro!";
    break;
}
echo "<br><br><hr>";

////////////////////////////////////////////////////////////////////////////////////////////////////////
echo "<br><p class='title'>!!!!!!!!!! ESTRUTUDA DE REPETIÇÃO (FOR) !!!!!!!!!!<p>";
for($i = 0; $i < 10; $i ++){
    echo ($i+1). " -- ";
}
echo "<br><br><hr>";

////////////////////////////////////////////////////////////////////////////////////////////////////////
echo "<br><p class='title'>!!!!!!!!!! ESTRUTUDA DE REPETIÇÃO (FOREACH) !!!!!!!!!!<p>";
echo "Significa (para cada) e cria uma variável para cada item<br>";

$meses = array("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");

foreach ($meses as $index => $mes){
    echo "Índice: $index <br>";
    echo "O mês é $mes <br><br>";
}

echo "<br><br>";
require("formulario.php");
echo "<br><br><hr>";

////////////////////////////////////////////////////////////////////////////////////////////////////////
echo "<br><p class='title'>!!!!!!!!!! ESTRUTUDA DE REPETIÇÃO (WHILE) !!!!!!!!!!<p>";
$condicao = true;
while ($condicao){
    $numero = rand(1, 10);

    if ($numero === 3){
        echo "TRÊS!!!<br>";
        $condicao = false;
    }
}
echo "<br><br><hr>";

////////////////////////////////////////////////////////////////////////////////////////////////////////
echo "<br><p class='title'>!!!!!!!!!! ESTRUTUDA DE REPETIÇÃO (DO WHILE) !!!!!!!!!!<p>";
$total = 100;
$desconto = 0.9;
do{
    $total *= $desconto;
    echo "$total<br>";
}while($total > 70);
echo "<br><br><hr>";

////////////////////////////////////////////////////////////////////////////////////////////////////////
echo "<br><p class='title'>!!!!!!!!!! ARRAY EM PHP !!!!!!!!!!<p>";
$frutas = array("Laranja", "Abacaxi", "Melancia");
print_r($frutas);   // É o comando que exibe um array
echo "<br><br>";
$carros[0][0] = "GM";   $carros[0][1] = "Colbat";  $carros[0][2] = "Onix";     $carros[0][3] = "Camaro";
$carros[1][0] = "Ford"; $carros[1][1] = "Fusion";  $carros[1][2] = "Fiesta";   $carros[1][3] = "Eco Sport";
print_r($carros);
echo "<br>Exibindo carro na posição [0][3]: " . $carros[0][3];
echo "<br>Exibindo ultimo carro na posição [1][x]: ". end($carros[1]);


echo "<br><br>";


$pessoas = array();

array_push($pessoas, array(
    'nome'  => 'João',
    'idade' => '20'
));

array_push($pessoas, array(
    'nome'  => 'Fernando',
    'idade' => '24'
));

print_r($pessoas);              // Exibe a array pessoas
echo "<br>";
print_r($pessoas[0]);           // Exibe a array pessoas - Índice 0
echo "<br>";
print_r($pessoas[0]['nome']);   // Exibe a array pessoas - Índice 0 - Mostra seu nome
echo "<br><br><hr>";

////////////////////////////////////////////////////////////////////////////////////////////////////////
echo "<br><p class='title'>!!!!!!!!!! JSON !!!!!!!!!!<p>";
echo "Serve para codificar e decodificar arrays<br>";
//Será utilizado a variável pessoas

echo json_encode($pessoas);

$json = '[{"nome":"Jo\u00e3o","idade":"20"},{"nome":"Fernando","idade":"24"}]';
$data = json_decode($json, true);

echo "<br>";

var_dump($data);
echo "<br><br><hr>";

////////////////////////////////////////////////////////////////////////////////////////////////////////
echo "<br><p class='title'>!!!!!!!!!! CONSTANTE E ARRAY CONSTANTE !!!!!!!!!!<p>";
echo "Atribui uma constante<br>";

define("SERVIDOR", "127.0.0.1");      // Nome da constante e dado. Usar letra maiuscula

echo SERVIDOR . "<br>";


define("BANCO_DE_DADOS", ['localhost', 'root', 'password', 'dbname']);
print_r(BANCO_DE_DADOS);

echo "<br>";

echo "Versão do PHP com <u>PHP_VERSION</u>: " . PHP_VERSION . "<br>";

echo "DIRECTORY_SEPARATOR cria uma barra de diretório, pois ela muda do Windows (/) para o Linux (\): " . DIRECTORY_SEPARATOR;
echo "<br><br><hr>";

////////////////////////////////////////////////////////////////////////////////////////////////////////
echo "<br><p class='title'>!!!!!!!!!! VARIÁVEIS DE SESSÃO !!!!!!!!!!<p>";
echo "Atribui uma constante<br>";

echo "<a href='session.php' target='_blank'>CLIQUE AQUI PARA IR AO SESSION.PHP</a><br>";

echo "Variáveis SESSION<br>";

echo "<br> Mostra a pasta de arquivos temp: " . session_save_path();

echo "<br><br> Retorna o status atual da seção: " . session_status();
echo "<br> 2 = Ativa";
echo "<br> 1 = Desabilitada";
echo "<br><br><hr>";

////////////////////////////////////////////////////////////////////////////////////////////////////////
echo "<br><p class='title'>!!!!!!!!!! FUNÇÕES !!!!!!!!!!<p>";
echo "<br><br> Criando funções de usuário<br>";
function ola(){

    echo "Olá mundo!<br>";          // Ao chamar a função, ele exibe
    return "Olaaaa mundo!<br>";     // Preciso dar um echo função para exibir
}
ola();  
echo ola();
echo "<br><br><hr>";

////////////////////////////////////////////////////////////////////////////////////////////////////////
echo "<br><p class='title'>!!!!!!!!!! PARÂMETROS DE FUNÇÃO !!!!!!!!!!<p>";

function hello($texto, $periodo = "Bom dia!"){  //Primeiro o que não tem valores, depois o que tem valores
    
    return "Hello $texto, $periodo";

}

echo hello("word") . "<br>";        //Será atribuido 'word' na variável $texto
echo hello("country") . "<br>";     //Será atribuido 'country' na variável $texto
echo hello("city") . "<br>";        //Será atribuido 'city' na variável $texto
echo hello("") . "<br>";            //Será atribuido '' na variável $texto

function argumento(){

    $argumentos = func_get_args();  //Recupera e me retorna num array todos os argumentos passados na função

    return $argumentos;             

}

var_dump(argumento("Bom dia", 10, "Oii", 15.20));
echo "<br><br><hr>";

////////////////////////////////////////////////////////////////////////////////////////////////////////
echo "<br><p class='title'>!!!!!!!!!! PARÂMETRO POR VALOR / POR REFERÊNCIA !!!!!!!!!!<p>";
echo "Variável a recebe 10. Dentro da function ela recebe + 50<br>";

$a = 10;
function trocaValor($a){
    $a += 50;
    return $a;
}

echo "Executando a variável de dentro da função: " . trocaValor($a) . "<br>";
echo "Executando a variável de fora da função: " . $a;

echo "<br><br>";

$c = 10;
function trocaValor2(&$d){      // & na frense significa Passagem de Parâmetro por Referência
                                // É como ponteiros do C
    $d += 50;

    return $d;

}

echo "Executando a variável de dentro da função: " . trocaValor2($c) . "<br>";
echo "Executando a variável de dentro da função: " . trocaValor2($c) . "<br>";
echo "Executando a variável de dentro da função: " . trocaValor2($c) . "<br>";
echo "Executando a variável de fora da função: " . $c;
echo "<br><br><hr>";
unset($a, $b, $c, $d);
////////////////////////////////////////////////////////////////////////////////////////////////////////
echo "<br><p class='title'>!!!!!!!!!! NOVIDADE DO PHP 7 !!!!!!!!!!<p>";
echo "Aqui eu uso o array_sum, que percorre o array sem precisar usar o for<br>";

//function soma(int ...$valores):string{ // Todos os dados serão string
function soma(int ...$valores){          // O int ... diz que todos os valores que virão serão inteiros
                                         // Posso fazer com float, string,boolean
    return array_sum($valores);          // Percorre o array, sem precisar usar o for

}
var_dump(soma(2,2));
echo soma(2, 2) . "<br>";
echo soma(25, 30) . "<br>";
echo soma(1.5, 1.8) . "<br>";            // Se na function estiver int, ele vai somar apenas os inteiros
echo "<br><br><hr>";

////////////////////////////////////////////////////////////////////////////////////////////////////////
echo "<br><p class='title'>!!!!!!!!!! FUNÇÃO RECURSIVA !!!!!!!!!!<p>";
echo "É quando uma função chama ela mesmo<br>";
echo "Muito bom para fazer subtópicos<br>";

$hierarquia = array(        // Tudo isso ficará armazenado na variável hierarquia
    array(
        'nome_cargo' => 'CEO',
        'subordinados' => array(
           
            // Diretor Comercial
            array(
                'nome_cargo' => 'Diretor Comercial',
                'subordinados' => array(
                    
                    // Gerente de Vendas
                    array(
                        'nome_cargo' => 'Gerente de Vendas'
                    ) // Ger. Ven.
           
                )
            ), // Dir. Com.
      
            // Diretor Financeiro
            array(
                'nome_cargo' => 'Diretor Financeiro',
                'subordinados' => array(
                    
                    // Gerente de Contas a Pagar
                    array(
                        'nome_cargo' => 'Gerente de Contas a Pagar',
                        'subordinados' => array(
                            // Supervisor de pagamentos
                            array(
                                'nome_cargo' => 'Supervisor de Pagamentos'
                            ) // Sup. Pag.
                        )
         
                    ) // Ger. Cont. Pag.
                )
            ) // Dir. Fin.
      
        )
    ) //CEO
);


function exibe($cargos){

    $html = '<ul>';                                                                 // Variável que armazenará os dados

    foreach ($cargos as $cargo){                                                    // Para cara cargo, fará o seguinte procedimento:
        
        $html .= '<li>';                                                            // .= para ir moldando o código dentro da variável

        $html .= $cargo['nome_cargo'];                                              
            
        if(isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){     // isset para ver se tem mais subordinados
                                                                                    // count para ver se o subordinado não é null
            $html .= exibe($cargo['subordinados']);                                 // se existir, refaça a função exibe

        }

        $html .= '</li>';
    }

    $html .= '</ul>';

    return $html;

}

echo exibe($hierarquia);                            // Exibir a função exibe com os dados da variável hierarquia
                                                    // Lembrando que a função exibe será exibida na formatação da variável $html
echo "<br><br><hr>";

////////////////////////////////////////////////////////////////////////////////////////////////////////
echo "<br><p class='title'>!!!!!!!!!! FUNÇÃO ANÔNIMA !!!!!!!!!!<p>";

function anonima($callback){
    // Processo lento, como conversão de vídeo

    $callback();

}

anonima(function(){

    echo "Terminou um processo lento com a variável callback!";

});

echo "<br><br>";

$fn = function($a){
    
    var_dump($a);

};

$fn("Var_Dump da variável fn, que armazena uma função.");
echo "<br><br><hr>";

////////////////////////////////////////////////////////////////////////////////////////////////////////
echo "<br><p class='title'>!!!!!!!!!! FUNÇÃO DATE() E TIME() !!!!!!!!!!<p>";
echo "<a href='https://www.php.net/manual/pt_BR/function.date.php' target='_blank'>Documentação do DATE</a><br>";
echo date("d/m/Y H:i:s:ms") . "<br><br>";

echo "<a href='https://www.php.net/manual/pt_BR/function.time.php' target='_blank'>Documentação do TIME</a><br>";
echo "Quantidade de segundos, desde 1º JAN 1970 até agora<br>";
echo time() . "<br><br>";

echo "Usando date() junto com a hora obtida pelo time() para fixar um horário<br>";
echo date("d/m/Y H:i:s", 1607707374) . "<br><br>";

echo "<a href='https://www.php.net/manual/pt_BR/function.strtotime.php' target='_blank'>Converter uma STRING para TIME com strtotime</a>-<br>";
$tempo = strtotime("1999-03-28") ;
echo "Resultado com a strtotime: " . $tempo . "<br>";
echo "Resultado no date(): " . date("l, d/m/Y", $tempo) . "<br><br>";

$tempo = strtotime("+1 day") ;
echo "Resultado com a strtotime com +1 day: " . $tempo . "<br>";
echo "Resultado no date(): " . date("l, d/m/Y", $tempo) . "<br><br>";

$tempo = strtotime("+1 week") ;
echo "Resultado com a strtotime com +1 week: " . $tempo . "<br>";
echo "Resultado no date(): " . date("l, d/m/Y", $tempo) . "<br><br>";

$tempo = strtotime("+14 day") ;
echo "Resultado com a strtotime com +14 day: " . $tempo . "<br>";
echo "Resultado no date(): " . date("l, d/m/Y", $tempo) . "<br><br>";
echo "<br><br><hr>";

////////////////////////////////////////////////////////////////////////////////////////////////////////
echo "<br><p class='title'>!!!!!!!!!! SETLOCALE() !!!!!!!!!!<p>";

echo "<a href='https://www.php.net/manual/pt_BR/function.setlocale.php' target='_blank'>Documentação do SETLOCALE</a><br><br>";
setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

echo "<a href='https://www.php.net/manual/pt_BR/function.strftime.php' target='_blank'>Documentação do STRFTIME</a><br>";
echo "Resultado com a strftime: " . strftime("%A %B %C %D") . "<br>";
echo "<br><br><hr>";

////////////////////////////////////////////////////////////////////////////////////////////////////////
echo "<br><p class='title'>!!!!!!!!!! CLASSE DATETIME() !!!!!!!!!!<p>";

echo "<a href='https://www.php.net/manual/pt_BR/class.datetime.php' target='_blank'>Documentação do DATE TIME</a><br><br>";
echo "<a href='https://www.php.net/manual/pt_BR/class.dateinterval.php' target='_blank'>Documentação do DATE INTERVAL</a><br><br>";
echo "<br>";

$dt = new DateTime();                   // Date com orientação a objeto
$periodo = new DateInterval("P15D");    // P = Período / 15D = 15 Dias

echo "Exibindo a data com o DateTime: " . $dt->format("d/m/Y  h:i:s" ) . "<br>";

$dt -> add($periodo);                    // Para adicionar uma variável

echo "Adicionando o DateInterval para acrescentar + 15 dias: " . $dt->format("d/m/Y  h:i:s" ) . "<br>";




?>




