<?php 
/**
* 
*/
class daftaradmin
{
	private $namadepan;
	private $namabelakang;
	private $username;
	private $password;

	private $email;
	private $telepon;
	private $konfirmasi;
	
	private $created;

	function __construct()
	{
		

		if ($_POST['password']!==$_POST['repassword']) 
		{
			$_SESSION['flash']['info']="Gagal.. Password tidak sesuai";
			echo "
				<script>
						document.location = 'adminview/index.php?key=pengaturan.php';
				</script>
			";
		}
		elseif ($_POST['namadepan']=="" or $_POST['username']=="" or $_POST['password']=="" or $_POST['email']=="" or $_POST['telepon']=="" or $_POST['captcha']=="") 
		{
			$_SESSION['flash']['info']="Gagal..Wajib diisi ";
			echo "
				<script>
						document.location = 'adminview/index.php?key=pengaturan.php'
				</script>
			";
		}
		elseif ($_SESSION['captcha']!= strtolower($_POST['captcha'])) 
		{
			$_SESSION['flash']['info']="Gagal.. Captcha tidak sesuai";
			echo "
				<script>
						document.location = 'adminview/index.php?key=pengaturan.php'
				</script>
			";
		}
		elseif (strlen($_POST['password'])<8) 
		{
			$_SESSION['flash']['info']="Gagal.. password harus lebih dari 8";
			echo "
				<script>
						 document.location = 'adminview/index.php?key=pengaturan.php'
				</script>
			";
		}
		else
		{
			include_once 'config/koneksi.php';
			$this->username = addslashes(strtolower($_POST['username']));
			$cari=$mysqli->prepare("SELECT username FROM mvp_user WHERE username=?");
			$cari->bind_param("s",$this->username);
			$cari->execute();
			$cari->store_result();
			$ketemu=$cari->num_rows;

			$this->email = addslashes(strtolower($_POST['email'])); //pencarian email ...
			$cariemail=$mysqli->prepare("SELECT email FROM mvp_user WHERE email=?");
			$cariemail->bind_param("s",$this->email);
			$cariemail->execute();
			$cariemail->store_result();
			$ketemuemail=$cariemail->num_rows;
			if ($ketemu>0) {
				$_SESSION['flash']['info']="Username sudah ada... coba username yang lain";
				echo "
					<script>
							document.location = 'adminview/index.php?key=pengaturan.php';
					</script>
				";
			}
			elseif ($ketemuemail>0) 
				{
					$_SESSION['flash']['info']="Email sudah ada... coba email yang lain";
					echo "
						<script>
								document.location = 'adminview/index.php?key=pengaturan.php';
						</script>
					";
				}
			else
			{
				
				

					$salt="beruangitunyata";

					$this->namadepan = addslashes($_POST['namadepan']);
					$this->namabelakang = addslashes($_POST['namabelakang']);
					$this->username = addslashes(strtolower($_POST['username']));
					$this->password = md5(addslashes($_POST['password'].$salt));
					$this->email = addslashes($_POST['email']);
					$this->telepon = addslashes($_POST['telepon']);
					date_default_timezone_set("Asia/Jakarta");
					$this->created = date("Y-m-d H:i:s");
					$this->konfirmasi = sha1($this->username.$this->email);
					
					include_once 'config/koneksi.php';
					$proses = $mysqli->prepare("INSERT INTO mvp_user values('',?,?,?,?,?,?,'1',?,'1','$this->created',CURRENT_TIMESTAMP)");
					$proses->bind_param('sssssss',$this->username, $this->password,$this->namadepan,$this->namabelakang, $this->email,$this->telepon,$this->konfirmasi);
					

					if ($proses->execute()) 
					{
						$_SESSION['flash']['info']="Berhasil didaftarkan";
						header("location: adminview/index.php?key=pengaturan.php");
					}
					else

					{
						$_SESSION['flash']['info']="Gagal..Gagal mendaftar terjadi kesalahan pada Database coba lagi beberapa saat";
						/*echo "
						<script>
								document.location = 'adminview/index.php?key=pengaturan.php';
						</script>
					";*/
					echo $mysqli->error;
					}
			}



			
		}
	}
}
