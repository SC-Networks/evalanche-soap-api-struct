<?php

namespace Scn\EvalancheSoapStruct\Struct;

trait StructJsonSerializeTrait {

  /**
   * @return array
   */
  public function jsonSerialize(): array
  {
      return get_object_vars($this);
  }
}