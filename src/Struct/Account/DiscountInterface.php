<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Account;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Interface DiscountInterface
 *
 * @package Scn\EvalancheSoapStruct\Struct\Account
 */
interface DiscountInterface extends StructInterface
{
    public function getDescription(): string;

    public function getPercent(): float;

    public function getPrice(): float;
}
