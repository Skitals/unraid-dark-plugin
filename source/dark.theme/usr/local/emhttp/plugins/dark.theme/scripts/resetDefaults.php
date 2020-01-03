#!/usr/bin/php
<?PHP
function startsWith($haystack, $needle) {
        if ( !is_string($haystack) || ! is_string($needle) ) return false;
        return $needle === "" || strripos($haystack, $needle, -strlen($haystack)) !== FALSE;
}
exec("rm /boot/config/plugins/dark.theme/settings.cfg");
exec("cp /usr/local/emhttp/plugins/dark.theme/scripts/default-dark.css /usr/local/emhttp/plugins/dynamix/styles/default-dark.css");
?>
