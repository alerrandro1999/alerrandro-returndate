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

    public static function returnNameMounthShort()
    {
        $date = date('F');
        switch ($date) {
            case 'January':
                echo 'Jan';
                break;
            case 'February':
                echo 'Fev';
                break;
            case 'March':
                echo 'Mar';
                break;
            case 'April':
                echo 'Abr';
                break;
            case 'May':
                echo 'Mai';
                break;
            case 'June':
                echo 'Jun';
                break;
            case 'July':
                echo 'Jul';
                break;
            case 'August':
                echo 'Ago';
                break;
            case 'September':
                echo 'Set';
                break;
            case 'Octuber':
                echo 'Out';
                break;
            case 'November':
                echo 'Nov';
                break;
            case 'December':
                echo 'Dez';
                break;
        }
    }


    public static function returnNameDayWeek()
    {
        $date = date('l');
        switch ($date) {
            case 'Sunday':
                echo 'Domingo';
                break;
            case 'Monday':
                echo 'Segunda-Feira';
                break;
            case 'Tuesday':
                echo 'Terça-Feira';
                break;
            case 'Wednesday':
                echo 'Quarta-Feira';
                break;
            case 'Thursday':
                echo 'quinta-Feira';
                break;
            case 'Friday':
                echo 'Sexa-Feira';
                break;
            case 'Saturday':
                echo 'Sábado';
                break;
        }
    }
}
