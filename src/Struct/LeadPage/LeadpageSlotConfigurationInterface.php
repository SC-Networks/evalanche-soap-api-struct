<?php

namespace Scn\EvalancheSoapStruct\Struct\LeadPage;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

interface LeadpageSlotConfigurationInterface extends StructInterface
{
    /**
     * @return list<LeadpageSlotInterface>
     */
    public function getItems(): array;

    /**
     * @param list<LeadpageSlotInterface> $items
     */
    public function setItems(array $items): LeadpageSlotConfigurationInterface;
}
