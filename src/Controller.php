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
 * Time: 1:39
 */

namespace App;


class Controller
{
    public static function createView(): View
    {
        $method = Request::getRequestMethod();
        $model = new Model();
        return $model->findByRoute($method);
    }
}