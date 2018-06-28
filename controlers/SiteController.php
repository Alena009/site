<?php

/**
 * Description of SiteController
 *
 * @author Alena
 */
class SiteController {
    
    private $countRecordsOnMainPage = 5;
    
    public function actionIndex() 
    {        
        require_once ROOT . '/views/layouts/header.php';
        require_once ROOT . '/views/main.php';
        require_once ROOT . '/views/layouts/records.php';
        require_once ROOT . '/views/layouts/pagination.php';
        require_once ROOT . '/views/layouts/footer.php';
    }
}
