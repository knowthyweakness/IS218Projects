<?php
/**
 * Created by PhpStorm.
 * User: thoss
 * Date: 2/14/2019
 * Time: 11:59 AM
 */
final class Volvo extends Car {
    public function accelerate() :int
    {
        return 1;
    }
    public function decelerate() :int
    {
        return -1;
    }
}