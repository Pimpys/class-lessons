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
 * Date: 04.05.2020
 * Time: 9:35
 */

namespace App\Matthew;


class ArrayController
{
    private array $array;
    private string $name;

    public function __construct(array $array = [])
    {
        $this->name = __FILE__;
        $this->array = $array;
    }

    /**
     * Этот метод вызываеться так:
     * $printer->printArray() в файле: index.php
     */
    public function printArray(): void
    {
        //$this->array; - в данном случае, это тоже самое как $array[];
        //И в цикл, массив должен приходить именно так: $this->array
        //Надо перебрать его тут.
        //Это надо удалить:
        var_dump($this->array);
    }

    public function __toString(): string
    {
        return "Надо открыть этот файл: {$this->name} и в методе: printArray сделать перебор массива, который задаеться в конструкторе!";
    }
}