<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\LeadPage;

/**
 * Represents the configuration of a slot in a leadpage
 */
class LeadpageSlot implements LeadpageSlotInterface
{
    /**
     * @param list<LeadpageSlotItemInterface> $items
     */
    public function __construct(
        private null|int $id = null,
        private null|string $name = null,
        private null|int $slotNumber = null,
        private null|int $sortTypeId = null,
        private null|int $sortTypeValue = null,
        private array $items = []
    ) {
    }

    public function getId(): int
    {
        return (int) $this->id;
    }

    public function setId(int $id): LeadpageSlotInterface
    {
        $this->id = $id;
        return $this;
    }

    public function getName(): string
    {
        return (string) $this->name;
    }

    public function setName(string $name): LeadpageSlotInterface
    {
        $this->name = $name;
        return $this;
    }

    public function getSlotNumber(): int
    {
        return (int) $this->slotNumber;
    }

    public function setSlotNumber(int $slotNumber): LeadpageSlotInterface
    {
        $this->slotNumber = $slotNumber;
        return $this;
    }

    public function getSortTypeId(): int
    {
        return (int) $this->sortTypeId;
    }

    public function setSortTypeId(int $sortTypeId): LeadpageSlotInterface
    {
        $this->sortTypeId = $sortTypeId;
        return $this;
    }

    public function getSortTypeValue(): int
    {
        return (int) $this->sortTypeValue;
    }

    public function setSortTypeValue(int $sortTypeValue): LeadpageSlotInterface
    {
        $this->sortTypeValue = $sortTypeValue;
        return $this;
    }

    /** @inheritdoc */
    public function getItems(): array
    {
        return $this->items;
    }

    public function setItems(array $items): LeadpageSlotInterface
    {
        $this->items = $items;
        return $this;
    }
}
