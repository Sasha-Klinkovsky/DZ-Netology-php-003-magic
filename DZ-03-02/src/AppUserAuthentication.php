<?php
declare(strict_types=1);

/**
 * Трейт "Пользователь приложения"
*/

namespace src;

trait AppUserAuthentication {

    private string $appLogin = 'app-Misha';
    private string $appPassword = 'app-Parol';

    public function authenticateApp(string $login, string $password): bool {
        return $login === $this->appLogin && $password === $this->appPassword;
    }
}