<?php 
	
	/**
    * class untuk cek validation
    */
    class validation 
    {
        
        function cek_session()
            {
            // Cek apakah semua variabel session ada / tidak
            if(isset($_SESSION['session_id'], $_SESSION['password'], $_SESSION['status'])){
                $id = $_SESSION['session_id'];
                $password_login = $_SESSION['password'];
                $status = $_SESSION['status'];

                return true;
               }
            else
                {
                    return false;
                }

            }
    }
 ?>