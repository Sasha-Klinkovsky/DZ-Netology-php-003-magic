<?php

require_once('autoload.php'); // Подключаем автозагрузчик

use Person\Person;
use PeopleList\PeopleList;


//Решаем задачу 03-02

$person1 =  new Person("Ivan", "Kononov", 3500);

echo "Имя сотрудника: " . $person1->name . '<br>';
echo "Зарплата сотрудника: " . $person1->salary . '<br>';
echo '<br>';

$person1->__set($person1->name, 32);
$person1->__get("Болконский");
echo '<br>';


$serialPerson = serialize($person1);
echo "Сериализованный объект: " . $serialPerson . '<br>';
echo '<br>';

// Замееяем Имя и Зарплату

$newSerialPerson = str_replace(
    ["Ivan", "3500"], // Существующее значение
    ["Mark", "4500"], // Новое значение
    $serialPerson
);

echo "Измененный сериализованный объект: " . $newSerialPerson . '<br>';
echo '<br>';



// Десериализация измененного объекта
$newPerson = unserialize($newSerialPerson);

// Вывод свойств восстановленного объекта
echo "Новое имя сотрудника: " . $newPerson->name . '<br>';
echo "Новая зарплата сотрудника: " . $newPerson->salary . '<br>';
echo '<br>';

/*
--------------------------------------------------------------------------------------------------------------------
*/

//Решаем задачу 03-03
echo $person1 . '<br>';
echo '<br>';
echo '<br>';

// Создаем объект PeopleList для передачи в него сотрудников. 
$peopleList = new PeopleList();

// Связываем класс Person с объектом PeopleList
Person::setPeopleList($peopleList);


// Создаем еще несколько объектов Person
$person2 = new Person("Ivan", "Kononov", 3500);
$person3 = new Person("Anna", "Ivanova", 4500);
$person4 = new Person("Petr", "Petrov", 5000);


// Сотрудник $person1 не выведется, т.к. был объявлен до объявления объекта $peopleList. Если необходимо его добавить, объяви $peopleList до $person1

// Выводим всех сотрудников через foreach
foreach ($peopleList as $person) {
    echo $person . "<br>";
}

echo '<br>';
echo '<br>';

// Проверка
echo $person3;
