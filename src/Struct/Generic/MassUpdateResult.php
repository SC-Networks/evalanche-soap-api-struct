<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Generic;

use Scn\EvalancheSoapStruct\Struct\StructJsonSerializeTrait;

/**
 * Result of a mass profile update.
 * \<updated> and \<created> are HashMaps:
 * Key: id of the updated or created profile, value: value of the field "key_attribute_name"
 *
 * @package Scn\EvalancheSoapStruct\Struct\Generic
 */
class MassUpdateResult implements MassUpdateResultInterface
{
    use StructJsonSerializeTrait;

    /**
     * @var HashMap
     */
    private $updated;

    /**
     * @var HashMap
     */
    private $created;

    /**
     * @var string[]
     */
    private $ignored;

    /**
     * @var int[]
     */
    private $error;

    /**
     * @param HashMapInterface $updated
     * @param HashMapInterface $created
     * @param string[] $ignored
     * @param int[] $error
     */
    public function __construct(
        HashMapInterface $updated = null,
        HashMapInterface $created = null,
        array $ignored = null,
        array $error = null
    ) {
        $this->updated = $updated;
        $this->created = $created;
        $this->ignored = $ignored;
        $this->error = $error;
    }

    /**
     * @return HashMap
     */
    public function getUpdated(): HashMapInterface
    {
        return $this->updated;
    }

    /**
     * @return HashMap
     */
    public function getCreated(): HashMapInterface
    {
        return $this->created;
    }

    /**
     * @return string[]
     */
    public function getIgnored(): array
    {
        return $this->ignored;
    }

    /**
     * @return int[]
     */
    public function getError(): array
    {
        return $this->error;
    }
}
