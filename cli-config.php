<?php
/**
 * Created by PhpStorm.
 * User: wangze
 * Date: 2017/5/16
 * Time: 13:41
 */
// cli-config.php
require_once "bootstrap.php";

return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);