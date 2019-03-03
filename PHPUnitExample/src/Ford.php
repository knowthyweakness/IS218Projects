<?php
/**
 * Created by PhpStorm.
 * User: thoss
 * Date: 3/3/2019
 * Time: 5:31 PM
 */
final class Ford extends Car {
    public function accelerate() :int
    {
        return 2;
    }
    public function decelerate() :int
    {
        return -2;
    }
}