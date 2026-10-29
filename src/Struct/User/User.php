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
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $mandatorId;

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $email;

    /**
     * @var int
     */
    private $salutation;

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $description;

    /**
     * @var int
     */
    private $securityGuidelineId;

    /**
     * @var int[]
     */
    private $roleIds;

    /**
     * @var bool
     */
    private $disabled;

    /**
     * @var string
     */
    private $password;

    /**
     * @param int[] $roleIds
     */
    public function __construct(
        int $id = 0,
        int $mandatorId = 0,
        string $username = '',
        string $email = '',
        int $salutation = 0,
        string $firstName = '',
        string $name = '',
        string $description = '',
        int $securityGuidelineId = 0,
        array $roleIds = [],
        bool $disabled = false,
        string $password = UserInterface::SCRAMBLED_PASS,
    ) {
        $this->id = $id;
        $this->mandatorId = $mandatorId;
        $this->username = $username;
        $this->email = $email;
        $this->salutation = $salutation;
        $this->name = $name;
        $this->description = $description;
        $this->securityGuidelineId = $securityGuidelineId;
        $this->roleIds = $roleIds;
        $this->disabled = $disabled;
        $this->password = $password;
        $this->firstName = $firstName;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): User
    {
        $this->id = $id;
        return $this;
    }

    public function getMandatorId(): int
    {
        return $this->mandatorId;
    }

    public function setMandatorId(int $mandatorId): User
    {
        $this->mandatorId = $mandatorId;
        return $this;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function setUsername(string $username): User
    {
        $this->username = $username;
        return $this;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): User
    {
        $this->email = $email;
        return $this;
    }

    public function getSalutation(): int
    {
        return $this->salutation;
    }

    public function setSalutation(int $salutation): User
    {
        $this->salutation = $salutation;
        return $this;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): User
    {
        $this->firstName = $firstName;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): User
    {
        $this->name = $name;
        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): User
    {
        $this->description = $description;
        return $this;
    }

    public function getSecurityGuidelineId(): int
    {
        return $this->securityGuidelineId;
    }

    public function setSecurityGuidelineId(int $securityGuidelineId): User
    {
        $this->securityGuidelineId = $securityGuidelineId;
        return $this;
    }

    public function getRoleIds(): array
    {
        return $this->roleIds;
    }

    public function setRoleIds(array $roleIds): User
    {
        $this->roleIds = $roleIds;
        return $this;
    }

    public function getDisabled(): bool
    {
        return $this->disabled;
    }

    public function setDisabled(bool $disabled): User
    {
        $this->disabled = $disabled;
        return $this;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): User
    {
        $this->password = $password;
        return $this;
    }
}
