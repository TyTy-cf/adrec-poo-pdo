<?php

include_once '../partials/_header.php';

include_once '../../models/geo_finder/User.php';

$user = new User();
$user->setUsername('Bébert');
$user->setEmail('bebert@bebert.com');

?>

<div class="container">
    <h1>Nouvelle partie !</h1>
</div>

<?php

include_once '../partials/_footer.php';

?>