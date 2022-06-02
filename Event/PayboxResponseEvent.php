<?php

namespace Lexik\Bundle\PayboxBundle\Event;

use Symfony\Contracts\EventDispatcher\Event;

/**
 * PayboxResponseEvent class.
 *
 * @author Olivier Maisonneuve <o.maisonneuve@lexik.fr>
 */
class PayboxResponseEvent extends Event
{
    /**
     * @var array
     */
    private $data;

    /**
     * @var bool
     */
    private $verified;

    /**
     * Constructor.
     *
     * @param bool $verified
     */
    public function __construct(array $data, $verified = false)
    {
        $this->data = $data;
        $this->verified = (bool) $verified;
    }

    /**
     * Returns all parameters sent on IPN.
     *
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Returns true if signature verification was successful.
     *
     * @return bool
     */
    public function isVerified()
    {
        return $this->verified;
    }
}