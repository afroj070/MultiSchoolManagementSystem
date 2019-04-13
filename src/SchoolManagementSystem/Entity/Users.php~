<?php

namespace SchoolManagementSystem\Entity;

use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Users
 */
class Users implements UserInterface
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $token;

    /**
     * @var string
     */
    private $active;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Users
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Users
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set token
     *
     * @param string $token
     *
     * @return Users
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * Get token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set active
     *
     * @param string $active
     *
     * @return Users
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return string
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Users
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Users
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
    /**
     * @var \SchoolManagementSystem\Entity\Roles
     */
    private $roleId;


    /**
     * Set roleId
     *
     * @param \SchoolManagementSystem\Entity\Roles $roleId
     *
     * @return Users
     */
    public function setRoleId(\SchoolManagementSystem\Entity\Roles $roleId)
    {
        $this->roleId = $roleId;

        return $this;
    }

    /**
     * Get roleId
     *
     * @return \SchoolManagementSystem\Entity\Roles
     */
    public function getRoleId()
    {
        return $this->roleId;
    }
    /**
     * @var \SchoolManagementSystem\Entity\Roles
     */
    private $role;


    /**
     * Set role
     *
     * @param \SchoolManagementSystem\Entity\Roles $role
     *
     * @return Users
     */
    public function setRole(\SchoolManagementSystem\Entity\Roles $role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return \SchoolManagementSystem\Entity\Roles
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Get salt
     *
     * @return string
     */
    public function getSalt()
    {
        return null;
    }
    public function getRoles() {
        return $this->getRole();
    }
    public function getUsername(){
        return $this->getEmail();
    }
    public function eraseCredentials()
    {
        return;
    }
}
