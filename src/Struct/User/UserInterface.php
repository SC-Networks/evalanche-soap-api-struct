<?php

namespace Scn\EvalancheSoapStruct\Struct\User;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Interface UserInterface
 *
 * @package Scn\EvalancheSoapStruct\Struct\User
 */
interface UserInterface extends StructInterface
{
    const SCRAMBLED_PASS = '*SCRAMBLED*';

    /**
     * @return int
     */
    public function getId(): int;

    /**
     * @param int $id
     *
     * @return User
     */
    public function setId(int $id): User;

    /**
     * @return int
     */
    public function getMandatorId(): int;

    /**
     * @param int $mandatorId
     *
     * @return User
     */
    public function setMandatorId(int $mandatorId): User;

    /**
     * @return string
     */
    public function getUsername(): string;

    /**
     * @param string $username
     *
     * @return User
     */
    public function setUsername(string $username): User;

    /**
     * @return string
     */
    public function getEmail(): string;

    /**
     * @param string $email
     *
     * @return User
     */
    public function setEmail(string $email): User;

    /**
     * @return int
     */
    public function getSalutation(): int;

    /**
     * @param int $salutation
     *
     * @return User
     */
    public function setSalutation(int $salutation): User;

    /**
     * @return string
     */
    public function getFirstName(): string;

    /**
     * @param string $firstName
     *
     * @return User
     */
    public function setFirstName(string $firstName): User;

    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @param string $name
     *
     * @return User
     */
    public function setName(string $name): User;

    /**
     * @return string
     */
    public function getDescription(): string;

    /**
     * @param string $description
     *
     * @return User
     */
    public function setDescription(string $description): User;

    /**
     * @return int
     */
    public function getSecurityGuidelineId(): int;

    /**
     * @param int $securityGuidelineId
     *
     * @return User
     */
    public function setSecurityGuidelineId(int $securityGuidelineId): User;

    /**
     * @return array
     */
    public function getRoleIds(): array;

    /**
     * @param array $roleIds
     *
     * @return User
     */
    public function setRoleIds(array $roleIds): User;

    /**
     * @return bool
     */
    public function getDisabled(): bool;

    /**
     * @param bool $disabled
     *
     * @return User
     */
    public function setDisabled(bool $disabled): User;

    /**
     * @return string
     */
    public function getPassword(): string;

    /**
     * @param string $password
     *
     * @return User
     */
    public function setPassword(string $password): User;
}
