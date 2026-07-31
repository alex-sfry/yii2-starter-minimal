<?php

use Symfony\Component\VarDumper\VarDumper;
use yii\helpers\Html;

/**
 * Html::encode() wrapper
 * @param string $val
 * @param bool $doubleEncode
 * @return string
 */
function e($val, $doubleEncode = true)
{
    return Html::encode($val, $doubleEncode);
}

/**
 * Dump&Die - VarDumper::dump() wrapper
 * @param mixed $var
 * @return void
 */
function d($var)
{
    VarDumper::dump($var);
    die();
}

/**
 * VarDumper::dump() wrapper
 * @param mixed $var
 * @return void
 */
function du($var)
{
    VarDumper::dump($var);
}
