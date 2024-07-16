<!--
Author: Colorlib
Author URL: https://colorlib.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
    <title>Creative Colorlib SignUp Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript"> 
        addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); 
        function hideURLbar(){ window.scrollTo(0,1); } 
    </script>
    <link href="../web/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
</head>
<body>
    <!-- main -->
    <div class="main-w3layouts wrapper">
        <h1>Menampilkan 1 data user</h1>
        <div class="main-agileinfo">
            <table border="1" cellspacing="5" cellpadding="5" width="100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Status User</th>
                        <th>Tipe User</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                include '../API/connect.php';

                // Prepare and execute the SQL statement
                $email = $_POST['email'];
                $stmt = $conn->prepare("SELECT * FROM user WHERE username = '$email' ORDER BY id");
                $stmt->execute();
                $result = $stmt->get_result();

                // Fetch results
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        ?>
                        <tr>
                            <td><label><?php echo htmlspecialchars($row['id']); ?></label></td>
                            <td><label><?php echo htmlspecialchars($row['username']); ?></label></td>
                            <td><label><?php echo htmlspecialchars($row['password']); ?></label></td>
                            <td><label><?php echo htmlspecialchars($row['status_user']); ?></label></td>
                            <td><label><?php echo htmlspecialchars($row['fk_tipeuser_id']); ?></label></td>
                        </tr>
                        <?php
                    }
                } else {
                    echo "<tr><td colspan='5'>No results found.</td></tr>";
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- //main -->
</body>
</html>
