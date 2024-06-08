<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>LOOP-CONDITIONAL</title>
   <style>
      * {
         font-family: 'Anonymous Pro', monospace;
      }
      body {
         height: 100vh;
         display: flex;
         align-items: center;
         justify-content: center;
      }
      div {
         margin: 5px;
         padding: 10px;
         border: 1px solid gray;
         border-radius: 10px;
         text-align: center;
      }
   </style>
</head>

<body>
   <div class="contA">
      <?php
      //$nilai = readline("Nilai Mahasiswa: ");
      $nilai = 54.5666;
      $pernyataan = "Nilai <strong>$nilai</strong> berada pada grade <strong>";
   /*
      SAMPEL KONDISIONAL:
      if($nilai >= 60){
         echo "Nilai Anda $nilai, Anda LULUS";
      } else {
         echo "Nilai Anda $nilai, Anda GAGAL";
      }
   */
      switch ($nilai) {
         case $nilai >= 80.00:
            echo "$pernyataan A";
            break;

         case $nilai >= 76.25 && $nilai < 80.00:
            echo "$pernyataan A-";
            break;

         case $nilai >= 68.75 && $nilai < 76.25:
            echo "$pernyataan B+";
            break;

         case $nilai >= 65.00 && $nilai < 68.75:
            echo "$pernyataan B";
            break;

         case $nilai >= 62.50 && $nilai < 65.00:
            echo "$pernyataan B-";
            break;

         case $nilai >= 57.50 && $nilai < 62.50:
            echo "$pernyataan C+";
            break;

         case $nilai >= 55.00 && $nilai < 57.50:
            echo "$pernyataan C";
            break;

         case $nilai >= 51.25 && $nilai < 55.00:
            echo "$pernyataan C-";
            break;

         case $nilai >= 43.75 && $nilai < 51.25:
            echo "$pernyataan D+";
            break;

         case $nilai >= 40.00 && $nilai < 43.75:
            echo "$pernyataan D";
            break;

         case $nilai >= 0.00 && $nilai < 40.00:
            echo "$pernyataan E";
            break;

         default:
            echo "Inputan nilai tidak Valid!";
            break;
      }
      ?>
   </div>
   <div class="contB">
      <?php
      $baris = 0;
      $i = 0;
      $j = 0;

      // $tinggi = readline("Tinggi Baris Segitiga: ");
      $tinggi = 5;
      echo "<br>Bentuk Segitiga dengan $tinggi baris:\n";
      for ($baris = 0; $baris <= $tinggi; $baris++) {
         for ($i = 0; $i < $tinggi - $baris; $i++) {
            // echo "&nbsp";
            echo " ";
         }
         for ($j = 1; $j < 2 * $baris; $j++) {
            echo "*";
         }
         echo "<br>";
      }
      ?>
   </div>
   <!-- Jelasin div nyelip disini -->
</body>

</html>