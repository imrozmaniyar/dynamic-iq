<?php
session_start();
include_once("configure.php");
include_once(DIR_WS_CLASS_SITE."db_registration_master.php");
$rrurl = htmlspecialchars($_POST["txtrrlogin"], ENT_QUOTES, 'UTF-8');
if ($_SERVER['REQUEST_METHOD'] === 'POST' && trim($_POST['txtemailaddress']) !== ''){
	$email       = $_POST['txtemailaddress'];

		$query1 = "Select * from registration_master where user_email='$email'";
		$result1 = mysqli_query($con, $query1);
		if(mysqli_num_rows($result1)==0){
			$row1 = mysqli_fetch_array($result1);
			$user_email = $row['user_email'];	
			if($user_email!=$email){
			header("Location:$domain"."create-account");
			exit();								
			}
		}
	/*$obj1         = new db_registration_master();
	$obj1->set_user_email($email);
	$userid1  = $obj1->selectAll("user_email!='" . $email . "'");
	if ($userid1[0]==0){
		header("Location:$domain"."create-account");
		exit();				
	}*/	
		$pass        = $_POST['txtpassword1'];
		$query = "Select * from registration_master where user_email='$email'";
		$result = mysqli_query($con, $query);
		if(mysqli_num_rows($result)>0){
			$row = mysqli_fetch_array($result);
			$password_hash = $row['user_password'];
			$active=$row['active'];
			if($active=='N'){
				header("Location:$domain"."verify");
			exit();
			}elseif(password_verify($pass, $password_hash)){
				$obj         = new db_registration_master();
				$obj->set_user_email($email);
				$userid  = $obj->selectAll("user_email='" . $email . "' and active = 'Y' and user_flag = 'I'");
					if ($userid[0] > 0){
						$objId = mysql_fetch_object($userid[1]);
						$_SESSION['Suserid']      = $objId->user_id; 
						$_SESSION['fullname']     = $objId->user_name . chr(32);
						$_SESSION['Sflag']        = $objId->user_flag;
					}
?>					
					<script language="javascript">
						alert("You are logged in now to your account.");
						window.location="<?php echo htmlspecialchars($rrurl,ENT_QUOTES, 'UTF-8')?>";
					</script>
<?php
					}else{
?>			
					<script language="javascript">
						alert("Please check your Username & Password and try again");
						window.location="<?php echo htmlspecialchars($url,ENT_QUOTES, 'UTF-8')?>";
					</script>		
<?php	
					}
				}
			}	
?>	


