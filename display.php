<html>
<head>
<title>Your Order</title>
<style type="text/css">
       /* Style formatting partially copied from given class code and past
        * homework code. All copied style has been edited in some way.
        */
       html {
           text-align: center;
        }
        h2 {
            margin: 0px;
            padding: 5px;
            text-align: center;
        }
        div {
           margin-top: 100px;
           font-size: 20px;
           line-height: 1.4;
        }
        p {
            width: 370px;
            margin-left: auto;
            margin-right: auto;
            padding: 5px 10px;
            margin-top: 0px;
            border: 2px solid black;
        }
</style>
</head>

<body>
<div>
<?php
    $thanks = "Thank you for your order! ";
    echo "<h2>$thanks</h2>";
    $msg = $_GET["secret_msg"];
    echo "$msg";
    $to = $_GET["email"];
    $total = "The order total is $" . $_GET["total"] . ". ";
    $email_msg = "$thanks &nbsp; $total &nbsp;" . $_GET["secret_time"] . ".";
    mail("$to", "Your Order Receipt", "$email_msg");
?>
</div>
</body>
</html>
