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
            new \Twig_SimpleFilter('donot', array($this, 'donotFilter')),
            new \Twig_SimpleFilter('bar', array($this, 'barFilter')),
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
    public function donotFilter($data,$var1,$var2,$var3=null)
    {
        $retour = [];
        $date ="";
        if (isset($data[$var1]) && isset($data[$var2])&& isset($data[$var3])) {
                        $retour[0]["label"] = $var1;
                        $retour[0]["value"] = $data[$var1];
                        $retour[1]["label"] = $var2;
                        $retour[1]["value"] = $data[$var2];
                        if($var3 != null){
                        $retour[2]["label"] = $var3;
                        $retour[2]["value"] = $data[$var3];
                        }
                        if(isset($data["dateOfInformation"]))
                            $date = $data["dateOfInformation"];
        }
        return [$retour,$date];
    }
        
    public function barFilter($data1,$data,$var1,$var2,$var3)
    {
        $retour = [];
        foreach ($data1 as $key => $value) {
                    if (isset($value[$var1]) && isset($value[$var2] )) {
                        $retour[$key][$var1] = $value[$var1];
                        $retour[$key][$var2] = $value[$var2];
                        if($data!=NULL && isset($data[$key][$var3])){
                            $retour[$key][$var3] = $data[$key][$var3];
                        }
                        else{
                            $retour[$key][$var3] = $value[$var3];
                        }
                    }
        }
        return $retour;   
    }
    
    public function getName()
    {
        return 'app_extension';
    }
}

