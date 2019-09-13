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
     * @param int $id
     * @param int $mandatorId
     * @param string $username
     * @param string $email
     * @param int $salutation
     * @param string|null $firstName
     * @param string $name
     * @param string $description
     * @param int $securityGuidelineId
     * @param int[] $roleIds
     * @param bool $disabled
     * @param string $password
     */
    public function __construct(
        int $id = 0,
        int $mandatorId = null,
        string $username = null,
        string $email = null,
        int $salutation = null,
        string $firstName = null,
        string $name = null,
        string $description = null,
        int $securityGuidelineId = null,
        array $roleIds = null,
        bool $disabled = null,
        string $password = UserInterface::SCRAMBLED_PASS
    ) {
        $this->id = $id;
        $this->mandatorId = $mandatorId;
        $this->username = $username;
        $this->email = $email;
        $this->salutation = $salutation;
        $this->firstName = $firstName;
        $this->name = $name;
        $this->description = $description;
        $this->securityGuidelineId = $securityGuidelineId;
        $this->roleIds = $roleIds;
        $this->disabled = $disabled;
        $this->password = $password;
        $this->firstName = $firstName;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return User
     */
    public function setId(int $id): User
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getMandatorId(): int
    {
        return $this->mandatorId;
    }

    /**
     * @param int $mandatorId
     *
     * @return User
     */
    public function setMandatorId(int $mandatorId): User
    {
        $this->mandatorId = $mandatorId;
        return $this;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param string $username
     *
     * @return User
     */
    public function setUsername(string $username): User
    {
        $this->username = $username;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     *
     * @return User
     */
    public function setEmail(string $email): User
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return int
     */
    public function getSalutation(): int
    {
        return $this->salutation;
    }

    /**
     * @param int $salutation
     *
     * @return User
     */
    public function setSalutation(int $salutation): User
    {
        $this->salutation = $salutation;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     *
     * @return User
     */
    public function setFirstName(string $firstName): User
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return User
     */
    public function setName(string $name): User
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return User
     */
    public function setDescription(string $description): User
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return int
     */
    public function getSecurityGuidelineId(): int
    {
        return $this->securityGuidelineId;
    }

    /**
     * @param int $securityGuidelineId
     *
     * @return User
     */
    public function setSecurityGuidelineId(int $securityGuidelineId): User
    {
        $this->securityGuidelineId = $securityGuidelineId;
        return $this;
    }

    /**
     * @return array
     */
    public function getRoleIds(): array
    {
        return $this->roleIds;
    }

    /**
     * @param array $roleIds
     *
     * @return User
     */
    public function setRoleIds(array $roleIds): User
    {
        $this->roleIds = $roleIds;
        return $this;
    }

    /**
     * @return bool
     */
    public function getDisabled(): bool
    {
        return $this->disabled;
    }

    /**
     * @param bool $disabled
     *
     * @return User
     */
    public function setDisabled(bool $disabled): User
    {
        $this->disabled = $disabled;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     *
     * @return User
     */
    public function setPassword(string $password): User
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        return get_object_vars($this);
    }
}