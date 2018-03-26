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
            $_SESSION['password'] = $password;   
            header("Location:dashboard.php");
        }
    }
}

?>