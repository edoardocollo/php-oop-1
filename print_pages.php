<?php

 foreach ($legends as $legend) { ?>

   <section>
     <img src="<?php echo $legend -> img; ?>" alt="">
     <div class="lateral1 lateral">
       <div class="stripe">
         <div class="wrap">

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
         </div>

       </div>
     </div>
     <div class="central"></div>
     <div class="lateral2 lateral">
       <div class="stripe">

     </div>

   </section>


<?php  }
 ?>
