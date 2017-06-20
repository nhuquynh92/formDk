<!DOCTYPE HTML>
<html>
<body>
<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field.</span></p>

<form method="post" action="index.php?action=submit">

    Name: <input type="text" name="name" placeholder="Hieu">
    <span class="error"></span>
    <br><br>

    E-mail: <input type="text" name="email" placeholder="hieu@gmail.com">
    <span class="error">*</span>
    <br><br>

    Comment: <textarea name="comment" rows="5" cols="40"></textarea>
    <br><br>

    <input type="submit" name="submit" value="Submit">
    <input type="reset" name="reset" value="reset">
</form>

</body>