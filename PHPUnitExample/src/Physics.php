<?php
/**
 * Created by PhpStorm.
 * User: thoss
 * Date: 3/3/2019
 * Time: 5:32 PM
 */class Physics
{
    public static function acceleration($force, $mass) : float
    {
        $acceleration = $force * $mass;
        return $acceleration;
    }
}