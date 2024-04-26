<?php

class Produto
{

    public $produto;       //str: nome do produto
    public $anunciante;    //str: nick do anunciante
    public $descr;         //str: descrição do produto feito pelo anunciante
    public $id;            //str: um codigo hash identificador unico daquele produto
    public $img;           //str: local onde está armazenado a img do produto
    public $interesse;     //boolean: se o produto foi favoritado pelo usuário.

    public function __construct($produto, $anunciante, $descr, $img, $interesse)
    {
        $this->produto = $produto;
        $this->anunciante = $anunciante;
        $this->descr = $descr;
        $this->img = $img;
        $this->interesse = $interesse;

        $this->id = $this->geraId();
    }

    public function getProduto()
    {
        return $this->produto;
    }
    public function getAnunciante()
    {
        return $this->anunciante;
    }
    public function getDescr()
    {
        return $this->descr;
    }
    public function getImg()
    {
        return $this->img;
    }
    public function getInteresse()
    {
        return $this->interesse;
    }

    //gera um codigo hash unico para o produto
    private function geraId()
    {

        // Concatenando o nick do anunciante e o nome do produto
        $textoParaHash = $this->anunciante . "_" . $this->produto;

        // Calculando o hash MD5 do texto concatenado
        $hashMd5 = md5($textoParaHash);

        // Retornando o hash MD5 como ID do produto
        return $hashMd5;
    }
}

$vProdutos = [
    new Produto("Tênis de Corrida",'FitLife123',"Tênis de corrida leve e respirável, ideal para treinos diários.","../img/produtos/tenis1.jpg", false),
    new Produto("Câmera DSLR",'ClickMaster',"Câmera DSLR profissional com sensor de alta resolução e lentes intercambiáveis.","../img/produtos/camera1.jpg", false),
    new Produto("Notebook Ultrafino",'TechGeek21',"Notebook ultrafino com processador rápido e tela de alta definição.","../img/produtos/notebook1.jpg", false),
    new Produto("Fones de Ouvido Bluetooth","MusicaManiac","Fones de ouvido sem fio com cancelamento de ruído e bateria de longa duração.","../img/produtos/fones1.jpg", false),
    new Produto("Camisa Polo Estampada","StyleTrend","Camisa polo elegante com estampa moderna e tecido confortável.","../img/produtos/camisa1.jpg", false),
    new Produto("Óculos de Sol Esportivo","SunRunners","Óculos de sol esportivo com proteção UV e design aerodinâmico.","../img/produtos/oculos1.jpg", false),
    new Produto("Guitarra Elétrica RockStar","GuitarGuru55","Guitarra elétrica de alta qualidade com captadores potentes e acabamento durável.","../img/produtos/guitarra1.jpg", false)
];


$vProdutosMeu = [
    new Produto("Máquina de Lavar Roupa",'Diozao',"Máquina de lavar roupa com capacidade extra e programas de lavagem personalizados.","../img/produtos/maquinalava1.jpg", false),
    new Produto("Escova Elétrica de Dentes",'Diozao',"Escova elétrica de dentes com temporizador e várias configurações de escovação.","../img/produtos/escova1.jpg", false),
    new Produto("Panela Elétrica de Arroz",'Diozao',"Panela elétrica de arroz com função de aquecimento automático e capacidade para até 6 xícaras.","../img/produtos/panela1.jpg", false),
    new Produto("Impressora Multifuncional",'Diozao',"Impressora multifuncional com conexão sem fio e alimentador automático de documentos.","../img/produtos/impressora1.jpg", false),
];