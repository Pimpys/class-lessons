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
 * Time: 1:38
 */

namespace App;


class Model
{
    public function findByRoute($method): View
    {
        if ($method === $_GET){
            $route = strtolower(strip_tags(trim($_GET['route'] ?? null)));
//            $file = $route . '.php';
//            if (empty($route)){
//                $title = 'Добро пожаловать!';
//                $content = 'content.php';
//            }elseif (file_exists($file)){
//                $title = 'Добро пожаловать!';
//                $content = $file;
//            }else{
//                $content = '404.php';
//                $title = 'Страница не найдена!';
//            }
            switch($route){
                case null:
                    $title = 'Добро пожаловать!';
                    $content = 'content.php';
                    break;
                case 'about':
                    $title = 'О сайте';
                    $content = 'about.php';
                    break;
                case 'contact':
                    $title = 'Контакты';
                    $content = 'contact.php';
                    break;
                case 'table':
                    $title = 'Таблица умножения';
                    $content = 'table.php';
                    break;
                case 'calc':
                    $title = 'Он-лайн калькулятор';
                    $content = 'calc.php';
                    break;
                default:
                    $content = '404.php';
                    $title = 'Страница не найдена!';
            }
            return new View($title, $content);
        }
        if ($method === $_POST){
            return new View('Заголовок', 'content.php');
        }
    }
}