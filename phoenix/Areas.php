<?php
class Areas{
    public $nome;
    public $descricao;
    public $imagem;

public function ImprimirArea($b){
    echo $this->areas[$b]->imagem . "</br>"; ?>
    <h3> <?php echo $this->areas[$b]->nome . "</br>";        ?> </h3>
    <p>  <?php echo $this->areas[$b]->descricao . "</br> </br>";   ?> </p> 
    <?php
}


public function CriarAreas(){
    $seguranca = new Areas();
    $seguranca-> nome = "Segurança da Informação";
    $seguranca -> descricao = "Consiste em assegurar que os dados estejam acessíveis somente aos seus
    responsáveis de direito ou as pessoas às quais foram enviados. Ou seja, o
    profissional é responsável por estabelecer confidencialidade e integridade das
    informações.";
    $seguranca -> imagem = '<img class="img_area" src="imgs\seg_info.svg">';

    $administracao = new Areas();
    $administracao-> nome = "Administração de Redes";
    $administracao -> descricao = "Profissionais responsáveis por gerenciar redes e elaborar projetos das mesmas,
    administrar endereços IP e domínios, configurar e validar roteadores de acesso à
    internet, além de buscar sempre otimização dos recursos computacionais.";
    $administracao -> imagem = '<img class="img_area" src="imgs\admin_rede.svg">';

    $dados = new Areas();
    $dados-> nome = "Programação";
    $dados-> descricao = "Através de linguagens de programação, os programadores irão criar, desenvolver e
    inovar diversos tipos de softwares, podendo ir de websites ou até mesmo a criação
    de sistemas operacionais mais complexos. É uma das profissões melhor avaliadas
    para um Técnico em Informática.";
    $dados -> imagem = '<img class="img_area" src="imgs\eng_dado.svg">';

    $tecnico = new Areas();
    $tecnico-> nome = "Suporte Técnico";
    $tecnico-> descricao = "Basicamente, são pessoas aptas para oferecer suporte das diversas configurações
    de um dispositivo, principalmente a parte voltada para hardwares. Acompanhar
    recursos técnicos da máquina e realizar testes de funcionamento também é uma
    das suas funções.";
    $tecnico -> imagem = '<img class="img_area" src="imgs\sup_tecn.svg">';

    $this->areas[0] = $seguranca;
    $this->areas[1] = $administracao;
    $this->areas[2] = $dados;
    $this->areas[3] = $tecnico;

}
}
?>