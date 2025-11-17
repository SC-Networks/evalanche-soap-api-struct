<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\LeadPage;

class LeadpageSlotConfiguration implements LeadpageSlotConfigurationInterface
{
    /** @var list<LeadpageSlotInterface> */
    private $items;

    /**
     * @param list<LeadpageSlotInterface> $items
     */
    public function __construct(
        array $items = null
    ) {
        $this->items = $items;
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
