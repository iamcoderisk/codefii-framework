<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Home</title>

</head>
<body>
        <?php foreach($error as $er)  {
        echo $er;
        echo "<br />";
       }
       ?>
   <form method="post" action="">
      
       <input type="text" name="First-Name" placeholder="first name"/><br/>
       <input type="text" name="Last-Name" placeholder="Last name"/><br/>
       
       <input type="submit" name="submit" value="submit">
   </form>
</body>
</html>
