#!/usr/bin/php
<?PHP
function startsWith($haystack, $needle) {
        if ( !is_string($haystack) || ! is_string($needle) ) return false;
        return $needle === "" || strripos($haystack, $needle, -strlen($haystack)) !== FALSE;
}
$print = exec("sed -i 's/-webkit-filter:grayscale(.*%);filter:grayscale(.*%);/-webkit-filter:grayscale({$_GET["grayscale"]}%);filter:grayscale({$_GET["grayscale"]}%);/g' /usr/local/emhttp/plugins/dynamix/styles/default-dark.css");
echo $print;
$print2 = exec("sed -i 's/grayscale:.*/grayscale:{$_GET["grayscale"]}/g' /boot/config/plugins/dark.theme/settings.cfg");
echo $print2;
?>
