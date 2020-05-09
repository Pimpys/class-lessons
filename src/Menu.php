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
 * Date: 08.05.2020
 * Time: 14:25
 */
namespace App;
use Knp\Menu\MenuFactory;
use Knp\Menu\Renderer\ListRenderer;

class Menu
{
    /**
     * @return string
     */
    public static function getMenu(): string
    {
        $factory = new MenuFactory();
        $menu = $factory->createItem('Menu');
        $menu->setChildrenAttribute('class', 'inline');
        $menu->addChild('Главная', ['uri' => '/']);
        $menu->addChild('Контакты', ['uri' => '?route=contact']);
        $menu->addChild('О сайте', ['uri' => '?route=about']);
        $menu->addChild('Калькулятор', ['uri' => '?route=calc']);
        $menu->addChild('Таблица умножения', ['uri' => '?route=table']);

        $renderer = new ListRenderer(new \Knp\Menu\Matcher\Matcher());
        return $renderer->render($menu);
    }
}