<?php

class TestController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    
    public function phpinfoAction()
    {
    	// action body
    	//phpinfo();
    	//var_dump($this->view);
    	//$this->view->layout()->disableLayout();
    	$form    = new Application_Form_Formtest();
    	$this->view->form = $form;
    	//var_export($this->view);
    }

}

