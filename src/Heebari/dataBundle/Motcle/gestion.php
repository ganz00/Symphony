<?php

/*
 * Cree par landry KATEU
 */

namespace Heebari\dataBundle\Motcle;

use Heebari\dataBundle\Motcle\Gmotcle;
class gestion {

    private $G;

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

}
