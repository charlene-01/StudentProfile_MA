<?php
    session_start();
    include 'Includes/connection.php';
    if (isset($_POST['TextInput']) && isset($_POST['PasswordInput'])) {
        $username = $_POST['TextInput'];
        $password = md5($_POST['PasswordInput']);
        $sql = "SELECT AdminID, Privileges FROM admin WHERE Username = '$username' AND Password = '$password'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                //echo "AdminID: " . $row["AdminID"]. " - Privileges: " . $row["Privileges"]. "<br>";
                $_SESSION['AdminID'] = $row["AdminID"];
                $_SESSION['Privileges'] = $row["Privileges"];
            }
            header("Location: student.php");
        } else {
            echo "Login failed";
        }
    }
    if (isset($_SESSION['AdminID']) && isset($_SESSION['Privileges'])) {
        header("Location: student.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <section class="main position-relative"> 
        <div class="login-container position-absolute top-50 start-50 translate-middle">
            <div class="row"> 
                <div class="col-7 p-3">
                    <div class = "d-flex justify-content-center flex-column">
                        <h3 class="text-center">Student Profile Management</h3>
                        <h4 class="text-center">Mabini Campus</h4>
                        <img class = "BSU mx-auto" src="Images/BSU.png" alt="">
                    </div>
                </div>
                <div class="col-5 p-5">
                    <form action="index.php" method="post">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="TextInput" name = "TextInput" placeholder="Username" autocomplete = "off" required>
                            <label for="TextInput">Username</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="PasswordInput" name ="PasswordInput" placeholder="Password" required>
                            <label for="PasswordInput">Password</label>
                        </div>
                        <div class="d-flex justify-content-between">
                            <button class="btn btn-light" type="submit">Login</button>
                            <a href="#">Forgot Password?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>