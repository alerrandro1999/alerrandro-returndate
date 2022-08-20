# PHP Dates

Simples pacote para retornar datas para uso no Brasil.

## Requisitos 

- PHP >= 7.0
- Composer

## Instalação
Instale o pacote utilizando **Composer**
> composer require alerrandro/returndate


## Utilização

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use Alerrandro\date\ReturnDates;

$year = ReturnDates::returnYear();

$mounth = ReturnDates::returnMounth();

$day = ReturnDates::returnDay();


echo $year;

echo $mounth;

echo $day;

```

