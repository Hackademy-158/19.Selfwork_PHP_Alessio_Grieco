<?php 


$sum = 0;

    for ($i = 1; $i <= 100; $i++) {
        
        // Se il numero è multiplo di 3
        if ($i % 3 === 0 && $i % 5 !== 0) {
            echo "PHP\n";
        }
    
        // Se il numero è multiplo di 5
        if ($i % 5 === 0 && $i % 3 !== 0) {
            echo "JAVASCRIPT\n";
        }

        // Se il numero è multiplo sia di 3 che di 5 
        if ($i % 3 === 0 && $i % 5 === 0) {
        echo "HACKADEMY\n";
        }
    
        // Altrimenti, stampo il numero nel ciclo dei 100
        if ($i % 3 !== 0 && $i % 5 !== 0) {
            echo $i . "\n";
        }
    }    

echo "La somma dei numeri da 1 a 100 è: " . $sum;

?>