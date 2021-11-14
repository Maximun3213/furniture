<?php
    class sendMail extends controller {
        public function send(){
            if (isset($_SESSION['email'])){
                $to= $_SESSION['email'];
                $subject = 'Confirm your order';
                $mess = 'Thank you ! Your order is confirmed. Have a good day !';
                $header = 'From: datpanda3@gmail.com';


                if(mail($to, $subject, $mess, $header) == true) {
                    echo "
                    <script>
                        alert('Thank you! Your order is confirmed! Please check your email to know a order detail!');
                        window.location.href='http://localhost/FS-MVC/home';
                    </script>";
                } else {
                    echo "Email not send, Error!";
                }
            }

        }
    }

?>