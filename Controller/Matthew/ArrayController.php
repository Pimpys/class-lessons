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
        foreach ($this->array as $value){
            if (is_array($value)){
                foreach ($value as $item){//array

                    echo $item . PHP_EOL;

                }
            }elseif (is_string($value)){
                echo $value . PHP_EOL; //string
            }
            else{
                throw new \Exception(sprintf('Wrong!!!'));
            }
        }
    }

    public function __toString(): string
    {
        return "Надо открыть этот файл: {$this->name} и в методе: printArray сделать перебор массива, который задаеться в конструкторе!";
    }
}