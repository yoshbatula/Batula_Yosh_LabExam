<?php
session_start();

class Accounts {
    public string $fullname;
    public string $email;
    public string $username;
    public string $password;

    public function __construct($fullname, $email, $username, $password) {
        $this->fullname = $fullname;
        $this->email = $email;
        $this->username = $username;
        $this->password = $password;
    }
}

class Registration_process {
    private array $accounts = [];

    public function register($fullname, $email, $username, $password) {
        
        foreach ($this->accounts as $account) {
            if ($account->username === $username) {
                return false;
            }
        }
        
        $newAccount = new Accounts($fullname, $email, $username, $password);
        $this->accounts[] = $newAccount;
        return true;
    }
    
    public function getAccounts() {
        return $this->accounts;
    }
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullname = trim($_POST['fullname']);
    $email = trim($_POST['email']);
    $username = trim($_POST['username']);
    $password = $_POST['password'];
    
    if (empty($fullname) || empty($email) || empty($username) || empty($password)) {
        header('Location: ../src/register.php?error=empty_fields');
        exit();
    }
    
    $registration = new Registration_process();
    
    if ($registration->register($fullname, $email, $username, $password)) {
        
        if (!isset($_SESSION['accounts'])) {
            $_SESSION['accounts'] = [];
        }
        $_SESSION['accounts'][] = [
            'fullname' => $fullname,
            'email' => $email,
            'username' => $username,
            'password' => $password
        ];
        
        header('Location: ../src/login.php?success=registered');
        exit();
    } else {
        header('Location: ../src/register.php?error=username_exists');
        exit();
    }
}
?>