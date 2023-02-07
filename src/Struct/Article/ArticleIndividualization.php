<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Article;

/**
 * Represtens the article individualization configuration
 */
class ArticleIndividualization implements ArticleIndividualizationInterface
{
    /**
     * @var bool
     */
    private $hasFallback;

    /**
     * @var array<ArticleIndividualizationItemInterface>
     */
    private $individualizationItems;

    public function __construct(
        bool $hasFallback = false,
        array $individualizationItems = []
    ) {
        $this->hasFallback = $hasFallback;
        $this->individualizationItems = $individualizationItems;
    }

    /**
     * Is `true` if a fallback configuration is set
     */
    public function isHasFallback(): bool
    {
        return $this->hasFallback;
    }

    /**
     * Set the fallback configuration
     */
    public function setHasFallback(bool $hasFallback): void
    {
        $this->hasFallback = $hasFallback;
    }

    /**
     * @return array<ArticleIndividualizationItemInterface>
     */
    public function getIndividualizationItems(): array
    {
        return $this->individualizationItems;
    }

    /**
     * @param array<ArticleIndividualizationItemInterface> $individualizationItems
     */
    public function setIndividualizationItems(array $individualizationItems): void
    {
        $this->individualizationItems = $individualizationItems;
    }
}
