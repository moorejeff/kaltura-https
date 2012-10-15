<?php

/**
 * corp actions.
 *
 * @package    kaltura
 * @subpackage corp
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class corpActions extends sfActions
{
  /**
   * Executes index actionw
   *
   */
  public function executeIndex()
  {
	$this->redirect("https://".kConf::get('corp_action_redirect'), 301);
  }

  public function executeError404()
  {
	$this->redirect("https://".kConf::get('corp_action_redirect'), 301);
  }
  
  public function executeTandc()
  {
  	$this->redirect("https://".kConf::get('corp_action_redirect')."/tandc", 301);
  }
}

?>