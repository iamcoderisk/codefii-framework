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
        foreach($posts AS $post){

        ?>

    <li><?php echo $post['title'];?></a> (<a href="edit/<?php echo $post['id'];?>">Update</a>|

    <a href="delete/<?php echo $post['id'];?>">Delete</a>)</li>
<?php } ?>
    </ul>
</body>
</html>
