<?php 
    $paragraph= 'Ciao sono un paragrafo. Ciao sono sempre lo stesso paragrafo di prima. Ciao!';
?>

<h1> Php exercise </h1>

<ul>
    <li>
        <h3> Messaggio:</h3>
        <p> <?php echo $paragraph; ?> </p>
    </li>

    <li>
        <h3> Lunghezza del messaggio:</h3>
        <p> 
            <?php 
                $paragraph_length= strlen($paragraph); 
                echo 'La lunghezza del paragrafo è di ' . $paragraph_length . ' caratteri';
            ?>
         </p>
    </li>
    <li>
        <h3> Paragrafo censurato:</h3>
        <p>
            <?php 
                $censored_paragraph= str_replace($_GET['censored'] , '***' , $paragraph);
                echo $censored_paragraph . ' Lunghezza paragrafo censurato: ' . strlen($censored_paragraph) . ' caratteri'
            ?>
        </p>
    </li>
</ul>