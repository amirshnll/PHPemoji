<?php

require("PHPemoji.php");

$emoji = new PHPemoji();

echo "Hello ", $emoji->fire;

$github = $emoji->github;
echo "I love " . $github;

echo $emoji->parse("Hello World :SmileOutlined:");
$emoji->println("I Have Two :Eye: s");
$emoji->print("PHP is :HeartOutlined:");