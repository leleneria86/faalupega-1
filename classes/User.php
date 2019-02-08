<?php
/**
 * Created by PhpStorm.
 * User: leleneria
 * Date: 12/5/18
 * Time: 6:00 PM
 */
class User
{
    private $db_conn;
    private $id;
    private $firstname;
    private $lastname;
    private $email;
    private $password;
    private $status;
    private $verificationCode;

    const ACTIVE = 'active';
    const INACTIVE = 'inactive';
    const DELETED = 'deleted';

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param mixed $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param mixed $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getVerificationCode()
    {
        return $this->verificationCode;
    }

    /**
     * @param mixed $verificationCode
     */
    public function setVerificationCode($verificationCode)
    {
        $this->verificationCode = $verificationCode;
    }

    public function __construct($db_conn) {

        $this->db_conn = $db_conn;
    }

    public function login($email, $password) {

        $password_hash = password_hash($password, PASSWORD_BCRYPT);
        $stmt = $this->db_conn->prepare('SELECT * FROM user WHERE email=? AND password=?');
        $stmt->execute([$email, $password_hash]);
        return $stmt->fetch();
    }
}
