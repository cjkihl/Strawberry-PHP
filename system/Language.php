<?php
/*
 * Helper for Language, Internationalisation (i18n) and localisation
 */

$dictionary = array();

/**
* Add a new dictionary for i18n
* @param type $name The name of the file without extension
* @param type $language (optional) If you want to use a specific language
* @return boolean true if the dictionary is loaded, otherwise false
*/
function addDictionary($name,$language = null) {
    global $dictionary;
    
    if($language==null) {
        $language = config("language");
    }
    //Load the file and decode from json
    if(($file = file_get_contents(APP_PATH.'/lang/'.$language.'/'.$name.'.json'))!== false) {

        if(($new = json_decode($file,true))!==null) {
            $dictionary = array_merge($dictionary,$new);
           
            return true;
        }
    }
    return false;
}
    
/**
* Get the i18n string in from the dictionary
* @param type $string The string to translate
* @param type $options If an array the values will be formatted into the string with sprintf
* @return type The i18n string if it was found in the dictionary, otherwise the original string
*/
function i18n($string,$options = null) {
    
    global $dictionary;
    if(!isset($dictionary[$string])) { return $string;}
    return !is_array($options) ? $dictionary[$string] : sprintf($dictionary[$string], $options);
}
?>
