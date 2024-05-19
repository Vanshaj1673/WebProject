<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin -Login</title>
    <!-- Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid"></div>
    <h2 class="text-center"> Admin Login</h2>
    <div class="row d-flex align-items-center justify-content-center">
        <div class="col-lg-12 col-xl-6">
    <form action=" " method="post" enctype="multipart/form-data">
        <div class="form-outline mb-4">
            <!-- username field -->
            <label for="user_username" class="form-label">Admin name</label>
            <input type="text" id="user_username" class="form-control" placeholder="Enter your name" autocomplete="off" required="required" name="user_username"/>
            </div>
           
              <!-- password field -->
              <div class="form-outline mb-4">
            <label for="user_password" class="form-label">Password</label>
            <input type="password" id="user_password" class="form-control"  placeholder="Enter your password" autocomplete="off" required="required" name="user_password"/>
            </div>
          
            
            <div class="mt-4 pt-2">
                <input type="submit" value="login" class="bg-info py-2 px-3 border-0" name="user_register">
                <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="admin_register.php" class="text-danger"> Register</a></p>
            </div>    


</form>
<?php
                echo '<form action="'.$_SERVER['PHP_SELF'].'" method="post">
                    <label for="Username">Email or Username:</label><br>
                    <input type="text" name="username" value="admin" required><br>
                   
                    <label for="Flight_id">Password:</label><br>
                    <input type="text" name="password" value="12345" required><br>
                   
                    <div class="additional-link">
                        <a href="Insertion/register.html">New user? Sign up here.</a>
                    </div>
                   
                    <input type="submit" value="Submit">
                </form>';

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $servername = "localhost";
                $dbname = "mystore";
                $conn = new mysqli($servername, 'root', '', $dbname);
           
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
           
                $username = $_POST['username'];
                $password = $_POST['password'];
           
                $sql = "SELECT Username, Password FROM Administrator_CS WHERE Username = '$username'";
                $result = $conn->query($sql);
           
                if ($result && $result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    if ($password === $row['Password']) {
                        $_SESSION['username'] = $username;

                        if ($username == "admin"){
                            echo '<script>window.location.href = "adminlogin.php";</script>';
                        }else{
                            echo '<script>window.location.href = "userlogin.php";</script>';
                        }

                        exit();
                    } else {
                        echo '<script>window.location.href = "Errors/InvalidPass.html";</script>';
                    }
                } else {
                    echo '<script>window.location.href = "Errors/InvalidUser.html";</script>';
                }
                $conn->close();
            }
            ?>
</div>
</div>
</div>                
</body>
</html>