<?php

namespace Alerrandro\date\DatesTextual;

class ReturnDatesText
{
  
    public static function returnNameMounth()
    {
        $date = date('F');
        switch ($date) {
            case 'January':
                echo 'Janeiro';
                break;
            case 'February':
                echo 'Fevereiro';
                break;
            case 'March':
                echo 'Março';
                break;
            case 'April':
                echo 'Abril';
                break;
            case 'May':
                echo 'Maio';
                break;
            case 'June':
                echo 'Junho';
                break;
            case 'July':
                echo 'Julho';
                break;
            case 'August':
                echo 'Agosto';
                break;
            case 'September':
                echo 'Setembro';
                break;
            case 'Octuber':
                echo 'Outubro';
                break;
            case 'November':
                echo 'Novembro';
                break;
            case 'December':
                echo 'Dezembro';
                break;
        }
    }
}
