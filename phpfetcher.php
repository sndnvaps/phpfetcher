<?php
define('PHPFETCHER_PATH', dirname(__FILE__));
require_once PHPFETCHER_PATH . '/simple_html_dom.php';
function __phpfetcher_autoload($strClassName) {
    if (substr($strClassName, 0, strlen('Phpfetcher_')) === 'Phpfetcher_') {
        require_once PHPFETCHER_PATH . '/' . str_replace('_', '/', $strClassName) . '.php';
    }
}
spl_autoload_register('__phpfetcher_autoload');
?>
