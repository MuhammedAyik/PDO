<?php
for ($i = 0; $i <= 50; $i++) {
   echo $i . " ";
   }

   echo "<br>";

    $klasnamen = array("mehmet", "omer", "burak", "erencan", "jaber", "paul", "vinu", "ghor", "levinio", "daniel",);
    foreach ($klasnamen as $klasnamen) {
    echo $klasnamen . "<br>";
    }


    $maanden = ['Januari', 'Februari', 'Maart', 'April', 'Mei', 'Juni', 'Juli', 'Augustus', 'September', 'Oktober', 'November', 'December'];

    $i = 1;
    foreach ($maanden as $maanden) {
    echo "Maand " . $i . " is " . $maanden . "<br>";
    $i++;
}
?>
