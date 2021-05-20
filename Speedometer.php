<?php
Class Speedometer
{
    public const COEF = 1.609;

    public static function convertKmToMiles(int $dist): float
    {
    return round($dist / self::COEF,2);
    }

    public static function convertMilesToKm(int $dist): float
    {
    return round($dist * self::COEF, 2);
    }
}