<?php if (!defined('IN_PHPBB')) exit; ?>Subject: <?php echo (isset($this->_rootref['SITENAME'])) ? $this->_rootref['SITENAME'] : ''; ?> - Witamy na forum

Witaj <?php echo (isset($this->_rootref['USERNAME'])) ? $this->_rootref['USERNAME'] : ''; ?>,

Twoje konto zostało utworzone, ale jest obecnie nieaktywne.

Adres forum: <?php echo (isset($this->_rootref['U_BOARD'])) ? $this->_rootref['U_BOARD'] : ''; ?>


Zanim będziesz mógł/mogła się zalogować, musisz je aktywować, klikając na poniższy link:
<?php echo (isset($this->_rootref['U_ACTIVATE'])) ? $this->_rootref['U_ACTIVATE'] : ''; ?>


Twoje hasło zostało bezpiecznie zaszyfrowane w bazie danych i jego odzyskanie jest niewykonalne. Jeśli je zapominsz, będziesz mógł/mogła poprosić o nowe, używając adresu e-mail powiązanego z kontem.

Dziękujemy za rejestrację.

<?php echo (isset($this->_rootref['EMAIL_SIG'])) ? $this->_rootref['EMAIL_SIG'] : ''; ?>