<?php
namespace EsportsLolEnum;

use Eloquent\Enumeration\AbstractEnumeration;

class MatchesStatus extends AbstractEnumeration
{
    const UPCOMING  = 0;
    const RUNNING   = 1;
    const PAST      = 2;
    const EXCEPTION = 3;
}