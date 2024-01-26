<?php 

class Professor extends Pessoa
{
    public array $disciplinas = [];

    public function __construct(array $disciplinas, $nome, $idade)
    {
        parent::__construct($nome, $idade);
        $this->disciplinas = $disciplinas;
    }

    public function getDisciplinas()
    {
        return $this->disciplinas;
    }

    public function setDisciplinas($disciplinas)
    {
        $this->disciplinas = $disciplinas;
    }

}

?>