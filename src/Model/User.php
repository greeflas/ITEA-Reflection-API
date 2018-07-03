<?php

namespace App\Model;

/**
 * User model.
 *
 * @author Vladimir Kuprienko <vldmr.kuprienko@gmail.com>
 */
class User
{
    /**
     * User's nickname.
     *
     * @var string
     */
    private $username;

    /**
     * @return string|null Returns user's nickname or null if it not set.
     */
    public function getUsername(): ?string
    {
        return $this->username;
    }
}
