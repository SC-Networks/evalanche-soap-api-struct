<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\CouponList;

use Scn\EvalancheSoapStruct\GenericSetterGetterTestCase;

class ProfileCouponTest extends GenericSetterGetterTestCase
{
    /** @var ProfileCoupon|null */
    private $subject;

    public function setUp(): void
    {
        $this->subject = new ProfileCoupon();
    }

    public function methodDataProvider(): array
    {
        return [
            ['Code', 'string'],
            ['ProfileId', 'int'],
            ['CreationDAte', 'int'],
        ];
    }

    protected function getSubject()
    {
        return $this->subject;
    }

    public function testGetValidToReturnsValue(): void
    {
        $this->assertSame(
            0,
            $this->subject->getValidTo()
        );
    }
    
    public function testGetIdReturnsValue(): void
    {
        $this->assertSame(
            0,
            $this->subject->getId()
        );
    }
}
