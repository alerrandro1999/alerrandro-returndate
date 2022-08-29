<?php

namespace Alerrandro\date\DatesNumber;

class ReturnDatesNumber
{
    public static function ano()
    {
        return date('Y');
    }

    public static function mes()
    {
        return date('m');
    }

    public static function dia()
    {
        return date('d');
    }

    public static function data()
    {
        return date('d/m/Y');
    }
}