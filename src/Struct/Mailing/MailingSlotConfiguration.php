<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Mailing;

class MailingSlotConfiguration implements MailingSlotConfigurationInterface
{
    /** @var MailingSlotInterface[] */
    private $items;

    public function __construct(
        array $items = null
    ) {
        $this->items = $items;
    }

    /**
     * @return MailingSlotInterface[]
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param MailingSlotInterface[] $items
     */
    public function setItems(array $items): MailingSlotConfigurationInterface
    {
        $this->items = $items;
        
        return $this;
    }
}