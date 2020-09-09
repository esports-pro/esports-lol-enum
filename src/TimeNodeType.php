<?php
namespace EsportsLolEnum;

use Eloquent\Enumeration\AbstractEnumeration;

class TimeNodeType extends AbstractEnumeration
{
    const MONTH_1  = 1; //一个月
    const MONTH_6  = 2; //半年
    const MONTH_12 = 3; //一年
}