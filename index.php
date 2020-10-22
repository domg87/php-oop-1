<?php 
// classe
class User {
    public $name;
    public $lastname;
    public $email;
    public $username;
    public $password;

    // creo funzione costructor
    public function __construct($_username, $_email, $_password)
    {
        $this->username = $_username;
        $this->email = $_email;
        $this->password = $_password;
    }
}

// creo istanze
$user1 = new User ("franco", "farnco@gmail.com", "1234");
$user2 = new User ("mpippo", "pippo@gmail.com", "abcd");
$user3 = new User ("pollo", "pollo@gmail.com", "qwerty");
$user4 = new User ("fabioM", "fabio@gmail.com", "0987654321");


$users = [$user1, $user2, $user3, $user4];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="list">
            <h2>Username</h2>
            <h2>email</h2>
            <h2>password</h2>
        </div>
        <?php foreach($users as $user) { ?>
            <div class = "list-user">
                <p><?php echo $user->username ?></p>
                <p><?php echo $user->email ?></p>
                <p><?php echo $user->password ?></p>
            </div>
        <?php } ?>

    </div>
</body>
</html>
