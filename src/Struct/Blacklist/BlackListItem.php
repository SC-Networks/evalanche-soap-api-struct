<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Blacklist;

/**
 * Represents one blacklisted e-mail address with description
 *
 * @package Scn\EvalancheSoapStruct\Struct\Blacklist
 */
class BlackListItem implements BlackListItemInterface
{
    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $description;

    /**
     * @param string $email
     * @param string $description
     */
    public function __construct(string $email = null, string $description = null)
    {
        $this->email = $email;
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
}
