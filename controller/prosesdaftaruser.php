<?php 
/**
* 
*/
class daftaruser
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

		if ($_POST['password']!=$_POST['repassword']) 
		{
			echo "
				<script>
						alert('Password tidak sesuai');document.location = 'index.php?key=reg';
				</script>
			";
		}
		elseif ($_POST['namadepan']=="" or $_POST['username']=="" or $_POST['password']=="" or $_POST['email']=="" or $_POST['telepon']=="" or $_POST['captcha']=="") 
		{
			echo "
				<script>
						alert('Wajib diisi');document.location = 'index.php?key=reg'
				</script>
			";
		}
		elseif ($_SESSION['captcha']!= strtolower($_POST['captcha'])) 
		{
			echo "
				<script>
						alert('Captcha tidak sesuai');document.location = 'index.php?key=reg'
				</script>
			";
		}
		elseif (strlen($_POST['password'])<8) 
		{
			echo "
				<script>
						alert('password harus lebih dari 8'); document.location = 'index.php?key=reg'
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
				$proses = $mysqli->prepare("INSERT INTO mvp_user values('',?,?,?,?,?,?,'0',?,'0','$this->created',CURRENT_TIMESTAMP)");
				$proses->bind_param('sssssss',$this->username, $this->password,$this->namadepan,$this->namabelakang, $this->email,$this->telepon,$this->konfirmasi);
				$proses->execute();

				if ($proses) 
				{
					header("location: index.php?key=berhasil");
				}
				else
				{
					echo "
					<script>
							alert('Gagal mendaftar terjadi kesalahan pada Database coba lagi beberapa saat');document.location = 'index.php?key=reg';
					</script>
				";
				}
			}
		}
	}
}
