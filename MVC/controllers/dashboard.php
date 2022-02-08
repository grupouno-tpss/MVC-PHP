<?php
    class dashboard extends Controller{
        public function __construct()
        {
            parent::__construct();
            $this->view->render('dashboard');
        }
    }
?>