<?php
    class Livro {
        //Atributo
        private $titulo;
        private $isbn;
        private $categoria;
        private $autor;
        private $editora;

        //Método construtor
        public function __construct($titulo, $isbn, $categoria, Autor $autor, Editora $editora){
            $this->titulo = $titulo;
            $this->isbn = $isbn;
            $this->categoria = $categoria;
            $this->autor = $autor;
            $this->editora = $editora;
            
        }

        //Método de encapsulamento
        public function getTitulo(){
            return $this->titulo;
        }

        public function setTitulo($titulo){
            $this->titulo = $titulo;
        }

        public function getIsbn(){
            return $this->isbn;
        }

        public function setIsbn($isbn){
            $this->isbn = $isbn;
        }

        public function getCategoria(){
            return $this->categoria;
        }

        public function setCategoria($categoria){
            $this->categoria = $categoria;
        }
    }












