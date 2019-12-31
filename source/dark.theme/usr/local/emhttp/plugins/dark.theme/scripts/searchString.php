#!/usr/bin/php
<?PHP
function startsWith($haystack, $needle) {
        if ( !is_string($haystack) || ! is_string($needle) ) return false;
        return $needle === "" || strripos($haystack, $needle, -strlen($haystack)) !== FALSE;
}
$lines_array = file("/usr/local/emhttp/plugins/dynamix/styles/default-dark.css");
$search_string = "img{border:none;text-decoration:none;vertical-align:middle;-webkit-filter:grayscale";
foreach($lines_array as $line) {
    if(strpos($line, $search_string) !== false) {
        list(, $new_str) = explode("(", $line);
        // If you don't want the space before the word bong, uncomment the following line.
        $new_str = substr($new_str, 0, strpos($new_str, "%"));
    }
}
echo $new_str;
?>
