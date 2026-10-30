<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Generic;

use Scn\EvalancheSoapStruct\Struct\Exception\StructNotHydratedException;

/**
 * Result of a mass profile update.
 * \<updated> and \<created> are HashMaps:
 * Key: id of the updated or created profile, value: value of the field "key_attribute_name"
 *
 * @package Scn\EvalancheSoapStruct\Struct\Generic
 */
class MassUpdateResult implements MassUpdateResultInterface
{
    /**
     * @param string[] $ignored
     * @param int[] $error
     */
    public function __construct(
        private null|HashMapInterface $updated = null,
        private null|HashMapInterface $created = null,
        private array $ignored = [],
        private array $error = []
    ) {
    }

    /**
     * @return HashMap
     */
    public function getUpdated(): HashMapInterface
    {
        if (!$this->updated instanceof HashMapInterface) {
            throw new StructNotHydratedException();
        }
        return $this->updated;
    }

    /**
     * @return HashMap
     */
    public function getCreated(): HashMapInterface
    {
        if (!$this->created instanceof HashMapInterface) {
            throw new StructNotHydratedException();
        }
        return $this->created;
    }

    /**
     * Returns the list of profile ids which have been ignored
     *
     * @return string[]
     */
    public function getIgnored(): array
    {
        return $this->ignored;
    }

    /**
     * Returns the list of profile ids which caused errors
     *
     * @return int[]
     */
    public function getError(): array
    {
        return $this->error;
    }
}
