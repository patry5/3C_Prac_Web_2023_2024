<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Portal społecznościowy</title>
    <link rel="stylesheet" href="styl5.css" />
</head>
<body>
    <div id="banner1">
        <h2>Nasze osiedle</h2>
    </div>
    <div id="banner2">
    <?php
    $con = new mysqli_connect('localhost', 'root', '', 'portal');
    $query = "SELECT COUNT(*) FROM data;";
    $result = mysqli_query($con, $query);
    while($row = mysqli_fetch_row($result)) {
        echo "<h5>Number of portal users: $row[0]";
    }
    ?>
    </div>
    <div id="left">
        <h3>Login</h3>
        <form action="users.php" method="post">
            <label>
                Login:<br/>
                <input type="text" name="login" /><br/>
            </label>
            <label>
                Hasło:<br/>
                <input type="password" name="password" /><br/>
            </label>
            <button>Login</button>
        </form>
    </div>
    <div id="right">
        <h3>Wizytówka</h3>
        <?php
        if(!empty($_POST['login']) && !empty($_POST['password'])) {
            $login = $_POST['login'];
            $password = $_POST['password'];
            
            $query = "SELECT login FROM users WHERE login = '$login';";
            $result = mysqli_query($con, $query);
            if(mysqli_num_rows($result) == 1) {
                $query = "SELECT password FROM users WHERE login = '$login';";
                $result = mysqli_query($con, $query);
                while($row = mysqli_fetch_row($result)) {
                    $hashed_password = sha1($password);
                    if($hashed_password == $row[0]) {
                        $query = "SELECT u.login, d.birth_year, d.friends, d.hobby, d.photo FROM users u INNER JOIN details d ON u.id = d.id WHERE u.login = '$login';";
                        $result = mysqli_query($con, $query);
                        while($row = mysqli_fetch_row($result)) {
                            echo "<div class='profile'>";
                            echo "<img src='$row[4]' alt='person' />";
                            $age = date("Y") - $row[1];
                            echo "<h4>$row[0] ($age)</h4>";
                            echo "<p>Hobby: $row[3]</p>";
                            echo "<h1><img src='icon-on.png' /> $row[2]</h1>";
                            echo "<a href='details.html'><button type='button'>More information</button></a>";
                            echo "</div>";
                        }
                    } else echo "Incorrect password";
                }
                
            } else echo "Username does not exist";
        }
        mysqli_close($con);
        ?>
    </div>
    <div id="footer">
        Page created by: Patryk Chlewicki
</body>
</html>