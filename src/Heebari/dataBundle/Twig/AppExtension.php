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
            new \Twig_SimpleFilter('two', array($this, 'twoFilter')),
            new \Twig_SimpleFilter('Manybar', array($this, 'ManybarFilter')),
            new \Twig_SimpleFilter('LineCross', array($this, 'LineCrossFilter')),
            new \Twig_SimpleFilter('Line', array($this, 'LineFilter')),
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
     public function LineCrossFilter($data) {
        $retour = [];
        $i = 0;
        $j=0;
        foreach ($data as $key => $value) {
            foreach ($value as $year => $val) {
                if(is_array($val)){
                foreach ($val as $field => $num) {
                    if($field !='1')
                    if ($field != "dateOfInformation")
                        $retour[$year][$key . " " . $field] = $num;
                    else
                        $retour[$year][$field] = $num;
                }
                }else {
                    if($year !='1')
                    if ($year != "dateOfInformation")
                        $retour[0][$key . " " . $year] = $val;
                    else
                        $retour[0][$year] = $val;
                }
            }
            
        }

        return $retour;
    }
        public function LineFilter($data) {
        $retour = [];
        foreach ($data as $year => $value) {
                foreach ($value as $field => $num) {
                    if($field !='1')
                    if ($field != "dateOfInformation")
                        $retour[$year][$field] = $num;
                    else
                        $retour[$year][$field] = $num;
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
    public function twoFilter($data,$tab,$var1,$var2)
    {
        $pays = [];
         foreach ($data as $key => $value) {
             $pays[$key] = $value["pays"];
         }
        $retour = [];
        foreach ($data as $key => $value) {
            if (isset($value[$tab]) && sizeof($value[$tab]) >0){
                foreach ($value[$tab] as $k => $val) {
                    if (isset($val[$var1]) && isset($val[$var2])) {
                            $retour[$k][$var1] = $val[$var1];
                            $retour[$k][$pays[$key]] = $val[$var2];
                        }else{
                           $retour[$k][$pays[$key]] = 0; 
                        }
            }
            }else{
                $retour[0][$pays[$key]] = 0;
            }
            
                    
        }
        
        return $retour;   
    }
     public function ManybarFilter($donnee,$data1,$data2,$var1,$var2,$datefield)
    {
        $retour = [];
        $label = [];
        $pays = [];
         foreach ($donnee as $key => $value) {
             $pays[$key] = $value["pays"];
         }
        foreach ($donnee as $key => $value) {
                    if (isset($value[$data1])) {
                        foreach ($value[$data1] as $k => $val) {
                            if(!isset($retour[$k][$datefield]))
                                $retour[$k][$datefield] = $val[$datefield];
                            $retour[$k][substr($pays[$key], 0, 3)."_".$var1] = $val[$var1];
                            array_push($label, substr($pays[$key], 0, 3)."_".$var1);
                        }
                    }
                  if (isset($value[$data2])) {
                        foreach ($value[$data2] as $k => $val) {
                            if(!isset($retour[$k][$datefield]))
                                $retour[$k][$datefield] = $val[$datefield];
                            $retour[$k][substr($pays[$key], 0, 3)."_".$var2] = $val[$var2];
                            array_push($label, substr($pays[$key], 0, 3)."_".$var2);
                        }
                    }
        }
       $label = array_values(array_unique($label,SORT_STRING));
        return [$retour,$label];   
    }

    
    public function getName()
    {
        return 'app_extension';
    }
}

