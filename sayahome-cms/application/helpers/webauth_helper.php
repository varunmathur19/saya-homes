<?php 
    function _is_logged_in() {
        if(isset($_SESSION['loginuser']) && $_SESSION['loginuser'] == true){
            return true;        
        } else {
            return false;
        }
    }
?>