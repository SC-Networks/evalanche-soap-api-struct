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

    public function __construct(string $email = '', string $description = '')
    {
        $this->email = $email;
        $this->description = $description;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}
