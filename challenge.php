<?php
$redirect_url = $_GET['url'];
$pattern = ' (^|^https:\/\/|^http:\/\/)([^\/:])*google\.com($|\/.*)';
if(preg_match($pattern, $redirect_url) == 1){
        header("Location: " . $redirect_url);
}
else{
        echo "Nope";
}
?> 