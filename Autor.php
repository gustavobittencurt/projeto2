<?php
    class Autor {
        //Atributo
        private $nome;
        private $nacionalidade;

        //Método construtor
        public function __construct($nome, $nacionalidade){
            $this->nome = $nome;
            $this->nacionalidade = $nacionalidade;
        }

        //Método de encapsulamento
        public function getNome(){
            return $this->nome;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }

        //Método de encapsulamento
        public function getNacionalidade(){
            return $this->nacionalidade;
        }

        public function setNacionalidade($nacionalidade){
            $this->nacionalidade = $nacionalidade;
        }
    }












