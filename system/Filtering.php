<?php
/**
 * Simple helper-class for filtering input and clean html
 *
 * @package System
 * @author Carl-Johan Kihl
 * @since 2013-08-14 
 */
class Filtering {
     
    public static function clean_html($html) {
        $allowedTags='<a><p><strong><em><u><h1><h2><h3><h4><h5><h6><img><li><ol><ul><span><div><br><ins><del>'; 
        return strip_tags($html,$allowedTags);
    }
}
?>
