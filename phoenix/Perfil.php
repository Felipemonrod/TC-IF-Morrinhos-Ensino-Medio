<?php
class Perfil{
    public $capacidade;

public function ImprimirCapacidades($c){
    echo $this->perfil[$c]->capacidade . "</br>"; 
}


public function CriarCapacidades(){
    $cap1 = new Perfil();
    $cap1-> capacidade = "impulsionar o desenvolvimento econômico da região, integrando a formação técnica
    ao pleno exercício da cidadania";

    $cap2 = new Perfil();
    $cap2-> capacidade = "aplicar os conhecimentos científicos e tecnológicos construídos, reconstruídos e
    acumulados historicamente";

    $cap3 = new Perfil();
    $cap3-> capacidade = "ter senso crítico";

    $cap4 = new Perfil();
    $cap4-> capacidade = "processar as informações";

    $cap5 = new Perfil();
    $cap5-> capacidade = "atuar na elaboração e execução de projetos e sistemas de redes locais de
    computadores";

    $cap6 = new Perfil();
    $cap6-> capacidade = "atuar no desenvolvimento e na instalação e manutenção de computadores";

    $cap7 = new Perfil();
    $cap7-> capacidade = "abstraídas de uma massa incontável e crescente de dados";

    $cap8 = new Perfil();
    $cap8-> capacidade = "atuar na elaboração e desenvolvimento de web sites";


    $this->perfil[0] = $cap1;
    $this->perfil[1] = $cap2;
    $this->perfil[2] = $cap3;
    $this->perfil[3] = $cap4;
    $this->perfil[4] = $cap5;
    $this->perfil[5] = $cap6;
    $this->perfil[6] = $cap7;
    $this->perfil[7] = $cap8;

}
}
?>