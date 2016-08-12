<?php
// src/Heebari/dataBundle/EventListener/requestListener.php
/*
 * Cree par landry KATEU
 */


namespace OC\PlatformBundle\Beta;

use Symfony\Component\HttpFoundation\Response;

class requestListener
{
  public function __construct(BetaHTML $betaHTML, $endDate)
  {
    $this->betaHTML = $betaHTML;
  }

  public function process()
  {
    $remainingDays = $this->endDate->diff(new \Datetime())->format('%d');

    if ($remainingDays <= 0) {
      // Si la date est dépassée, on ne fait rien
      return;
    }
    
    // Ici on appelera la méthode
    // $this->betaHTML->displayBeta()
  }
}

