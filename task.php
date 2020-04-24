<?php
$kalimat_tmp = "saya pergi ke mall ciputra hari minggu";
$kalimat = str_split($kalimat_tmp);
//var_dump($kalimat);
$substr_tmp = "mall";
$substr = str_split($substr_tmp);

$hsl = "";
$jml_substr = count($substr);
$jml_kalimat = count($kalimat);
$hsl_tmp = "";
$hsl = "";
$nilai = 0;
for ($i=0;$i<$jml_kalimat;$i++)
{
   $hsl_tmp .= $kalimat[$i];
   $nilai = $i - $jml_substr;

   if ($nilai > $jml_substr) 
   {
        for($k=$nilai;$k<($nilai+$jml_substr);$k++)
        {
          $hsl .= $kalimat[$k];
        }
        
        
        if ($hsl == $substr_tmp)
        {
           //echo "sama";
           $idx = $nilai;
        }
        $hsl = "";
        
   }
}
echo $idx;
?>
