<?php
    class Landing{
        public function __construct(){}
        public function main(){
            require_once "views/Company/header.view.php";
            require_once "views/Company/index.view.php";
            require_once "views/Company/footer.view.php";
        }
    }
?>