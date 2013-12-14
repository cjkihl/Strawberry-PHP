<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of HTML5Menu
 *
 * @author Carl-Johan
 */
class HTML5Menu {
    
    $menu = array(
        'brand' => array(
            'img'=>'strawberry-icon.png',
            'text'=>'Straberry PHP'
        ),
        'nav_1' => array(
                'Hantera användare'=>'user/register',
                'Redovining'=>'review',
                'Källkod'=> 'http://www.student.bth.se/~caki10/phpmvc/knom04/source.php'
        ),
        'user_dropdown' => array(
            array(
                'elements' = array(
                    'Min användare'=>'user/login',
                    'Logga ut'=>'user/logout'
                )
            ),
            array(
                'title'=> 'Specialmeny: User',
                'visible'=>'User',
                'elements'=> array(
                    'forum'=>'#',
                    'blog'=>'#',
                )
            ),
            array(
                'title'=> 'Specialmeny: Writer',
                'visible'=>'Writer',
                'elements'=> array(
                    'Skriv en artikel'=>'#'
                )
            ),
            array(
                'title'=>'Specialmeny :Admin',
                'visible'=>'Admin',
                'elements'=> array(
                    'Hantera användare'=>'user/register',
                    'Redigera förstasidan'=>'#'
                )
            )
        )
    );
    
}

?>
