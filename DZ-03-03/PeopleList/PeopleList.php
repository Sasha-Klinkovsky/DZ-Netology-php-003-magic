<?php
declare(strict_types=1);

/**
 * Класс Person
*/

namespace PeopleList;

use Person\Person;
use Iterator;

class PeopleList implements Iterator
{
    private $people = []; // Массив для хранения объектов Person
    private $position = 0; // Текущая позиция для итерации

// Добавляем объект в массив
public function addPerson(Person $person)
{
    $this->people[] = $person;
}

// Обязательные методы интерфейса Iterator

public function current(): mixed
{
    return $this->people[$this->position];
}
public function key():int
{
    return $this->position;
}
public function next():void
{
    $this->position++;
}
public function rewind(): void
{
    $this->position = 0;
}
public function valid(): bool
{
    return isset($this->people[$this->position]);
}
}