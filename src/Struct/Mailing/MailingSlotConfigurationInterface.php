<?php

namespace Scn\EvalancheSoapStruct\Struct\Mailing;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

interface MailingSlotConfigurationInterface extends StructInterface
{
    /**
     * @return MailingSlotInterface[]
     */
    public function getItems(): array;

    /**
     * @param MailingSlotInterface[] $items
     */
    public function setItems(array $items): MailingSlotConfigurationInterface;
}
