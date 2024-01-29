<?php 
if(isset($_POST['send-email'])){
    $mailto = "ziaeetechnologies@gmail.com";
    $option = $_POST['option'];
    $name = $_POST['name'];
    $details = 
        'Phone Number: ' . $number = $_POST['number'] .
        "\r\n" .
        'Date: ' . $date = $_POST['date'] . 
        "\r\n" . 
        'Time: ' . $time = $_POST['time'] . 
        "\r\n" .
        'Message: ' . $message = $_POST['message']
    ;
    $headers = "ziaeetechnologies@gmail.com";
    
    // mail($mailto, $option, $name, $details, $headers);
     header("Location: ../index.php");
}
?>