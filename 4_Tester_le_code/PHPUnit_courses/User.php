<?php

/**
 * User
 * 
 * Un user du systeme
 */

class User 
{
    /**
     * First name
     * @var string
     */
    public $first_name;

    /**
     * Last name
     * @var string
     */
    public $surname;

    /**
     * Get du nom complet du user a partir du first name et du surname
     * 
     * @return string Le nom complet du user
     */
    public function getFullName()
    {
        return trim("$this->first_name $this->surname");
    }
}
