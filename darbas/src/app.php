<?php
    if(isset($_POST['submit'])) {
        $vardas = trim($_POST['name']);
        $email = trim($_POST['email']);
        $phone = trim($_POST['phone']);
        $message = trim($_POST['message']);
    
        if(!empty($vardas) && !empty($email) && !empty($phone)) {
            if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
                include 'db.php';
                $from = "$email";
                $to = "mikneviciute.ursule@gmail.com";
                $subject = "Nauja žinutė";
                $autorius = 'Nuo: ' . $vardas . ', ' . $email;
                $zinute = htmlspecialchars($message);
                mail($to, $subject, $autorius, $zinute, $from);
                // Redirect to the same page using GET method
                header("Location: index.php"); 
                exit();
            }
        }  
    }
?>