put a page with in a form to edit a task and have a delete button in another form to delete

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

<?php $array = get_object_vars($data); $string = "index.php?page=tasks&action=show&id="; $string .= $array['id'] ?>

<form action="<?php echo $string?>" method="POST">

    <div class="container">
        <label><b>id</b></label>
        <input type="text"  name="id" value="<?php echo $array['id']?>" >

        <br>

        <label><b>owneremail</b></label>
        <input type="text" name="owneremail" value="<?php echo $array ['owneremail']?> " >

        <br>

        <label><b>ownerid</b></label>
        <input type="text" name="ownerid" value="<?php echo $array ['ownerid']?>" >

        <br>

        <label><b>createddate</b></label>
        <input type="text"  name="createddate" value="<?php echo $array ['createddate']?>" >

        <br>

        <label><b>duedate</b></label>
        <input type="text"  name="duedate" value="<?php echo $array ['duedate']?>" >

        <br>

        <label><b>message</b></label>
        <input type="text"  name="message" value="<?php echo $array ['message']?>">

        <br>

        <label><b>isdone</b></label>
        <input type="text" name="isdone" value="<?php echo $array ['isdone']?>" >

        <br>
        <button type="submit" name="submit" value="edit">update</button>

    </div>



</form>

<script src="js/scripts.js"></script>
</body>
</html>

