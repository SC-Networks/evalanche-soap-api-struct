<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Mailing;

/**
 * Represents the configuration of a slot in a mailing
 */
class MailingSlot implements MailingSlotInterface
{
    /**
     * @param list<MailingSlotItemInterface> $items
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

    public function setId(int $id): MailingSlotInterface
    {
        $this->id = $id;
        return $this;
    }

    public function getName(): string
    {
        return (string) $this->name;
    }

    public function setName(string $name): MailingSlotInterface
    {
        $this->name = $name;
        return $this;
    }

    public function getSlotNumber(): int
    {
        return (int) $this->slotNumber;
    }

    public function setSlotNumber(int $slotNumber): MailingSlotInterface
    {
        $this->slotNumber = $slotNumber;
        return $this;
    }

    public function getSortTypeId(): int
    {
        return (int) $this->sortTypeId;
    }

    public function setSortTypeId(int $sortTypeId): MailingSlotInterface
    {
        $this->sortTypeId = $sortTypeId;
        return $this;
    }

    public function getSortTypeValue(): int
    {
        return (int) $this->sortTypeValue;
    }

    public function setSortTypeValue(int $sortTypeValue): MailingSlotInterface
    {
        $this->sortTypeValue = $sortTypeValue;
        return $this;
    }

    /** @inheritDoc */
    public function getItems(): array
    {
        return $this->items;
    }

    /** @inheritDoc */
    public function setItems(array $items): MailingSlotInterface
    {
        $this->items = $items;
        return $this;
    }
}
