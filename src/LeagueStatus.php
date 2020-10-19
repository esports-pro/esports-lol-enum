<?php

namespace EsportsLolEnum;

class LeagueStatus extends AbstractEnum
{
    const ALL = 'null';
    const UPCOMING  = 0;
    const RUNNING   = 1;
    const PAST      = 2;
    const LATELY    = 3;
}