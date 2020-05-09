<?php
/**
 * Copyright (c)
 * http://maxsuccess.ru/
 * https://vk.com/maxkyivua
 * https://www.facebook.com/the.web.lessons/
 * Кодируй так, как будто человек,
 * поддерживающий твой код, - буйный психопат,
 * знающий, где ты живешь.
 * User: Max
 * Date: 09.05.2020
 * Time: 1:17
 */

namespace App;


class Request
{
    public static function getRequestMethod()
    {
        if($_SERVER['REQUEST_METHOD'] === 'GET')
            return $_GET;
        elseif ($_SERVER['REQUEST_METHOD'] === 'POST')
            return $_POST;
        else
            throw new \RuntimeException('Другие методы, я не жду!');
    }
}