<title>Free Paster (Open source) | Creating...</title>
<?php
$text = $_POST['paste'];
echo "Get text...";
$band = chr(mt_rand(97, 122));
for($i = 0; $i < 10; $i++){
  $band .= chr(mt_rand(97, 122));
}
$filename = $band.".txt";
if (file_exists($filename)) {
  echo '<br><font color="red">An error has occurred Forcibly reload even if a warning from the browser occurs.</font>';
  exit;
} else {
    echo "<br>Set url band: ".$band;
  file_put_contents($filename, $text);
  echo "<br>Success!";
  echo '<meta http-equiv="refresh" content="0;URL=/'.$filename.'">';
}
?>