<?php

namespace Alerrandro\date\DatesNumber;

class ReturnDatesNumber
{
    public static function returnYear()
    {
        return date('Y');
    }

    public static function returnMounth()
    {
        return date('m');
    }

    public static function returnDay()
    {
        return date('d');
    }

    public static function returnDate()
    {
        return date('d/m/Y');
    }
}