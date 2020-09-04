<?php

namespace EsportsLolEnum;

use Eloquent\Enumeration\AbstractEnumeration;

class Event extends AbstractEnumeration
{
    const PLAYER = 1;
    const DRAKE  = 2;
    const BARON_NASHOR = 3;
    const RIFT_HERALD  = 4;
    const TOWER = 5;
    const INHIBITOR = 6;
}