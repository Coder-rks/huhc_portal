<?php 
	include 'config.php';
	// Connected to database!
	$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';
	if(!empty($action)){
		switch($action) {
			case 'signup':
				$fname = isset($_REQUEST['firstname']) ? $_REQUEST['firstname'] : '';
				$lname = isset($_REQUEST['lastname']) ? $_REQUEST['lastname'] : '';
				$uname = isset($_REQUEST['username']) ? $_REQUEST['username']: '';
				$gender = isset($_REQUEST['gender']) ? $_REQUEST['gender'] : '';
				$mobile = isset($_REQUEST['mobile']) ? $_REQUEST['mobile'] : '';
				$email = isset($_REQUEST['email']) ? $_REQUEST['email'] : '';
				$password = isset($_REQUEST['password']) ? $_REQUEST['password'] : '';
				$birthday_day = isset($_REQUEST['birthday_day']) ? $_REQUEST['birthday_day'] : '';
				$Month = isset($_REQUEST['Month']) ? $_REQUEST['Month'] : '';
				$birthday_year = isset($_REQUEST['birthday_year']) ? $_REQUEST['birthday_year'] : '';
				if(!empty($fname) && !empty($lname) && !empty($uname) && !empty($gender) && !empty($mobile) && !empty($email) && !empty($password) && !empty($birthday_day) && !empty($Month) && !empty($birthday_day)){
				$query = "INSERT INTO `signup` VALUES ('NULL','".$fname."','".$lname."','".$uname."','".$gender."','".$mobile."','".$email."','".$password."','".$birthday_day."','".$Month."','".$birthday_year."');";
						if($connect->query($query) === TRUE){
							header("location:index.html");
						}
				} else {
					echo "values are empty";
				}
				break; 
//.....................................................................................................................................

			case 'login':
				$uname = isset($_REQUEST['username']) ? $_REQUEST['username']: '';
				$password = isset($_REQUEST['password']) ? $_REQUEST['password'] : '';

				if(!empty($uname) && !empty($password)){
					$query = "SELECT * FROM `signup` WHERE `uname` = '".$uname."' AND `password` = '".$password."';";
					$res = mysqli_query($connect, $query);
					$data = mysqli_fetch_assoc($res);
					if (mysqli_num_rows($res) > 0){
						header("location:profile.html");
					}else{
						echo "wrong username or password";
					}}
					 else {
						echo "values are empty";
					}
			

	} 
}else {
		echo "action is empty";
	}


 ?>