<?php

class Funcionario{
    //atributos
    private $nome;
    private $cidade;
    private $salHora;
    private $horasTrab;
    private $salarioFinal;

    //gets e sets
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getNome(){
        return $this-> nome;
    }
    public function setCidade($cidade){
        $this->cidade = $cidade;
    }
    public function getCidade(){
        return $this-> cidade;
    }
    public function setSalHora($salHora){
        $this->salHora = $salHora;
    }
    public function getSalHora(){
        return $this-> salHora;
    }
    public function setHorasTrab($horasTrab){
        $this->horasTrab = $horasTrab;
    }
    public function getHorasTrab(){
        return $this-> horasTrab;
    }
    public function setSalariFinal($salarioFinal){
        $this->salarioFinal = $salarioFinal;
    }
    public function getSalarioFinal(){
        return $this-> salarioFinal;
    }
    //funções
    public function calcularSalario(){
        $salarioFinal = ($this->horasTrab * $this->salHoras) * 30;
        return $salarioFinal;
    }
    public function mostrarDados(){
        echo "Nome: " .$this->nome. " Cidade: " .$this->cidade. " Salário por hora: " .$this->salHora. " Horas trabalhadas: " .$this->horasTrab. " Salário final: " .$this->salarioFinal;
    }
    public function darAumento($aumento){
        $salarioFinal = $aumento + $this->salarioFinal;
        return $salarioFinal;
    }

}


?>