<?php
/**
 * Created by PhpStorm.
 * User: sung@esports-pro.com
 * Date: 2020/9/23
 * Time: 14:08
 */

namespace EsportsLolEnum;


use Eloquent\Enumeration\AbstractEnumeration;

abstract class AbstractEnum extends AbstractEnumeration
{
    public static function getValueByKey($key,$default = 0)
    {
        $key = strtoupper($key);
        $ret = self::memberByWithDefault('key',$key,null);
        if($ret !== null) {
            return $ret->value();
        } else {
            return $default;
        }
    }
}