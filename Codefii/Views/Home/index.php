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
      
       <input type="text" name="name" value="<?php echo $fullname;?>" placeholder="Full Name"/><br/>
       <input type="text" name="username" value="<?php echo $username;?>"placeholder="User name"/><br/>
       <input type="password" name="password" placeholder="******"/><br/>
        <input type="hidden" name="token" value="<?php echo $token ?>" />
       <input type="submit" name="submit" value="submit">
   </form>
</body>
</html>
