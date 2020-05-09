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
 * Time: 0:28
 */

use App\Menu;

?>
<header>
    <div class="row">
        <nav class="border fixed split-nav">
            <div class="nav-brand">
                <h3><a href="/">Наш сайт</a></h3>
            </div>
            <div class="collapsible">
                <input id="collapsible1" type="checkbox" name="collapsible1">
                <button>
                    <label for="collapsible1">
                        <div class="bar1"></div>
                        <div class="bar2"></div>
                        <div class="bar3"></div>
                    </label>
                </button>
                <div class="collapsible-body">
                    <?= Menu::getMenu() ?>
                </div>
            </div>
        </nav>
    </div>
</header>
