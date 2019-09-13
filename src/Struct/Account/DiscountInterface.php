<?php


namespace Scn\EvalancheSoapStruct\Struct\Account;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Interface DiscountInterface
 *
 * @package Scn\EvalancheSoapStruct\Struct\Account
 */
interface DiscountInterface extends StructInterface
{
    /**
     * @return string
     */
    public function getDescription(): string;

    /**
     * @return float
     */
    public function getPercent(): float;

    /**
     * @return float
     */
    public function getPrice(): float;
}
