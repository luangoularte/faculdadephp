<?php 

class Aluno extends Pessoa
{
    public int $matricula;
    public array $notas = [];

    public function __construct(int $matricula, array $notas, string $nome, int $idade)
    {
        parent::__construct($nome, $idade);
        $this->matricula = $matricula;
        $this->notas = $notas;
    }

    public function getMatricula()
    {
        return $this->matricula;
    }


    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;
    }

    public function getNotas()
    {
        return $this->notas;
    }

    public function setNotas($notas)
    {
        $this->notas = $notas;
    }
}



?>