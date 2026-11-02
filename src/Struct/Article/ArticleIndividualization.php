<?php

declare(strict_types=1);

namespace Scn\EvalancheSoapStruct\Struct\Article;

/**
 * Represtens the article individualization configuration
 */
class ArticleIndividualization implements ArticleIndividualizationInterface
{
    public function __construct(
        private null|bool $hasFallback = null,
        /**
         * @var array<ArticleIndividualizationItemInterface>
         */
        private array $individualizationItems = []
    ) {
    }

    /**
     * Is `true` if a fallback configuration is set
     */
    public function isHasFallback(): bool
    {
        return (bool) $this->hasFallback;
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
