<?php

session_start();

class LoginProcess {
    private array $accounts = [];

    public function __construct($accounts) {
        $this->accounts = $accounts;
    }

    public function authenticate($username, $password) {
        foreach ($this->accounts as $account) {
            if ($account['username'] === $username && $account['password'] === $password) {
                return $account;
            }
        }
        return false;
    }
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = $_POST['password'];
    
    
    if (empty($username) || empty($password)) {
        header('Location: ../src/login.php?error=empty_fields');
        exit();
    }
    
    $accounts = $_SESSION['accounts'] ?? [];
    
    $login = new LoginProcess($accounts);
    
    $user = $login->authenticate($username, $password);
    
    if ($user) {
        
        $_SESSION['logged_in'] = true;
        $_SESSION['username'] = $username;
        $_SESSION['fullname'] = $user['fullname'];
        
        header('Location: ../src/home-page.php');
        exit();
    } else {
        header('Location: ../src/login.php?error=invalid_credentials');
        exit();
    }
}
?>