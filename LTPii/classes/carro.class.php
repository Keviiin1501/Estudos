<!-- MÉTODOS CONSTRUTORES - passem informações para os atributos assim que a classe é instanciada. Quando se cria um objeto automaticamento os atributos já recebem as informações.--> 
<?php

class Carro{
    private $ligado,$vAtual,$vMax,$msg;

    public function ___construct(){


    }
    //método getter e setters

    public function setligado($l){

    }
    public function setVatual($va){

    }
    public function setVmax($vm){

    }
    public function setmsg($msg){

    }

    //método getters

    public function getLigado(){
        return $this->ligado;
    }
    public function getAtual(){
        return $this->vAtual;
    }
    public function getVMax(){
        return $this->vMax;
    }
    public function getMsg(){
        return $this->msg;
    }

    //METODOS ESPECIFICOS
    public function acelerar($vel): void{

        if($this->getLigado()==true):
            
            if($this->getAtual() + $vel < $this->getVMax()):
                $this->setVAtual($this->getAtual() + $vel);
                $this->setMsg("Velocidade atual: ".$this->getAtual());

            else:
                $this->setVAtual($this->getVMax());
                $this->setMsg("O carro atingiu a velocidade máxima.");
            endif;
            
        else:
            $this->setMsg("O carro está desligado.");

        endif;
    }

    public function ligar(){
        $this->setLigado(true);
    }
}





 ?>