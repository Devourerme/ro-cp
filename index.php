<?php
/**
* User: Morpolche
* Date: 10/6/2016
* ver: 1.0
*/

include_once 'core/init.php';

?>

<html>
<body>
    <form>
        Username<br>
        <input type="text" name="uname" title="gay"><br>

        Password<br>
        <input type="password" name="pword1"><br>

        Confirm Password<br>
        <input type="password" name="pword2"><br>

        Email<br>
        <input type="text" name="email"><br><br>

        <input type="radio" name="gender" value="male" checked>Male<br>
        <input type="radio" name="gender" value="female">Female<br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
