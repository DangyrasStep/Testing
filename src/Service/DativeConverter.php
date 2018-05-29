<?php
/**
 * Created by PhpStorm.
 * User: dangis
 * Date: 18.5.17
 * Time: 17.05
 */

namespace App\Service;


class DativeConverter
{
    public function convert($name)
    {
        if (mb_substr($name, -2) === "us") {
            return mb_substr($name, 0, -2) . "iui";
        }

        if (mb_substr($name, -3) === "tis") {
            return mb_substr($name, 0, -3) . "ciui";
        }

        if (mb_substr($name, -2) === "is") {
            return mb_substr($name, 0, -2) . "iui";
        }
        return $name;
    }
}