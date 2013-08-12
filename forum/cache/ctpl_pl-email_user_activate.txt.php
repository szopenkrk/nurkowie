<?php if (!defined('IN_PHPBB')) exit; ?>Subject: <?php echo (isset($this->_rootref['SITENAME'])) ? $this->_rootref['SITENAME'] : ''; ?> - Ponownie aktywuj konto

Witaj <?php echo (isset($this->_rootref['USERNAME'])) ? $this->_rootref['USERNAME'] : ''; ?>,

Twoje konto zostało deaktywowane, najprawdopodobniej z powodu zmian w Twoim profilu.

Zanim będziesz mógł/mogła się zalogować, musisz je aktywować, klikając na poniższy link:
<?php echo (isset($this->_rootref['U_ACTIVATE'])) ? $this->_rootref['U_ACTIVATE'] : ''; ?>


<?php echo (isset($this->_rootref['EMAIL_SIG'])) ? $this->_rootref['EMAIL_SIG'] : ''; ?>