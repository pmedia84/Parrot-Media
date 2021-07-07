<?php
include("nav.inc.php");

if($_POST){
    $fname = "";
    $sname = "";
    $email = "";
    $howcanwehelp = "";
    $message = "";
    $body = "<div>";
    $custname = "";

    //Auto Reply email VAR's
    $aemail = "";
    $abody = "<div>";

   


    
    if(isset($_POST['howcanwehelp'])) {
        $howcanwehelp = filter_var($_POST['howcanwehelp'],FILTER_SANITIZE_STRING);
        $body .= "<div>
                    <label><b>Enquiry Type: </b></label>".$howcanwehelp."
                  </div>";  
    }
//Auto Reply
    if(isset($_POST['howcanwehelp'])) {
        $howcanwehelp = filter_var($_POST['howcanwehelp'],FILTER_SANITIZE_STRING);
        $abody .= "
                    <div><b><span style='color:rgb(120,181,163);font-size:40px;'>PARROT </span><span style='color:#a2a2a2;font-size:40px;'>MEDIA</span></b><br>
                    <h2 style='color:#a2a2a2;'>We Thank you for your enquiry!</h2>
                    <h3 style='color:#a2a2a2;'>Here is a record of what you have asked us.</h3>
                    <label><b>Your Enquiry: </b></label>".$howcanwehelp."
                  </div>";  
    }

//Parrot
    if(isset($_POST['fname'])) {
        $fname = filter_var($_POST['fname'],FILTER_SANITIZE_STRING);
        $body .= "<div>
                    <label><b>Customer name: </b></label>".$fname."
                  </div>";  
    }
    //Auto Reply
    if(isset($_POST['fname'])) {
        $fname = filter_var($_POST['fname'],FILTER_SANITIZE_STRING);
        $abody .= "<div>
                    <label><b>Customer name: </b></label>".$fname."
                  </div>";  
    }
//Parrot Email
    if(isset($_POST['sname'])) {
        $sname = filter_var($_POST['sname'],FILTER_SANITIZE_STRING);
        $body .= "<div>
                    <label><b>Customer name: </b></label>".$sname."
                  </div>";  
    }
    //Parrot
    if(isset($_POST['email'])) {
        $email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['email']);
        $email = filter_var($email, FILTER_VALIDATE_EMAIL);
        $body .= "<div>
                           <label><b>Visitor Email: </b></label>&nbsp;<span>".$email."</span>
                        </div>";
    }
    //Auto Reply
    if(isset($_POST['email'])) {
        $email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['email']);
        $email = filter_var($email, FILTER_VALIDATE_EMAIL);
        $abody .= "<div>
                           <label><b>Visitor Email: </b></label>&nbsp;<span>".$email."</span>
                        </div>";
    }
   //Parrot
    if(isset($_POST['message'])) {
        $message = filter_var($_POST['message'],FILTER_SANITIZE_STRING);
        $body .= "<div>
                           <label><b>Visitor Message:</b></label>
                           <div>".$message."</div>
                        </div>";
    }
    //Auto Reply
    if(isset($_POST['message'])) {
        $message = filter_var($_POST['message'],FILTER_SANITIZE_STRING);
        $abody .= "<div>
                           <label><b>Visitor Message:</b></label>
                           <div>".$message."</div>
                           <h4><b>We will be in touch soon</b></h4>
                        </div>";
    }

    $recipient = "karl@parrotmedia.co.uk";
    //Parrot
    $body .= "</div>";
    //Auto Reply
    $abody .="</div>";

    if($howcanwehelp == 'New') {
        $howcanwehelp = "I Need a new website";
    }
    if($howcanwehelp == 'Help') {
            $howcanwehelp = 'I need help with my current website!';
        }
    
    
        $headers  = 'MIME-Version: 1.0' . "\r\n"
        .'Content-type: text/html; charset=utf-8' . "\r\n"
        .'From: ' .$email. "\r\n";

        $headersautoreply  = 'MIME-Version: 1.0' . "\r\n"
        .'Content-type: text/html; charset=utf-8' . "\r\n"
        .'From: ' .$recipient. "\r\n";
//Parrot 
    mail($recipient, $howcanwehelp, $body, $headers); {
        echo "
        <div class = 'jumbotron' style='height:500px';>
        <h2>Thanks for saying Hi. $fname, you will hear from us soon</h2>
        </div>";
     } 
     //Auto Reply
     mail($email, $howcanwehelp, $abody, $headersautoreply); {
        
     } 

    }
    include("footer.inc.php");
?>

