<?php
namespace EsportsLolEnum;

class PlayerRole extends AbstractEnum
{
    const TOP = 1;
    const JUN = 2;
    const MID = 3;
    const ADC = 4;
    const SUP = 5;


    public static function getRoleNameByRiotRoleName($roleName)
    {
        switch ($roleName)
        {
            case 'jungle':
                return self::JUN()->key();
            case 'bottom':
                return self::ADC()->key();
            case 'support':
                return self::SUP()->key();
            case 'mid':
                return self::MID()->key();
            case 'top':
                return self::TOP()->key();
            default:
                throw new \Exception("`{$roleName}`role name not found");
        }
    }

}