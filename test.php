<?php

require("PHPemoji.php");

$emoji = new PHPemoji();

echo "Hello %v\n", $emoji->fire;

$github = $emoji->github;
echo "I love %v\n" . $github;

echo $emoji->parse("Hello World :SmileOutlined:");
$emoji->println("I Have Two :Eye: s");
$emoji->print("PHP is :HeartOutlined:\n");