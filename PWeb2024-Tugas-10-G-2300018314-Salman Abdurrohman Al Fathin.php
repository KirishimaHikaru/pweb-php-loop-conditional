<?php
   $nilai = 50;
   if ($nilai >= 60) {
      echo "Nilai Anda $nilai, Anda LULUS";
   } else {
      echo "Nilai Anda $nilai, Anda GAGAL";
   }
?>

<?php
   $tinggi = 5;
   for ($baris = 0; $baris <= $tinggi; $baris++) {
      for ($i = 0; $i < $tinggi - $baris; $i++) {
         echo " ";
      }
      for ($j = 1; $j < 2 * $baris; $j++) {
         echo "*";
      }
      echo "\n";
   }
?>
      