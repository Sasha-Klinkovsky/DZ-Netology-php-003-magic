<?php

require_once('autoload.php'); // Подключаем автозагрузчик

// Подключаем трейты

use src\AppUserAuthentication;
use src\MobileUserAuthentication;

class User
{
    use AppUserAuthentication, MobileUserAuthentication;

    public function loginCheck(string $login, string $password): string 
    {
        if ($this->authenticateApp($login, $password)) {
            return 'Авторизован как пользователь Приложения';

        } elseif ($this->authenticateMobile($login, $password)) {
            return 'Авторизован как пользователь Мобильного приложения';

        } else {
            return 'Неверный логин или пароль';
        }
    }
}

$user1 = new User();

echo $user1->loginCheck('app-Misha', 'app-Parol') . PHP_EOL;
echo $user1->loginCheck('mobile-Misha', 'mobile-Parol') . PHP_EOL;
echo $user1->loginCheck('notebook-Misha', 'notebook-Parol') . PHP_EOL;
