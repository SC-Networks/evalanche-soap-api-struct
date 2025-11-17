<?php

namespace Scn\EvalancheSoapStruct\Struct\LeadPage;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

/**
 * Represents the configuration of a slot in a leadpage
 */
interface LeadpageSlotInterface extends StructInterface
{
    public function getId(): int;

    public function setId(int $id): LeadpageSlotInterface;

    public function getName(): string;

    public function setName(string $name): LeadpageSlotInterface;

    public function getSlotNumber(): int;

    public function setSlotNumber(int $slotNumber): LeadpageSlotInterface;

    public function getSortTypeId(): int;

    public function setSortTypeId(int $sortTypeId): LeadpageSlotInterface;

    public function getSortTypeValue(): int;

    public function setSortTypeValue(int $sortTypeValue): LeadpageSlotInterface;

    /**
     * @return list<LeadpageSlotItemInterface>
     */
    public function getItems(): array;

    /**
     * @param list<LeadpageSlotItemInterface> $items
     */
    public function setItems(array $items): LeadpageSlotInterface;
}
