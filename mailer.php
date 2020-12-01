<?php
    $visitor_name= $_POST['visitorName'];
    $visitor_email= $_POST['visitorEmail'];
    $visitor_phone=$_POST['visitorPhone'];
    $visitor_subject=$_POST['visitorSubject'];
    $visitor_message =$_POST['visitorMessage'];

    $email_from = 'info@yuktix.com';
    $email_subject = "New Enquiry";
    $email_body="Name :-" $visitor_name.\n.
                        "User_Email :-" $visitor_email.\n.
                            "User Message": $message.\n;

        $to = "krantesh@gmail.com";

        $headers = "From:" $email_from;\r\n;

        $headers = "Reply-to": $visitor_email \r\n;

        mail($to, $email_subject, $email_body, $headers);

        header("Location: index.html");
?>