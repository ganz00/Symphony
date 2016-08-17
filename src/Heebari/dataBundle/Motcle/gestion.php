<?php
/*
 * Cree par landry KATEU
 */

namespace Heebari\dataBundle\Motcle;

use Heebari\dataBundle\Motcle\Gmotcle;

class gestion {

    private $G;
    public $data= [];

    public function __construct(Gmotcle $G) {
        $this->G = $G;
    }

    public function check($array, $url) {
        $retour = array();
        $retour2 = array();
        $trouve = false;
        foreach ($url as $value) {
            foreach ($array as $key => $valu) {
                if ($key == $value) {
                    array_push($retour, $key);
                    $trouve = true;
                } else {
                    if (in_array($value, $valu, true)) {
                        array_push($retour, $key);
                        $trouve = true;
                    }
                }
            }
            if (!$trouve)
                array_push($retour2, $value);
            $trouve = false;
        }

        return ([$retour, $retour2]);
    }

    public function filter($param, $pattern) {
        $retour = array();
        foreach ($param as $value) {
            $val = preg_match($pattern, $value, $matches);
            if ($val == 1 && strlen($matches[0]) >= 2)
                array_push($retour, $matches[0]);
        }
        return $retour;
    }

    public function remove($param) {
        $cle = array();
        foreach ($param as $key => $val) {
            $cle[$val] = true;
        }
        $cle = array_keys($cle);
        return $cle;
    }

    public function setdata($param, $name) {
        $this->data[$name] = $param;
    }

    public function getdata() {
        return $this->data;
    }

    public function traiteDate($debut, $fin) {
        if ($fin != NULL) {
            $retour[0] = new \Datetime($debut . '-01-01');
            $retour[1] = new \Datetime($fin . '-12-31');
        } else {
            if ($debut != NULL) {
                $retour[0] = new \Datetime($debut . '-01-01');
                $retour[1] = new \Datetime($debut . '-12-31');
            } else {
                $retour[0] = new \Datetime((intval(date('Y')) - 10) . '-01-01');
                $retour[1] = new \Datetime(intval(date('Y')) . '-12-31');
            }
        }
        return $retour;
    }

    public function formatone($data) {
        foreach ($data['donnee'] as $key => $value) {
            if (is_array($value)) {
                foreach ($value as $k => $val) {
                    if (isset($val["dateOfInformation"])) {
                        $data['donnee'][$key][$k]["dateOfInformation"] = $val["dateOfInformation"]->format('Y');
                    }
                }
            }
        }
        return $data;
    }
//regroupe les information des 2 pays
    public function formatmany($pays, $pays1, $pays2 = NULL) {
        $fin = array();
      
        foreach ($pays as $field => $value) {
            if (is_array($value)) {
                foreach ($value as $annee => $donnee) {
                    if (is_array($donnee)) {
                        foreach ($donnee as $champ => $val) {
                            if($champ == "dateOfInformation"){
                                $fin[$field][$annee]["date"] = $val->format('Y');
                            }else
                                $fin[$field][$annee][$champ] = $this->put($val,$field,$pays1,$pays2,$annee,$champ);
                        }
                    } else {
                        $fin[$field][$annee] = $this->put($donnee,$field,$pays1,$pays2,$annee);
                        
                    }
                }
            }else {
                $fin[$field] = [$value, $pays1[$field]];
                if ($pays2 != NULL)
                    $fin[$field][2] = $pays2[$field];
            }
        }
        return $fin;
    }

    public function testval($param, $key1, $key2 = NULL) {
        if ($key2 == NULL) {
            isset($param[$key1]) ? $data = $param[$key1] : $data = "";
        } else {
            isset($param[$key1]) ? $data = $param[$key1] : $data = [];
            isset($data[$key2]) ? $data = $data[$key2] : $data = "";
        }
        return $data;
    }

    public function put($donnee,$field, $pays1, $pays2, $annee,$champ=NULL) {
        if($champ == null){
        $ret = [$donnee, $this->testval($pays1[$field], $annee)];
        if ($pays2 != NULL)
            $ret[2] = $this->testval($pays2[$field], $annee);
        }else{
            $ret = [$donnee, $this->testval($pays1[$field], $annee,$champ)];
        if ($pays2 != NULL)
            $ret[2] = $this->testval($pays2[$field], $annee,$champ);
        }
        return $ret;
    }

    public function format($array, $nom) {
        if (sizeof($array) == 1 && isset($array[0])) {
            return [$nom => $array[0]];
        } else {
            $do = FALSE;
            $i = 0;
            foreach ($array as $key => $value) {
                if (sizeof($value) == 1 && isset($array[$key])) {
                    $array[$key] = $value[0];
                    $do = true;
                } else {
                    if (isset($array[$key])) {
                        $i++;
                    }
                }
            }
            if ($do)
                return [$nom => $array];
            else {
                if ($i = sizeof($array))
                    return [$nom => $array];
                else {
                    return $array;
                }
            }
        }
    }

    public function jedump($param) {
        ?>
        <pre>
        <?php print_r($param); ?>
        </pre>
        <?php
    }
    private function simpl($tab,$prec){
    if (is_array($tab)) {
        foreach ($tab as $key => $val) {
            $this->simpl($val,$tab);
        }
    }else{
        array_push($this->data,$prec);
        return;
    }
    }
    public function getsimpleres($tab){
        $this->simpl($tab, []);
        $result = array_unique($this->data,SORT_REGULAR);
        $this->data = [];
        return $result;
    }

}
