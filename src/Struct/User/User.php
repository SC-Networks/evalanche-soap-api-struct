<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\User;

/**
 * Represents a user in Evalanche.
 * Contains basic information about the user's name, e-mail, mandator assignment,
 * current status, roles, and any security policies used.
 *
 * @package Scn\EvalancheSoapStruct\Struct\User
 */
class User implements UserInterface
{
    /**
     * @param list<int> $roleIds
     */
    public function __construct(
        private null|int $id = null,
        private null|int $mandatorId = null,
        private null|string $username = null,
        private null|string $email = null,
        private null|int $salutation = null,
        private null|string $firstName = null,
        private null|string $name = null,
        private null|string $description = null,
        private null|int $securityGuidelineId = null,
        private array $roleIds = [],
        private null|bool $disabled = null,
        private null|string $password = null
    ) {
    }

    public function getId(): int
    {
        return (int) $this->id;
    }

    public function setId(int $id): User
    {
        $this->id = $id;
        return $this;
    }

    public function getMandatorId(): int
    {
        return (int) $this->mandatorId;
    }

    public function setMandatorId(int $mandatorId): User
    {
        $this->mandatorId = $mandatorId;
        return $this;
    }

    public function getUsername(): string
    {
        return (string) $this->username;
    }

    public function setUsername(string $username): User
    {
        $this->username = $username;
        return $this;
    }

    public function getEmail(): string
    {
        return (string) $this->email;
    }

    public function setEmail(string $email): User
    {
        $this->email = $email;
        return $this;
    }

    public function getSalutation(): int
    {
        return (int) $this->salutation;
    }

    public function setSalutation(int $salutation): User
    {
        $this->salutation = $salutation;
        return $this;
    }

    public function getFirstName(): string
    {
        return (string) $this->firstName;
    }

    public function setFirstName(string $firstName): User
    {
        $this->firstName = $firstName;
        return $this;
    }

    public function getName(): string
    {
        return (string) $this->name;
    }

    public function setName(string $name): User
    {
        $this->name = $name;
        return $this;
    }

    public function getDescription(): string
    {
        return (string) $this->description;
    }

    public function setDescription(string $description): User
    {
        $this->description = $description;
        return $this;
    }

    public function getSecurityGuidelineId(): int
    {
        return (int) $this->securityGuidelineId;
    }

    public function setSecurityGuidelineId(int $securityGuidelineId): User
    {
        $this->securityGuidelineId = $securityGuidelineId;
        return $this;
    }

    /** @inheritDoc */
    public function getRoleIds(): array
    {
        return $this->roleIds;
    }

    /** @inheritDoc */
    public function setRoleIds(array $roleIds): User
    {
        $this->roleIds = $roleIds;
        return $this;
    }

    public function getDisabled(): bool
    {
        return (bool) $this->disabled;
    }

    public function setDisabled(bool $disabled): User
    {
        $this->disabled = $disabled;
        return $this;
    }

    public function getPassword(): string
    {
        return $this->password ?? UserInterface::SCRAMBLED_PASS;
    }

    public function setPassword(string $password): User
    {
        $this->password = $password;
        return $this;
    }
}
