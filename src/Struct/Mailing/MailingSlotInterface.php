<?php

namespace Scn\EvalancheSoapStruct\Struct\Mailing;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Represents the configuration of a slot in a mailing
 */
interface MailingSlotInterface extends StructInterface
{
    public function getId(): int;

    public function setId(int $id): MailingSlotInterface;

    public function getName(): string;

    public function setName(string $name): MailingSlotInterface;

    public function getSlotNumber(): int;

    public function setSlotNumber(int $slotNumber): MailingSlotInterface;

    public function getSortTypeId(): int;

    public function setSortTypeId(int $sortTypeId): MailingSlotInterface;

    public function getSortTypeValue(): int;

    public function setSortTypeValue(int $sortTypeValue): MailingSlotInterface;

    /**
     * @return MailingSlotItemInterface[]
     */
    public function getItems(): array;

    public function setItems(array $items): MailingSlotInterface;
}
