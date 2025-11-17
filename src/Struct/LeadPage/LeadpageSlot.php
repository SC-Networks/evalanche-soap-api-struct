<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\LeadPage;

/**
 * Represents the configuration of a slot in a leadpage
 */
class LeadpageSlot implements LeadpageSlotInterface
{
    /** @var int */
    private $id;
    
    /** @var string */
    private $name;
    
    /** @var int */
    private $slotNumber;
    
    /** @var int */
    private $sortTypeId;
    
    /** @var int */
    private $sortTypeValue;
    
    /** @var list<LeadpageSlotItemInterface> */
    private $items;

    /**
     * @param list<LeadpageSlotItemInterface> $items
     */
    public function __construct(
        int $id = null,
        string $name = null,
        int $slotNumber = null,
        int $sortTypeId = null,
        int $sortTypeValue = null,
        array $items = null
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->slotNumber = $slotNumber;
        $this->sortTypeId = $sortTypeId;
        $this->sortTypeValue = $sortTypeValue;
        $this->items = $items;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): LeadpageSlotInterface
    {
        $this->id = $id;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): LeadpageSlotInterface
    {
        $this->name = $name;
        return $this;
    }

    public function getSlotNumber(): int
    {
        return $this->slotNumber;
    }

    public function setSlotNumber(int $slotNumber): LeadpageSlotInterface
    {
        $this->slotNumber = $slotNumber;
        return $this;
    }

    public function getSortTypeId(): int
    {
        return $this->sortTypeId;
    }

    public function setSortTypeId(int $sortTypeId): LeadpageSlotInterface
    {
        $this->sortTypeId = $sortTypeId;
        return $this;
    }

    public function getSortTypeValue(): int
    {
        return $this->sortTypeValue;
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
