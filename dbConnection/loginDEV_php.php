<?php
    include("connection.php");

    $login = $_POST["DevEmail"];
    $password = $_POST["DevPassword"];

    $sql = "SELECT DevID, DevPassword FROM Desenvolvedor WHERE DevEmail = '$login'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            if ($row["DevPassword"] == $password) {
                session_start();
                $_SESSION["DevID"] = $row["DevID"];
                header("Location: users_lst.php");
            } else {
?>
<script>
    alert("Senha incorreta");
    history.go(-1);
</script>
<?php
            }
        }
    }
    else {
?>
<script>
    alert("Login incorreto");
    history.go(-1);
</script>
<?php
    }
?>