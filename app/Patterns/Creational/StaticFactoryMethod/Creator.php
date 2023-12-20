<?php

namespace App\Patterns\Creational\StaticFactoryMethod;

/**
 * Класс Создатель объявляет фабричный метод, который должен возвращать объект
 * класса Продукт. Подклассы Создателя обычно предоставляют реализацию этого
 * метода.
 */
class Creator
{

    /**
     * Также заметьте, что, несмотря на название, основная обязанность Создателя
     * не заключается в создании продуктов. Обычно он содержит некоторую базовую
     * бизнес-логику, которая основана на объектах Продуктов, возвращаемых
     * фабричным методом. Подклассы могут косвенно изменять эту бизнес-логику,
     * переопределяя фабричный метод и возвращая из него другой тип продукта.
     */
    public function getTomorrow(): string
    {
        // Вызываем статический фабричный метод, чтобы получить объект-продукт.
        $product = TimeProductCreator::getTomorrow();
        // Далее, работаем с этим продуктом.
        return $product->getTime();
    }

    public function getToday(): string
    {
        // Вызываем статический фабричный метод, чтобы получить объект-продукт.
        $product = TimeProductCreator::getToday();
        // Далее, работаем с этим продуктом.
        return $product->getTime();
    }
}
