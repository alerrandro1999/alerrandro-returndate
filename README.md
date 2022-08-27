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

use Alerrandro\date\DatesNumber\ReturnDatesNumber;

use Alerrandro\date\DatesTextual\ReturnDatesText;

// retora o ano (2022)
$year = ReturnDatesNumber::returnYear();
// retorna o més (01)
$mounth = ReturnDatesNumber::returnMounth();
// retorna o dia (01)
$day = ReturnDatesNumber::returnDay();
// retorna a data por extenso (00/00/0000)
$date = ReturnDatesNumber::returnDate();
// retorna o nome do més (Janeiro)
$nameMounth = ReturnDatesText::returnNameMounth();



```

