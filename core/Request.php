<?php
/**
 * Created by PhpStorm.
 * User: sergeev
 * Date: 20.02.2021
 * Time: 15:08
 */

namespace app\core;


class Request
{
    /**
     *
     */
    public function getPath()
    {
        $path = $_SERVER['REQUEST_URI'] ?? '/';
        $position = strpos($path, '?');
        echo '<pre>';
        var_dump($position);
        echo '</pre>';
        exit();
    }

    /**
     *
     */
    public function getMethod()
    {

    }
}