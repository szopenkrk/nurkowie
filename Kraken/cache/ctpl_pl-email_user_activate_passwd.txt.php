<?php if (!defined('IN_PHPBB')) exit; ?>Subject: <?php echo (isset($this->_rootref['SITENAME'])) ? $this->_rootref['SITENAME'] : ''; ?> - Aktywacja nowego hasła

Witaj <?php echo (isset($this->_rootref['USERNAME'])) ? $this->_rootref['USERNAME'] : ''; ?>,

Otrzymałeś/aś ten e-mail, ponieważ poprosiłeś/aś (lub ktoś podszywający się pod Ciebie poprosił) o zmianę hasła Twojego konta na inne. Jeśli nie prosiłeś/aś o to, to zignoruj ten list, a jeżeli ciągle go otrzymujesz, to skontaktuj się z administratorem forum.

Aby używać nowego hasła, musisz je aktywować, klikając na poniższy link:
<?php echo (isset($this->_rootref['U_ACTIVATE'])) ? $this->_rootref['U_ACTIVATE'] : ''; ?>


Jeśli aktywacja się powiedzie, to będziesz mógł/mogła zalogować się używając tego hasła:
<?php echo (isset($this->_rootref['PASSWORD'])) ? $this->_rootref['PASSWORD'] : ''; ?>


Możesz oczywiście zmienić hasło samodzielnie, korzystając z panelu użytkownika. Jeśli masz z tym problemy, skontaktuj się z administratorem forum.

<?php echo (isset($this->_rootref['EMAIL_SIG'])) ? $this->_rootref['EMAIL_SIG'] : ''; ?>