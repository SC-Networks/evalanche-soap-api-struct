<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Mailing;

class MailingSlotConfiguration implements MailingSlotConfigurationInterface
{
    public function __construct(
        /** @var MailingSlotInterface[] */
        private array $items = []
    ) {
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
