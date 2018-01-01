<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Home</title>
</head>
<body>
    <h1>Welcome</h1>
    <h4><li><a href="new">Add news</a></li></h4>

    <ul>

    <?php
        foreach($posts->results()  AS $post){

        ?>
        <?php echo $post->username;?>

        <?php echo $post->id; ?>
        <?php } ?>
    </ul>
</body>
</html>
