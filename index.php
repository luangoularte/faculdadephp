<?php 

require_once  __DIR__ . "/classes/pessoa.php";
require_once  __DIR__ . "/classes/aluno.php";
require_once  __DIR__ . "/classes/disciplina.php";
require_once  __DIR__ . "/classes/professor.php";

$aluno1 = new aluno(12345, [1, 2, 3], "Lucas", 19);
$aluno2 = new aluno(24512, [6, 4, 9], "Pedro", 24);

$professor1 = new professor(["Empreendedorismo", "Projeto de Software"], "Ernesto", 45);
$professor2 = new professor(["Análise de Dados", "Banco de Dados"], "Luciano", 54);

$disciplina = new disciplina("Análise de Dados", 123, [$professor1], [$aluno1, $aluno2]);

$json = "dados.json";

file_put_contents($json, var_export($disciplina, true));

?>