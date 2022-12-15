<?php

include_once '../partials/_header.php';

include_once '../../models/geo_finder/User.php';

if (isset($_POST) && !empty($_POST)) {

    $user = new User();

    if (isset($_POST['user_username'])) {
        $user->setUsername($_POST['user_username']);
    }
    if (isset($_POST['user_email'])) {
        $user->setEmail($_POST['user_email']);
    }
    if (isset($_POST['user_password'])) {
        $user->setPassword($_POST['user_password']);
    }
    if (isset($_POST['user_dob'])) {
        $user->setDateOfBirth(new DateTime($_POST['user_dob']));
    }

    session_start();

    unset($_SESSION['user']);

    $_SESSION['user'] = serialize($user);

    header('location: /html/geo_finder/index.php');

}

?>

<div class="container mt-3">
    <form method="post" action="register.php" class="col-6 mx-auto">
        <div class="row">
            <label class="form-label col-3">Email</label>
            <input class="form-control col-9" type="email" name="user_email" required>
        </div>
        <div class="row my-3">
            <label class="form-label col-3">Username</label>
            <input class="form-control col-9" type="text" name="user_username" required>
        </div>
        <div class="row">
            <label class="form-label col-3">Password</label>
            <input class="form-control col-9" type="password" name="user_password" required>
        </div>
        <div class="row my-3">
            <label class="form-label col-3">Date of birth</label>
            <input class="form-control col-9" type="date" name="user_dob" required>
        </div>
        <button class="btn btn-primary mt-3" type="submit">
            S'inscrire
        </button>
    </form>
</div>

<?php

include_once '../partials/_footer.php';

?>



