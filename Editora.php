<?php
    class Editora {
        //Atributo
        private $nome;
        private $cidade;

        //Método construtor
        public function __construct($nome, $cidade){
            $this->nome = $nome;
            $this->cidade = $cidade;
        }

        //Método de encapsulamento
        public function getNome(){
            return $this->nome;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }

        //Método de encapsulamento
        public function getCidade(){
            return $this->cidade;
        }

        public function setCidade($cidade){
            $this->cidade = $cidade;
        }
    }












