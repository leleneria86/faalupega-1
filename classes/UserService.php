<?php
/**
 * Created by PhpStorm.
 * User: leleneria
 * Date: 12/5/18
 * Time: 6:00 PM
 */

require_once('User.php');

class UserService
{
    private $db_conn;

    public function __construct($db_conn) {

        $this->db_conn = $db_conn;
    }

    public function emailExists($email) {

        if($this->db_conn && $email) {

            $user = $this->getUserByEmail($email);
        }
        return false;
    }
    
    public function getActiveUserByEmail($email){

        if($this->db_conn && $email) {
            // query to check if email exists
            $query = "SELECT user_id, first_name, email, last_name, password
                FROM user
                WHERE email = ? AND status='Active'
                LIMIT 0,1";

            // prepare the query
            $stmt = $this->db_conn->prepare($query);

            // sanitize
            $email = htmlspecialchars(strip_tags($email));

            // bind given email value
            $stmt->bindParam(1, $email);

            // execute the query
            $stmt->execute();

            // get number of rows
            $num = $stmt->rowCount();

            // if email exists, assign values to object properties for easy access and use for php sessions
            if ($num > 0) {

                $user = new User();
                // get record details / values
                $row = $stmt->fetch(PDO::FETCH_ASSOC);

                // assign values to object properties
                $user->setId($row['user_id']);
                $user->setFirstname($row['first_name']);
                $user->setLastname($row['last_name']);
                $user->setPassword($row['password']);
                $user->setEmail($row['email']);

                // return true because email exists in the database
                return $user;
            }
        }

        // return false if email does not exist in the database
        return false;
    }

    public function getUserByEmail($email){

        if($this->db_conn && $email) {
            // query to check if email exists
            $query = "SELECT user_id, first_name, email, last_name, password
                FROM user
                WHERE email = ?
                LIMIT 0,1";

            // prepare the query
            $stmt = $this->db_conn->prepare($query);

            // sanitize
            $email = htmlspecialchars(strip_tags($email));

            // bind given email value
            $stmt->bindParam(1, $email);

            // execute the query
            $stmt->execute();

            // get number of rows
            $num = $stmt->rowCount();

            // if email exists, assign values to object properties for easy access and use for php sessions
            if ($num > 0) {

                $user = new User();
                // get record details / values
                $row = $stmt->fetch(PDO::FETCH_ASSOC);

                // assign values to object properties
                $user->setId($row['user_id']);
                $user->setFirstname($row['first_name']);
                $user->setLastname($row['last_name']);
                $user->setPassword($row['password']);
                $user->setEmail($row['email']);

                // return true because email exists in the database
                return $user;
            }
        }

        // return false if email does not exist in the database
        return false;
    }


    public function getByVerificationCode($verCode){

        if($this->db_conn && $verCode) {
            // query to check if email exists
            $query = "SELECT *
                FROM user
                WHERE verification_code = ?
                LIMIT 0,1";

            // prepare the query
            $stmt = $this->db_conn->prepare($query);

            // sanitize
            $verCode = htmlspecialchars(strip_tags($verCode));

            // bind given email value
            $stmt->bindParam(1, $verCode);

            // execute the query
            $stmt->execute();

            // get number of rows
            $num = $stmt->rowCount();

            // if email exists, assign values to object properties for easy access and use for php sessions
            if ($num > 0) {

                $user = new User();
                // get record details / values
                $row = $stmt->fetch(PDO::FETCH_ASSOC);

                // assign values to object properties
                $user->setId($row['user_id']);
                $user->setFirstname($row['first_name']);
                $user->setLastname($row['last_name']);
                $user->setPassword($row['password']);
                $user->setEmail($row['email']);
                $user->setVerificationCode($row['verification_code']);

                // return true because email exists in the database
                return $user;
            }
        }

        // return false if email does not exist in the database
        return false;
    }

    public function create($user){

        if($this->db_conn && $user instanceof User) {
            // insert query
            $query = 'INSERT INTO user (first_name,last_name,email,password,verification_code) VALUES(?,?,?,?,?)';

            // sanitize
            $firstname = htmlspecialchars(strip_tags($user->getFirstname()));
            $lastname = htmlspecialchars(strip_tags($user->getLastname()));
            $email = htmlspecialchars(strip_tags($user->getEmail()));
            $password = htmlspecialchars(strip_tags($user->getPassword()));
            $verCode = htmlspecialchars(strip_tags($user->getVerificationCode()));

            // hash the password before saving to database
            $password_hash = password_hash($password, PASSWORD_BCRYPT);

            $stmt = $this->db_conn->prepare($query);
            if ($stmt->execute([$firstname, $lastname, $email, $password_hash, $verCode])) {

                return true;
            }
        }

        return false;
    }

    public function updateUserStatus($user){

        if($this->db_conn && $user instanceof User) {

            $query = 'UPDATE user SET status = ? WHERE user_id = ?';

            $stmt = $this->db_conn->prepare($query);
            $status = $user->getStatus();
            $id = $user->getId();
            if ($stmt->execute([$status, $id])) {

                return true;
            }
        }

        return false;
    }
}
