<?php
/**
 * @package Sitebuilder
 * @author Nate Agrin
 **/
require_once 'Zend/Controller/Action.php';
class CollectionsController extends Zend_Controller_Action
{
    public function indexAction()
    {
		echo 'This is the '.get_class($this);
    }

    public function noRouteAction()
    {
        $this->_redirect('/');
    }
}
?>