<?php


use Morilog\Jalali\Jalalian;

function jalaliDate($date, $format = '%A, %d %B %Y')
{
    return Jalalian::forge($date)->format($format);
}

function convertToGregorianDate($date)
{
    if ($date == null) {
        return null;
    }

    return Verta::parse($date)->datetime();

}
