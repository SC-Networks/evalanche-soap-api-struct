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

    public function testGetIdCanReturnInt()
    {
        $this->assertSame(1234, $this->subject->getId());
    }

    public function testSetIdCanSetInt()
    {
        $this->assertSame(55, $this->subject->setId(55)->getId());
    }

    public function testGetMandatorIdCanReturnInt()
    {
        $this->assertSame(324, $this->subject->getMandatorId());
    }

    public function testSetMandatorIdCanSetInt()
    {
        $this->assertSame(676, $this->subject->setMandatorId(676)->getMandatorId());
    }

    public function testGetUsernameCanReturnString()
    {
        $this->assertSame('some username', $this->subject->getUsername());
    }

    public function testSetUsernameCanSetString()
    {
        $this->assertSame(
            'some other username',
            $this->subject->setUsername('some other username')->getUsername()
        );
    }

    public function testGetEmailCanReturnString()
    {
        $this->assertSame('some@mail.de', $this->subject->getEmail());
    }

    public function testSetEmailCanSetString()
    {
        $this->assertSame(
            'some@otheremail.de',
            $this->subject->setEmail('some@otheremail.de')->getEmail()
        );
    }

    public function testGetSalutationCanReturnInt()
    {
        $this->assertSame(3, $this->subject->getSalutation());
    }

    public function testSetSalutationIdCanSetInt()
    {
        $this->assertSame(56, $this->subject->setSalutation(56)->getSalutation());
    }

    public function testGetNameCanReturnString()
    {
        $this->assertSame('some name', $this->subject->getName());
    }

    public function testSetNameCanSetString()
    {
        $this->assertSame('some other name', $this->subject->setName('some other name')->getName());
    }

    public function testGetDescriptionCanReturnString()
    {
        $this->assertSame('some description', $this->subject->getDescription());
    }

    public function testSetDescriptionCanSetString()
    {
        $this->assertSame(
            'some other description',
            $this->subject->setDescription('some other description')->getDescription()
        );
    }

    public function testGetSecurityGuideLineIdCanReturnInt()
    {
        $this->assertSame(3132, $this->subject->getSecurityGuidelineId());
    }

    public function testSetSecurityGuideLineIDCanSetInt()
    {
        $this->assertSame(333, $this->subject->setSecurityGuidelineId(333)->getSecurityGuidelineId());
    }

    public function testGetRoleIdsCanReturnArray()
    {
        $this->assertSame(
            [
                1,
                2,
                4
            ],
            $this->subject->getRoleIds()
        );
    }

    public function testSetRoleIdsCanSetArray()
    {
        $this->assertSame([5, 4], $this->subject->setRoleIds([5, 4])->getRoleIds());
    }

    public function testGetDisabledCanReturnBool()
    {
        $this->assertTrue($this->subject->getDisabled());
    }

    public function testSetDisabledCanSetBool()
    {
        $this->assertFalse($this->subject->setDisabled(false)->getDisabled());
    }

    public function testGetPasswordCanReturnString()
    {
        $this->assertSame('some password', $this->subject->getPassword());
    }

    public function testSetPasswordCanSetString()
    {
        $this->assertSame('some other password', $this->subject->setPassword('some other password')->getPassword());
    }

    public function testSetFirstNameCanSetString()
    {
        $this->assertSame('some other first name',
            $this->subject->setFirstName('some other first name')->getFirstName());
    }
}
