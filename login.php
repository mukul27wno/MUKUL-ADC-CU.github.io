<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
</head>
<body>
    <?php
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    ini_set("display_errors","1");
    error_reporting(E_ALL);
    
    $email = $_POST['email'];
    $password = $_POST['password'];
    $conn = mysqli_connect('localhost','root','','MUKUL-ADC-CU');
    
    $sql = "SELECT  * FROM `registration` WHERE Email_id = '$email' and password = '$password' ";
    
    $result= mysqli_query($conn,$sql);
    if($result->num_rows>0)
    {
        while($row = $result->fetch_assoc())
        {
        header('Location: welcome.html');
        }
    }
    else
    {
        echo "Ammm You enter wrong email/password try again";
        ?>
      <button >
        <a type="button" href="index.html">Login</a></button>
        <?php
    }
    ?>
</body>
</html>
