<?php
    require "Imprimivel.php";

    class Emprestimo implements Imprimivel {
        //Atributo
        private $codigo;
        private $dataEmprestimo;
        private $dataDevolucao;
        private $livro;

        //Método construtor
        public function __construct($codigo, $dataEmprestimo, $dataDevolucao, Livro $livro){
            $this->codigo = $codigo;
            $this->dataEmprestimo = $dataEmprestimo;
            $this->dataDevolucao = $dataDevolucao;
            $this->livro = $livro;
        }

        //Método de encapsulamento
        public function getCodigo(){
            return $this->codigo;
        }

        public function setCodigo($codigo){
            $this->codigo = $codigo;
        }

        public function getDataEmprestimo(){
            return $this->dataEmprestimo;
        }

        public function setDataEmprestimo($dataEmprestimo){
            $this->dataEmprestimo = $dataEmprestimo;
        }

        public function getDataDevolucao(){
            return $this->dataDevolucao;
        }

        public function setDataDevolucao($dataDevolucao){
            $this->dataDevolucao = $dataDevolucao;
        }

        public function imprimir(){
            echo "Código Empréstimo: " . $this->codigo . "<br>";
            echo "Data de Empréstimo: " . $this->dataEmprestimo . "<br>";
            echo "Data de Devolução: " . $this->dataDevolucao . "<br>";
            echo "Livro: " . $this->livro->getTitulo() . "<br>";
            echo "ISBN: " . $this->livro->getIsbn() . "<br><br>";
        }
    }












