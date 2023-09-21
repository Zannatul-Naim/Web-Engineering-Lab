
<?php
    setcookie('username', $_POST['username']);
    if (isset($_COOKIE['username'])) {
    echo "<br>You are " . $_COOKIE['username'];
    } else {
    echo "<br>You are not authenticated.";
    }
?>

<?php 
    $username = $_POST['username'];
    $password = $_POST['password'];
    $userJson = file_get_contents('users.json');
    $users = json_decode($userJson, true);
    
    // echo "<pre>";
    // print_r($users);
    // echo "</pre>";

    if(array_key_exists($username, $users) && $users[$username] == $password) {
        echo "<br><br><b>Login Successfull!</b><br><br>";
        echo '<b><i>'.$username.'<i></b>' . " Welcome to php world!";
    } else {
        echo "<br><br><b>Login Unsuccessfull</b><br><br>";
        echo "<br>Invalid username or password!";
    }


?>