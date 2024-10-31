<?php
declare(strict_types=1);

/**
 * Трейт "пользователь мобильного приложения"
*/

namespace src;

trait MobileUserAuthentication {
   private string $mobileLogin = 'mobile-Misha';
   private string $mobilePassword = 'mobile-Parol';

   public function authenticateMobile(string $login, string $password): bool {
       return $login === $this->mobileLogin && $password === $this->mobilePassword;
   }
}