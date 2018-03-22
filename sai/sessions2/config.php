<?php

function login($details)
{
    if(isset($details['username'])&&isset($details['password']))
	{
        $username = $details['username'];
        $password = $details['password'];
        if($username!=""&&$password!="")
		{
            $_SESSION['username'] = $username;   
            header("Location:dashboard.php");
        }
    }
}

?>