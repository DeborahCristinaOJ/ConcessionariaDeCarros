<?php

    class Usuario{

        private int $id;
        private string $email;
        private string $senha;


        public function Usuario() {}

        public function setId(int $id) : void {
            $this -> id = $id;
        }

        public function getId() : int {
            return $this->id;
        }

        public function setEmail(string $email) : void {
            $this -> email = $email;
        }

        public function getEmail() : string{
            return $this -> email;
        }

        public function setSenha(string $senha) : void{
            $this -> senha =  $senha;
        }

        public function getSenha() : string{
            return $this -> senha;
        }

        


    }




?>