
<form action="processor.php" method="post" id="myform">

  <p>
    <label for="name">Name</label><br>
    <input id="name" name="name" type="text" required>
  </p>

  <p>
    <label for="email">Email</label><br>
    <input id="email" name="email" type="email" required>
  </p>

  <p>
    <label for="url">Website</label><br>
    <input id="url" name="url" type="url">
  </p>

  <p>
    <label for="comments">Comments</label><br>
    <textarea id="comments" name="comments" cols="40" rows="10" required></textarea>
  </p>

  <p>
    <input name="send" type="submit" value="Send it">
  </p>

</form>
