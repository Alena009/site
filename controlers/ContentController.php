<?php

/**
 * Description of ContentController
 *
 * @author Alena
 */
class ContentController {
    
    public function actionIndex() 
    {
        return true;    
    }
    
    public function actionLoadContent() 
    {
        require_once ROOT . '/views/layouts/header.php';
        require_once ROOT . '/views/layouts/loadForm.php';
        require_once ROOT . '/views/layouts/footer.php';  
        
        return true;
    }
}
