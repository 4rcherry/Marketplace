<?php

	if(isset($_POST['login'])) {
		$errMsg = '';

		// Get data from FORM
		$email = $_POST['email'];
		$password = $_POST['password'];

		if($email == '')
			$errMsg = 'Enter email';
		if($password == '')
			$errMsg = 'Enter password';

		if($errMsg == '') {
			try {
				$stmt = $pdo->prepare('SELECT id, email, password FROM users WHERE email = :email');
				$stmt->execute(array(
					':email' => $email
					));
				$data = $stmt->fetch(PDO::FETCH_ASSOC);

				if($data == false){
					$errMsg = "User $email not found.";
				}
				else {
					if($password == $data['password']) {
						$_SESSION['email'] = $data['email'];
						$_SESSION['password'] = $data['password'];

						// header('Location: log=login-success');
						echo "Sukes login pada sistem";
						exit;
					}
					else
						$errMsg = 'Password not match.';
				}
			}
			catch(PDOException $e) {
				$errMsg = $e->getMessage();
			}
		}
	}
?>
	<div align="center">
		<div style=" border: solid 1px #006D9C; " align="left">
			<?php
				if(isset($errMsg)){
					echo '<div style="color:#FF0000;text-align:center;font-size:17px;">'.$errMsg.'</div>';
				}
			?>
			<div style="background-color:#006D9C; color:#FFFFFF; padding:10px;"><b>Login</b></div>
			<div style="margin: 15px">
				<form action="" method="post">
					<input placeholder="Email" type="text" name="email" value="<?php if(isset($_POST['email'])) echo $_POST['email'] ?>" autocomplete="off" class="box"/><br /><br />
					<input placeholder="password" type="password" name="password" value="<?php if(isset($_POST['password'])) echo $_POST['password'] ?>" autocomplete="off" class="box" /><br/><br />
					<input type="submit" name='login' value="Login" class='submit'/><br />
				</form>
			</div>
		</div>
	</div>
