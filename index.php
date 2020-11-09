<?php

$presentTime = '2015-10-21 16:06' ;
$destinationTime ='2015-10-21 16:29';

$date1 = new DateTime($presentTime);
$date2 = new DateTime($destinationTime);
$diff = $date1->diff($date2);
?>
<div>
    <p> PRESENT TIME</p>
    <?php
    echo $date1->format("F, j, Y, g:i a"); ?><br><?php
    ?>
    <p>DESTINATION TIME</p>
    <?php
    echo $date2->format("F j, Y, g:i a");
    ?>
    <p> resultat</p>
    <?php
    echo 'il y a '.$diff->y.' année '.$diff->m.' mois '.$diff->days . ' jours '.$diff->h.' heures ' .$diff->i
        . 'minutes et '.$diff->s. 'seconde difference';
    ?>


</div>