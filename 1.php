<?php
$products=array(
  array('kode'=>'br001','nama'=>'oppo'),
  array('kode'=>'br002','nama'=>'nokia'),
  array('kode'=>'br003','nama'=>'vivo')
);
echo "<pre>";
echo print_r($products);
echo "</pre>";

if(array_key_exists ('nama',$products[0])) echo "ada";
//echo $products[1]['nama'];

?>