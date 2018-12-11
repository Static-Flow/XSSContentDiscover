<html>
<?php
if (isset($_COOKIE["admin"])) {
    echo '<a href="/secretAdmin.php">Admin</a><br>';
    //our super secret hidden admin page
}
//ACME authentication scheme
if (!isset($_COOKIE["admin"])) {
    echo "<a href=/login.php>Login</a><br>";
} else {
    echo "<a href=/logout.php>Logout</a><br>";
}

//simplest way to mock database entries
if (isset($_POST['content'])) {
    file_put_contents("submissions", $_POST["content"], FILE_APPEND | LOCK_EX);
    header('Location: /home.php');
    die();
}
//did you know you can include text files like this? PHP is wild
include 'submissions';
?>
PoC to use Stored XSS to gather hidden endpoints and urls:<br>
1)submit the JS below into the textbox and hit submit<br>
2) check /collection.php to see all links found so far<br>
3) "Login" by clicking the login link to get to the "admin" area<br>
4) recheck collection.php to see "hidden" admin link<br>
<textarea style="width:600px;height: 150px;"><script src="exploit/exploit.js"></script></textarea>
<form method="post" action="home.php">
    <input name="content" type="text">
    <button type="submit">Submit</button>
</form>
</html>
