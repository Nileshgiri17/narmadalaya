<?php 

    if(isset($_POST['btn-send']))
    {
       $UserName = $_POST['UName'];
       $Email = $_POST['Email'];
       $Subject = $_POST['Subject'];
       $Msg = $_POST['msg'];

       if(empty($UserName) || empty($Email) || empty($Subject) || empty($Msg))
       {
           header('location:donation_form.php?error');
       }
       else
       {
           $to = "nileshssism@gmail.com";

           if(mail($to,$Subject,$Msg,$Email))
           {
               header("location:donation_form.php?success");
           }
       }
    }
    else
    {
        header("location:donation_form.php");
    }
?>