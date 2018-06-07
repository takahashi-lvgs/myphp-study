<?php
/**
 * Created by PhpStorm.
 * User: kazuyuki.takahashi
 * Date: 2018/06/07
 * Time: 21:02
*/

$my_pow = function($times = 2)
{
    return function ($v) use (&$times)
    {
        return pow($v, $times);
    };
};

$cube = $my_pow(3);

echo $cube(3);

