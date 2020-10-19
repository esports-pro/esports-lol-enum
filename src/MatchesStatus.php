<?php
namespace EsportsLolEnum;

class MatchesStatus extends AbstractEnum
{
    const ALL       = 'all';
    const UPCOMING  = 0;
    const RUNNING   = 1;
    const PAST      = 2;
    const EXCEPTION = 3;
}