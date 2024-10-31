<?php
declare(strict_types=1);

/**
 * Класс Person
*/

namespace Person;

use PeopleList\PeopleList;

class Person
{
    public $name;
    public $surname;
    public $salary;
    private static $peopleList = null; // Статическая переменная для хранения ссылки на PeopleList

    public function __construct(string $name, string $surname,  int $salary)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->salary = $salary;

        // Автоматическое добавление в PeopleList, если он объявлен (не равен null) в index.php для ДЗ 3-3
        if (self::$peopleList !== null) {
            self::$peopleList->addPerson($this);
        }        
    }

    public function __set($personName, $age)
    {
        echo "Мы вызвали __set для '$personName', с входными данными возраста: $age" . '<br>';
    }

    public function __get($surname)
    {
        echo "Мы вызвали __get для $surname" . '<br>';
    }

    // Сокращаем до строки: Имя и Зарплату. Фамилию НЕ БЕРЕМ !!!
    public function __sleep()
    {
        echo "Вызываем __sleep" . '<br>';
        return ['name', 'salary'];
    }


// Добавления функционала ДЗ 03-03

    public function __toString()
    {
        return "Имя: $this->name, Зарплата: $this->salary";
    }

    // Устанавливаем PeopleList для автоматического добавления
    public static function setPeopleList(PeopleList $list)
    {
        self::$peopleList = $list;
    }
}







