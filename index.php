<?php




class Legend {
  public $nome;
  public $costruttore;
  public $tipo;
  public $produzione;
  public $lunghezza;
  public $larghezza;
  public $altezza;
  public $passo;
  public $massa;
  public $cilindrata;
  public $cavalli;
  public $trazione;
  public $img;


  function __construct($nome,$costruttore,$tipo,$produzione,$lunghezza,$larghezza,$altezza,$passo,$massa,$cilindrata,$cavalli,$trazione,$img){
  $this -> nome = $nome;
  $this -> costruttore = $costruttore;
  $this -> tipo = $tipo;
  $this -> produzione = $produzione;
  $this -> lunghezza = $lunghezza;
  $this -> larghezza = $larghezza;
  $this -> altezza = $altezza;
  $this -> passo = $passo;
  $this -> massa = $massa;
  $this -> cilindrata = $cilindrata;
  $this -> cavalli = $cavalli;
  $this -> trazione = $trazione;
  $this -> img = $img;
  }


};

$r5 = new Legend('Renault 5 Maxi Turbo','Renault','Berlinetta','1980 - 1985',3664,1752,1323,2430,970,1527,350,'posteriore','https://img2.stcrm.it/images/17645894/1200x1200/45591172-2318186701585715-8695533642941726720-o.jpg');
$clioWilliams = new Legend('Clio 2.0i Williams','Renault','Berlina','1990 - 1998',3716,1641,1395,2470,1025,2000,147,'anteriore','https://i.ytimg.com/vi/1chymsg01pc/maxresdefault.jpg');
$abarth131 =  new Legend('Fiat 131 Abarth Rally','Fiat','Berlina','1974 - 1985',4190,1720,1360,2490,980,2000,147,'posteriore','https://i.pinimg.com/originals/d6/2f/ac/d62fac8045464c93838622ff02dafb34.png');
$delta =  new Legend('Lancia Delta HF Integrale Evoluzione','Lancia','Berlina 2 volumi','1988 - 1993',3895,1770,1380,2475,1200,2000,210,'integrale','https://img.redbull.com/images/c_fill,g_auto,w_1500,h_1000/q_auto,f_auto/redbullcom/2015/12/07/1331763890022_2/il-finlandese-juha-kankkunen-con-la-lancia-delta');
$legends = [

  $r5,
  $abarth131,
  $delta,
  $clioWilliams
];
// var_dump($legends);

 ?>



 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>php-oop-1</title>
     <style media="screen">
     section {
       display: flex;
       flex-direction: column;
       align-items: center;
       padding-bottom: 40px;
     }
     img {
       height: 400px;
     }
     h1 {
       text-align: center;
     }
     </style>
   </head>
   <body>

     <h1>Alternative ai veicoli elettrici:</h1>
     <?php

      foreach ($legends as $legend) { ?>

        <section>
          <img src="<?php echo $legend -> img; ?>" alt="">
          <h2><?php echo $legend -> nome; ?></h2>
          <span> <strong>Costruttore: </strong> <?php echo $legend -> costruttore; ?></span>
          <span> <strong>Tipo: </strong> <?php echo $legend -> tipo; ?></span>
          <span> <strong>Anni di produzione: </strong> <?php echo $legend -> produzione; ?></span>
          <span> <strong>Lunghezza: </strong> <?php echo $legend -> lunghezza; ?></span>
          <span> <strong>Larghezza: </strong> <?php echo $legend -> larghezza; ?></span>
          <span> <strong>Altezza: </strong> <?php echo $legend -> altezza; ?></span>
          <span> <strong>Passo: </strong> <?php echo $legend -> passo; ?></span>
          <span> <strong>Massa: </strong> <?php echo $legend -> massa; ?></span>
          <span> <strong>Cilindrata: </strong> <?php echo $legend -> cilindrata; ?></span>
          <span> <strong>Cavalli: </strong> <?php echo $legend -> cavalli; ?></span>
          <span> <strong>Trazione: </strong> <?php echo $legend -> trazione; ?></span>

        </section>


    <?php  }
      ?>


   </body>
 </html>
