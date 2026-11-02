<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\LeadPage;

class LeadpageSlotConfiguration implements LeadpageSlotConfigurationInterface
{
    /**
     * @param list<LeadpageSlotInterface> $items
     */
    public function __construct(
        private array $items = []
    ) {
    }

    /**
     * @return list<LeadpageSlotInterface>
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param list<LeadpageSlotInterface> $items
     */
    public function setItems(array $items): LeadpageSlotConfigurationInterface
    {
        $this->items = $items;
        
        return $this;
    }
}
