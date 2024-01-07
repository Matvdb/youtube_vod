<?php
namespace Phppot;
use PDO;


class Member
{
    private $ds;
    

    function __construct()
    {
        require_once __DIR__ . '../../db/DataSource.php';
        $this->ds = new DataSource();
    }
    
    public function getMember($username)
    {
        $query = 'SELECT * FROM user where email = ?';
        $paramType = 's';
        $paramValue = array(
            $username
        );
        $memberRecord = $this->ds->select($query, $paramType, $paramValue);
        return $memberRecord;
    }
    public function loginMember()
    {
        $memberRecord = $this->getMember($_POST["email"]);
        $loginPassword = 0;
        if (! empty($memberRecord)) {
            if (! empty($_POST["password"])) {
                $password = $_POST["password"];
            }
            $hashedPassword = $memberRecord[0]["password"];
            $loginPassword = 0;
            if (password_verify($password, $hashedPassword)) {
                $loginPassword = 1;
            }
        } else {
            $loginPassword = 0;
        }
        if ($loginPassword == 1) {
            // login sucess so store the member's username in
            // the session
            session_start();
            session_regenerate_id();
			$_SESSION['logged_in'] = true;
            $_SESSION["id"] = $memberRecord[0]["id"];
            $_SESSION["email"] = $memberRecord[0]["email"];
            $_SESSION["pseudo"] = $memberRecord[0]["pseudo"];
            $_SESSION["role"] = $memberRecord[0]["role"];
            $_SESSION["password"] = $memberRecord[0]["password"];
            $_SESSION["date"] = $memberRecord[0]["date"];
            session_write_close();

            $url = "/youtube/home.php";
            header("Location: $url");
            die();

        } else if ($loginPassword == 0) {
            $loginStatus = "pseudo ou mot de passe invalide.";
            return $loginStatus;
        }
    }
}