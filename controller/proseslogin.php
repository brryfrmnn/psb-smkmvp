<?php
	
	/**
	* @author="berry"
	*/
	class proseslogin
	{
		
		function __construct()
		{
			 // Menciptakan session
			 $salt="beruangitunyata";

			require_once "config/koneksi.php";

			require_once 'controller/fungsilogin.php';
			$login = new logmein;
			 
			
			if($login->cek_login($mysqli) == true)//cek login igunakan apabila terjadi login ketika sudah sebelumnya login...
			{
				
					header("location: adminview/index.php");
					exit();
			        
			}
			elseif (isset($_POST['login'])) 
			{	 
				if($_SERVER['REQUEST_METHOD'] == 'POST'){
				    if(isset($_POST['username']) and isset($_POST['password'])){
				        $username = addslashes($_POST['username']); # $_POST['username'] diambil dari name pada form login
						$password = addslashes(md5($_POST['password'].$salt)); # $_POST['password'] diambil dari name pada form login. MD5 dibuat untuk encrypsi
				        if($login->login($username, $password, $mysqli) == true)
				        {
				            	if ($_SESSION['status']=='1') {
				            		header("location: adminview/index.php");
				            	}
				            	else
				            	{
				            		if ($_SESSION['status_konfirmasi']=='0') {
				            			header("location: index.php?key=aktivasi");
				            		}
				            		else
				            		{
				            			header("location: index.php#caramendaftar");
				            		}
								exit();
				            	}
								
							
				        }
				        else
				        {
				            // Gagal login
				            
				            echo "<script>alert('password anda salah'); document.location = 'index.php';</script>";
				            
				        }
				    }
				}
			}
			else
			{

				echo "<script>alert('anda harus login terlebih dahulu'); document.location = 'index.php';</script>";

			}
		}
	}

	