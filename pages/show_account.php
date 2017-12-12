<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>The HTML5 Herald</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body>

<?php $array = get_object_vars($data); $string = "index.php?page=accounts&action=sort&id="; $string .= $array['id'] ?>

<form action="<?php echo $string?>" method="POST">

    <div class="container">
        <label><b>email</b></label>
        <input type="text"  name="email" value="<?php echo $array['email']?>" >

        <br>
        <label><b>firstname</b></label>
        <input type="text" name="fname" value="<?php echo $array ['fname']?> " >

        <br>

        <label><b>lastname</b></label>
        <input type="text" name="lname" value="<?php echo $array ['lname']?>" >

        <br>

        <label><b>phone</b></label>
        <input type="text"  name="phone" value="<?php echo $array ['phone']?>" >

        <br>

        <label><b>birthday</b></label>
        <input type="text"  name="birthday" value="<?php echo $array ['birthday']?>" >

        <br>

        <label><b>gender</b></label>
        <input type="text"  name="gender" value="<?php echo $array ['gender']?>">

        <br>

        <label><b>password</b></label>
        <input type="text" name="password" value="<?php echo $array ['password']?>" readonly>

        <br>
        <button type="submit" name="submit" value="edit">EDIT</button>
        <button type="submit" name="submit" value="delete">DELETE</button>
    </div>



</form>

<script src="js/scripts.js"></script>
</body>
</html>