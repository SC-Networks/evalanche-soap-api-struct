<?php

namespace Scn\EvalancheSoapStruct\Struct\Article;

use Scn\EvalancheSoapStruct\Struct\StructInterface;

interface ArticleIndividualizationInterface extends StructInterface
{
    /**
     * Is `true` if a fallback configuration is set
     */
    public function isHasFallback(): bool;

    /**
     * Set the fallback configuration
     */
    public function setHasFallback(bool $hasFallback): void;

    /**
     * @return array<ArticleIndividualizationItemInterface>
     */
    public function getIndividualizationItems(): array;

    /**
     * @param array<ArticleIndividualizationItemInterface> $individualizationItems
     */
    public function setIndividualizationItems(array $individualizationItems): void;
}
