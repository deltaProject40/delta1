<?php 

       $UserName = $_POST['name'];
       $Email = $_PO  ST['email'];
       $Subject = $_POST['subject'];
       $Msg = $_POST['Message'];

       if(empty($UserName) || empty($Email) || empty($Subject) || empty($Msg))
       {
           header('location:index.php?error');
       }
       else
       {
           $to = "Deltaproject40@gmail.com";

           if(mail($to,$Subject,$Msg,$Email))
           {
               header("location:index.php?success");
           }
          
       }
    
   
?>
