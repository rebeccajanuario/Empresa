
<?php

class Funcionario{

    private $nome;
    private $cidade;
    private $salarioHora;
    private $horasTrabalho;
    private $salarioFinal;

    public function setNome($nome){
        $this->nome=$nome;
    }
    public function getNome(){
        return $this-> nome;
    }
    public function setCidade($cidade){
        $this->cidade=$cidade;
    }
    public function getCidade(){
        return $this-> cidade;
    }
    public function setSalarioHora($salarioHora){
        $this->salarioHora=$salarioHora;
    }
    public function getSalarioHora(){
        return $this-> salarioHora;
    }
    public function setHoraTrabalho($horasTrabalho){
        $this->horasTrabalho=$horasTrabalho;
    }
    public function getHoraTrabalho(){
        return $this-> horasTrabalho;
    }
    public function setSalarioFinal($salarioFinal){
        $this->salarioFinal=$salarioFinal;
    }
    public function getSalarioFinal(){
        return $this-> salarioFinal;
    }

    public function calcularSalario(){
        $salarioFinal = ($this->horasTrabalho * $this->salarioHora)*30;
        return $salarioFinal;
    }

    public function mostraDados(){
        echo "Nome: " .$this->nome ."Cidade: " .$this->cidade ."Salário por hora: ".$this->salarioHora ."Horas trabalhadas: " .$this->horasTrabalho ."Salario final:" .$this->salarioFinal ;
    }
    public function darAumento($aumento){
        $salarioFinal = $aumento + $this->salarioFinal;
        return $salarioFinal;
    }
    


}

?>