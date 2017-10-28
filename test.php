<?php

require __DIR__ . '/vendor/autoload.php';

$adder = new Storyg\Simple\Adder();
$result = $adder->add(1,2);

if($result == 3){
	print("성공\n");
} else {
	print("실패");
}