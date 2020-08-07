<?php
$num1 = strip_tags($_POST['num1']);
$num2 = strip_tags($_POST['num2']);
$number_start = $num1; $number_end = $num2;
$text1 = "0";
$text2 = "00";

?>


<?php for($number = $number_start; $number <= $number_end; $number++){ ?>
<span class="so">
    <span class="so-item"><?php if($number < 10){echo $text2 . $number;}  else {echo $number;} ?></span>
</span>
<?php } ?>