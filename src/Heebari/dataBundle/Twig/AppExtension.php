<?php
// src\Heebari\dataBundle\Twig\AppExtension.php
/*
 * Cree par landry KATEU
 */

namespace Heebari\dataBundle\Twig;

class AppExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('one', array($this, 'oneFilter')),
        );
    }

    /*
     * $mode int 0 filtre par date, 1 filtre  par pays
     */
    public function oneFilter($data,$var1,$var2)
    {
        $retour = [];
        foreach ($data as $key => $value) {
                    if (isset($value[$var1]) && isset($value[$var2])) {
                        $retour[$key][$var1] = $value[$var1];
                        $retour[$key][$var2] = $value[$var2];
                    }
        }
        return $retour;   
    }
    
    public function getName()
    {
        return 'app_extension';
    }
}

