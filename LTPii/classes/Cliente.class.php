<?php
class Cliente{
    var $nome, $email;

    //Serve como cópia para utilizar as informações sem altera a função em si
    public function setNome($n){
        $this->nome = $n;
        
    }
    public function setEmail($e){
        $this->email = $e;

    }
    public function getNome(){
        return $this->nome;

    }
    public function getEmail(){
        return $this->email;

    }

    public function validar($n, $e){
        //serve como abreviação para as variáveis


        //acesso de forma direta.
        //fazendo a máquina entender que vão ser abreviações.
       // $this->nome = $n;
       // $this->email =$e;

       //acesso de forma indireta 
       $this->setNome($n);
       $this->setEmail($e);
        

    }
    

    public function exibir(){
        //mostra o resultado na tela.

        //echo 'Nome:'.$this->nome.'<br>';
        //echo 'Email:'.$this->email.'<br><br>';

        //echo 'Nome:'.$this->getNome() . '<br>';
        //echo 'Email:' .$this->getEmail() . '<br>';

        echo"Nome: {$this->getNome()}<br>";
        echo"Email: {$this->getEmail()}<br><br>";
        


    }

}

?>