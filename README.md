# PHPemoji
![emoji library for PHP](https://raw.githubusercontent.com/amirshnll/PHPemoji/main/phpemoji.png)

emoji library for PHP

<br />

## Install
```composer require amirshnll/php-pemoji```

<br />

## Usage
### code
```
require("PHPemoji.php");
$emoji = new PHPemoji();

echo "Hello World", $emoji->fire;

$github = $emoji->github;
echo "I love " . $github;

echo $emoji->parse("Hello World :SmileOutlined:");
$emoji->println("I Have Two :Eye: s");
$emoji->print("PHP is :HeartOutlined:\n");
```
### output
Hello World :fire: <br />
I love :github: <br />
Hello World :smiley: <br />
I Have Two :eye: s <br />
PHP is :hearts:

<br />

## Contributing
edit `PHPemoji.php` file.

<br />

## Credits
`PHPemoji` was originally inspired by [sami2020pro/gmoji](https://github.com/sami2020pro/gmoji) with a goal of being make emoji library PHP.

<br />

## License
MIT
