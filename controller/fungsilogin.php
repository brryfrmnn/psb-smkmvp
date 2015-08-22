<?php 
/**
* buat login
*/
class logmein
{
    public function logout($value)
    {
        if ($value==true) {
            session_start();
            session_destroy();
            header("location: index.php");
        }
    }
  

    public function login($username, $password, $mysqli)
    {
        // Menggunakan perintah prepared statement untuk menghindari SQL injection
        if($stmt = $mysqli->prepare("SELECT user_id, nama_depan, username, password, status, status_konfirmasi FROM mvp_user WHERE username = ?"))
        {
            $stmt->bind_param('s', $username); // Menyimpan data inputan username ke variabel "$username"
            $stmt->execute(); // Menjalankan perintah query MySQL diatas
            $stmt->store_result();
            $stmt->bind_result($id,$nama_depan, $username, $dbpassword, $status, $status_konfirmasi); // Menyimpan nilai hasil query ke variabel
            $stmt->fetch();
             
            if($stmt->num_rows == 1)
            { // Jika user ada/ditemukan
                if($dbpassword == $password)
                { // Lakukan pengecekan password sesuai atau tidak dengan data di database
                    // Jika sama ciptakan SESSION id dan password_login
                    $id = preg_replace("/[^0-9]+/", "", $id);
                    $_SESSION['session_id'] = $id;
                    $_SESSION['status'] = $status;
                    $_SESSION['nama_depan'] = $nama_depan;
                    $_SESSION['password'] = $password;
                    $_SESSION['username'] = $username;
                    $_SESSION['status_konfirmasi'] = $status_konfirmasi;
                    // Login berhasil
                    return true;
                }else
                {
                    // Password tidak sesuai
                    return false;  
                }
            }
            else
                {
                    return false;           
                }

        }
        
        
        else
            {
                // User tidak ditemukan
                return false;  
            }
        
    }


    function cek_login($mysqli){
        // Cek apakah semua variabel session ada / tidak
        if(isset($_SESSION['session_id'], $_SESSION['status'])){
            $id = $_SESSION['session_id'];
            $password_login = $_SESSION['password'];
            $status = $_SESSION['status'];
             
            if($stmt = $mysqli->prepare("SELECT password FROM mvp_user WHERE user_id = ? LIMIT 1"))
            {
                $stmt->bind_param('i', $id); // Menyimpan data id user ke variabel "$id"
                $stmt->execute(); // Menjalankan perintah query MySQL diatas
                $stmt->store_result();
                 
                if($stmt->num_rows == 1){ // Jika user ada/ditemukan
                    $stmt->bind_result($password);
                    $stmt->fetch();
                     
                    if($password_login == $password){ // Jika passwordnya sesuai
                        // User melakukan login
                        return true;   
                    }else{
                        // User tidak melakukan login
                        return false;  
                    }
                }else{ 
                        return false;
                        }
                
            }else{
                        return false;
                    }
        }else{
            // User tidak melakukan login
            return false;  
        }
    }
}




 ?>