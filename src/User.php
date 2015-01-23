<?php

namespace Unitato\Init;

/**
 * Class User
 *
 * @package Unitato\Init
 *
 * @Entity
 * @Table(name="unitato_user")
 */
class User 
{
    /**
     * @var  int
     *
     * @Id
     * @GeneratedValue(strategy="AUTO")
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var string
     * @Column(name="username", type="string", length=20)
     */
    private $username;

    /**
     * @var string
     *
     * @Column(name="password", type="string", length=20)
     */
    private $password;

    /**
     * @var string
     *
     * @Column(name="mail", type="string", length=50)
     */
    private $mail;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;

    }

    /**
     * @param string $username
     * @return User
     * @throws \Exception
     */
    public function setUsername($username)
    {
        if (is_string($username))
            $this->username = $username;
        else
            throw new \Exception('Username must be a string');

        return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return User
     * @throws \Exception
     */
    public function setPassword($password)
    {
        if (is_string($password))
            $this->password = $password;
        else
            throw new \Exception('Password must be a string');

        return $this;
    }

    /**
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * @param string $mail
     * @return User
     * @throws \Exception
     */
    public function setMail($mail)
    {
        if (is_string($mail))
            $this->mail = $mail;
        else
            throw new \Exception('Password must be a string');

        return $this;
    }


}