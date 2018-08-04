<?php
	if (!$this->ion_auth->logged_in())
	{
		redirect('auth/login');
	}else
	{
		$user = $this->ion_auth->user()->row();
	}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome <?=$user->username;?></title>
</head>
<body>




	

</body>
</html>