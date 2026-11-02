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
    public function __construct(
        private null|string $email = null,
        private null|string $description = null
    ) {
    }

    public function getEmail(): string
    {
        return (string) $this->email;
    }

    public function getDescription(): string
    {
        return (string) $this->description;
    }
}
