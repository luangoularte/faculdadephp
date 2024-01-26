<?php 

class disciplina
{
    public string $nome;
    public int $carga_horaria;
    public professor $professor;
    public array $alunos = [];

    public function __construct(string $nome, int $carga_horaria, professor $professor, array $alunos)
    {
        $this->nome = $nome;
        $this->carga_horaria = $carga_horaria;
        $this->professor = $professor;
        $this->alunos = $alunos;
    }
}

?>