<?php
    class Aluno extends Usuario {
        //Atributo
        private $matricula;

        //Método construtor
        public function __construct($nome, $email, $emprestimo, $matricula){
            parent::__construct($nome, $email);
            $this->matricula = $matricula;
            $this->adicionarEmprestimos($emprestimo);
        }

        //Método de encapsulamento
        public function getMatricula(){
            return $this->matricula;
        }

        public function setMatricula(){
            $this->matricula = $matricula;
        }

    }












