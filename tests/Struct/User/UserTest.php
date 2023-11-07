<?php

namespace Scn\EvalancheSoapStruct\Struct\User;

use Scn\EvalancheSoapStruct\StructTestCase;

/**
 * Class UserTest
 *
 * @package Scn\EvalancheSoapStruct\Struct\User
 */
class UserTest extends StructTestCase
{
    /**
     * @var User
     */
    private $subject;

    public function setUp(): void
    {
        $this->subject = new User(
            1234,
            324,
            'some username',
            'some@mail.de',
            3,
            'some first name',
            'some name',
            'some description',
            3132,
            [
                1,
                2,
                4
            ],
            true,
            'some password'
        );
    }

    public function testGetIdCanReturnInt(): void
    {
        self::assertSame(1234, $this->subject->getId());
    }

    public function testSetIdCanSetInt(): void
    {
        self::assertSame(55, $this->subject->setId(55)->getId());
    }

    public function testGetMandatorIdCanReturnInt(): void
    {
        self::assertSame(324, $this->subject->getMandatorId());
    }

    public function testSetMandatorIdCanSetInt(): void
    {
        self::assertSame(676, $this->subject->setMandatorId(676)->getMandatorId());
    }

    public function testGetUsernameCanReturnString(): void
    {
        self::assertSame('some username', $this->subject->getUsername());
    }

    public function testSetUsernameCanSetString(): void
    {
        self::assertSame('some other username', $this->subject->setUsername('some other username')->getUsername());
    }

    public function testGetEmailCanReturnString(): void
    {
        self::assertSame('some@mail.de', $this->subject->getEmail());
    }

    public function testSetEmailCanSetString(): void
    {
        self::assertSame('some@otheremail.de', $this->subject->setEmail('some@otheremail.de')->getEmail());
    }

    public function testGetSalutationCanReturnInt(): void
    {
        self::assertSame(3, $this->subject->getSalutation());
    }

    public function testSetSalutationIdCanSetInt(): void
    {
        self::assertSame(56, $this->subject->setSalutation(56)->getSalutation());
    }

    public function testGetNameCanReturnString(): void
    {
        self::assertSame('some name', $this->subject->getName());
    }

    public function testSetNameCanSetString(): void
    {
        self::assertSame('some other name', $this->subject->setName('some other name')->getName());
    }

    public function testGetDescriptionCanReturnString(): void
    {
        self::assertSame('some description', $this->subject->getDescription());
    }

    public function testSetDescriptionCanSetString(): void
    {
        self::assertSame('some other description', $this->subject->setDescription('some other description')->getDescription());
    }

    public function testGetSecurityGuideLineIdCanReturnInt(): void
    {
        self::assertSame(3132, $this->subject->getSecurityGuidelineId());
    }

    public function testSetSecurityGuideLineIDCanSetInt(): void
    {
        self::assertSame(333, $this->subject->setSecurityGuidelineId(333)->getSecurityGuidelineId());
    }

    public function testGetRoleIdsCanReturnArray(): void
    {
        self::assertSame([
            1,
            2,
            4
        ], $this->subject->getRoleIds());
    }

    public function testSetRoleIdsCanSetArray(): void
    {
        self::assertSame([5, 4], $this->subject->setRoleIds([5, 4])->getRoleIds());
    }

    public function testGetDisabledCanReturnBool(): void
    {
        self::assertTrue($this->subject->getDisabled());
    }

    public function testSetDisabledCanSetBool(): void
    {
        self::assertFalse($this->subject->setDisabled(false)->getDisabled());
    }

    public function testGetPasswordCanReturnString(): void
    {
        self::assertSame('some password', $this->subject->getPassword());
    }

    public function testSetPasswordCanSetString(): void
    {
        self::assertSame('some other password', $this->subject->setPassword('some other password')->getPassword());
    }

    public function testSetFirstNameCanSetString(): void
    {
        self::assertSame('some other first name', $this->subject->setFirstName('some other first name')->getFirstName());
    }
}
