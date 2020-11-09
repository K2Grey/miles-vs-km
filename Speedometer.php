<?php


class Speedometer
{
    private const COEFFICIENT_KM_MILE = 0.6214;

    public static function convertKmToMiles($distance)
    {
        return round($distance * self::COEFFICIENT_KM_MILE, 2);
    }

    public static function convertMilesToKm($distance)
    {
        return round($distance / self::COEFFICIENT_KM_MILE, 2);
    }
}