<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <!-- Basic PHP html tag -->
    <?php echo '<p>Hello World!</p>'; ?>

    <!-- Checking for browser type -->
    <?php
      if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {
    ?>
      <h3>strpos() must have returned non-false</h3>
      <p>You are using Internet Explorer</p>
    <?php
      } else {
    ?>
      <h3>strpos() must have returned false</h3>
      <p>You are not using Internet Explorer</p>
    <?php
      }
    ?>

    <!-- Forms with PHP -->
    <form action="action.php" method="post">
      <p>Your name: <input type="text" name="name" /></p>
      <p>Your age: <input type="text" name="age" /></p>
      <p><input type="submit" /></p>
    </form>

  </body>
</html>