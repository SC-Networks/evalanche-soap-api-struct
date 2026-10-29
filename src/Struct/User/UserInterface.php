<?php

declare(strict_types=1);

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

    public function getId(): int;

    public function setId(int $id): User;

    public function getMandatorId(): int;

    public function setMandatorId(int $mandatorId): User;

    public function getUsername(): string;

    public function setUsername(string $username): User;

    public function getEmail(): string;

    public function setEmail(string $email): User;

    public function getSalutation(): int;

    public function setSalutation(int $salutation): User;

    public function getFirstName(): string;

    public function setFirstName(string $firstName): User;

    public function getName(): string;

    public function setName(string $name): User;

    public function getDescription(): string;

    public function setDescription(string $description): User;

    public function getSecurityGuidelineId(): int;

    public function setSecurityGuidelineId(int $securityGuidelineId): User;

    public function getRoleIds(): array;

    public function setRoleIds(array $roleIds): User;

    public function getDisabled(): bool;

    public function setDisabled(bool $disabled): User;

    public function getPassword(): string;

    public function setPassword(string $password): User;
}
