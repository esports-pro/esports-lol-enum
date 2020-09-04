<?php

use Eloquent\Enumeration\AbstractEnumeration;

class LeagueStatus extends AbstractEnumeration
{
    const UPCOMING  = 0;
    const RUNNING   = 1;
    const PAST      = 2;
    const LATELY    = 3;
}