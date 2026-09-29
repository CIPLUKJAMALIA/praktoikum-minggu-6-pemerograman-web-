<?php

session_start();

if (isset($_SESSION['admin_id'])) {

    header("Location: ../admin/index.php");

    exit;
}

?>

<!DOCTYPE html>
<html>

<head>

    <title>Masuk Admin • Sweet Cake</title>

    <link rel="stylesheet" href="../assets/style.css">

</head>

<body>

<div class="container">

    <div class="card"
         style="max-width: 450px; margin: 100px auto;">

        <h1>Selamat Datang 👋</h1>

        <p>
            Masuk ke ruang pengelolaan Sweet Cake.
        </p>

        <?php

        if (isset($_SESSION['error'])) {

            echo '<div class="alert">'
                . $_SESSION['error'] .
                '</div>';

            unset($_SESSION['error']);
        }

        ?>

        <form
            action="proses_login.php"
            method="POST"
        >

            <label>
                Username
            </label>

            <input
                type="text"
                name="username"
                required
            >

            <label>
                Password
            </label>

            <input
                type="password"
                name="password"
                required
            >

            <button
                type="submit"
                class="btn"
            >
                Login
            </button>

        </form>

        <br>

        <a href="../index.php">
            ← Kembali ke Website
        </a>

    </div>

</div>

</body>

</html>