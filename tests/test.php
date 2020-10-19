<?php
/**
 * Created by PhpStorm.
 * User: sung@esports-pro.com
 * Date: 2020/10/19
 * Time: 13:25
 */
require '../vendor/autoload.php';

use EsportsLolEnum\PlayerRole;

$ret = PlayerRole::getKeyList();
var_dump($ret);