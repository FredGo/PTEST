<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $artwork = new Application_Model_Artwork();
        $artwork->setTitle('titre');
        echo $artwork->getTitle();
        
        $artworkMapper = new Application_Model_ArtworkMapper();
        $artworkMapper->save($artwork);
    	// action body
    }
    

}

