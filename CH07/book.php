<html> 
<head>
    <title> Thanks for your booking</title>
</head>
<body>
 
<h1> Thank you for your booking</h1>
    <p>Hi <?php echo $_POST["firstname"]; ?> 
    thanks for booking a table. We will send a confirmation to your email address 
    <?php echo $_POST["emailaddr"]; ?></p>
    <p>Your message:</p>
    <?php echo $_POST["msg"]; ?>

</body>
</html>
