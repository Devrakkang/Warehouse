<?php

    if(isset($_GET['page']))
    {
        $page = $_GET['page'];
        if($page == "new")
        {
            include("new.php");
        }
        else if($page == "login")
        {
            include("login.php");
        }
        else if($page == "register")
        {
            include("register.php");
        }
    }
?>  