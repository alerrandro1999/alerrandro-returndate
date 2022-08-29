<?php

namespace Alerrandro\date\DatesTextual;

class ReturnDatesText
{
  
    public static function nomeDoMes()
    {
        $date = date('F');
        switch ($date) {
            case 'January':
                return 'Janeiro';
                break;
            case 'February':
                return 'Fevereiro';
                break;
            case 'March':
                return 'Março';
                break;
            case 'April':
                return 'Abril';
                break;
            case 'May':
                return 'Maio';
                break;
            case 'June':
                return 'Junho';
                break;
            case 'July':
                return 'Julho';
                break;
            case 'August':
                return 'Agosto';
                break;
            case 'September':
                return 'Setembro';
                break;
            case 'Octuber':
                return 'Outubro';
                break;
            case 'November':
                return 'Novembro';
                break;
            case 'December':
                return 'Dezembro';
                break;
        }
    }

    public static function nomeDoMesCurto()
    {
        $date = date('F');
        switch ($date) {
            case 'January':
                return 'Jan';
                break;
            case 'February':
                return 'Fev';
                break;
            case 'March':
                return 'Mar';
                break;
            case 'April':
                return 'Abr';
                break;
            case 'May':
                return 'Mai';
                break;
            case 'June':
                return 'Jun';
                break;
            case 'July':
                return 'Jul';
                break;
            case 'August':
                return 'Ago';
                break;
            case 'September':
                return 'Set';
                break;
            case 'Octuber':
                return 'Out';
                break;
            case 'November':
                return 'Nov';
                break;
            case 'December':
                return 'Dez';
                break;
        }
    }


    public static function nomeDiaDaSemana()
    {
        $date = date('l');
        switch ($date) {
            case 'Sunday':
                return 'Domingo';
                break;
            case 'Monday':
                return 'Segunda-Feira';
                break;
            case 'Tuesday':
                return 'Terça-Feira';
                break;
            case 'Wednesday':
                return 'Quarta-Feira';
                break;
            case 'Thursday':
                return 'quinta-Feira';
                break;
            case 'Friday':
                return 'Sexa-Feira';
                break;
            case 'Saturday':
                return 'Sábado';
                break;
        }
    }
}
