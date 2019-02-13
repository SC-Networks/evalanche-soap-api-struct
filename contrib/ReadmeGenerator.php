<?php

/**
 * Usage: Open a terminal, navigate to project root, execute: composer documentation
 */

require __DIR__ . '/../vendor/autoload.php';

final class ReadmeDocument
{

    private $namespace;

    private $title;

    private $docConstructor;

    private $docMethod;

    public function __construct(array $namespace, string $title = '', bool $docConstructor = true, bool $docMethod = true)
    {
        $this->namespace = $namespace;
        $this->title = $title;
        $this->docConstructor = $docConstructor;
        $this->docMethod = $docMethod;
    }

    public function getNamespace(): array
    {
        return $this->namespace;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getDocConstructor(): bool
    {
        return $this->docConstructor;
    }

    public function getDocMethod(): bool
    {
        return $this->docMethod;
    }
}

final class ReadmeGenerator
{
    const MARKUP_CODE = "```" . PHP_EOL;
    const MARKUP_H2 = '## ';
    const MARKUP_H3 = '### ';
    const MARKUP_H4 = '#### ';
    const MARKUP_H5 = '##### ';
    const MARKUP_H6 = '###### ';

    public function generateMarkdown(ReadmeDocument $readmeDocument): ReadmeGenerator
    {
        echo self::MARKUP_H2 . $readmeDocument->getTitle();

        foreach ($this->getClassmap($readmeDocument) as $folder => $classes) {
            echo self::MARKUP_H3 . $folder . PHP_EOL;
            foreach ($classes as $class_name) {
                $class = new \ReflectionClass($class_name);
                if ($class->isInstantiable()) {
                    $short_name = $class->getShortName();
                    echo self::MARKUP_H5 . $short_name . PHP_EOL;
                    echo $this->parseComment($class);

                    if ($readmeDocument->getDocConstructor()) {
                        echo $this->parseParam($class->getConstructor(), $short_name);
                    }

                    if ($readmeDocument->getDocMethod()) {
                        $methods = $class->getMethods();

                        foreach ($methods as $method) {
                            echo $this->parseComment($method);
                            echo $this->parseParam($method, $method->getName());
                        }
                    }
                }
            }
        }

        echo '<br>' . PHP_EOL;

        return $this;
    }

    private function parseComment(Reflector $reflector): ?string
    {
        // get first lines from class doc block until the first line with an @ sign in it
        if (preg_match('/ \* ([^@\/]*)\n/i', $reflector->getDocComment(), $matches)) {
            $description = $matches[1];
            // remove asterisks
            $description = str_replace('*', '', $description);
            // trim lines and replace newline characters with <br> tags
            $descriptionLines = explode(PHP_EOL, $description);
            array_walk($descriptionLines, function ($value) {
                return trim($value);
            });
            return implode('<br>' . PHP_EOL, $descriptionLines);
        }
    }

    private function parseParam(Reflector $reflector, string $title): string
    {
        $lines = self::MARKUP_CODE;
        $lines .= $title . '(' . PHP_EOL;
        foreach ($reflector->getParameters() as $param) {
            $lines .= "    " . $param->getType()->getName();
            if ($param->isArray()) {
                $docBlock = $reflector->getDocComment();
                $matches = [];
                if (preg_match('/@param ([a-z]*)\[\] \$/i', $docBlock, $matches)) {
                    $lines .= '(' . $matches[1] . ')';
                }
            }
            $lines .= ' <' . $param->getName() . '>' . PHP_EOL;
        }
        $lines .= ')' . PHP_EOL;
        $lines .= self::MARKUP_CODE;

        return $lines;
    }

    private function getClassmap(ReadmeDocument $readmeDocument): array
    {
        $classMap = [];

        foreach ($readmeDocument->getNamespace() as $singleNamespace) {
            $classMap[substr(strrchr($singleNamespace, '\/'), 1)] = \HaydenPierce\ClassFinder\ClassFinder::getClassesInNamespace($singleNamespace);
        }

        return $classMap;
    }
}

$readmeDocumentFactory = new ReadmeDocument(
    [
        'Scn\EvalancheSoapStruct\Factory',
    ],
    'Factorys' . PHP_EOL,
    false,
    true
);

$readmeDocumentStruct = new ReadmeDocument(
    [
        'Scn\EvalancheSoapStruct\Struct\Account',
        'Scn\EvalancheSoapStruct\Struct\Blacklist',
        'Scn\EvalancheSoapStruct\Struct\Container',
        'Scn\EvalancheSoapStruct\Struct\Generic',
        'Scn\EvalancheSoapStruct\Struct\Mailing',
        'Scn\EvalancheSoapStruct\Struct\Mandator',
        'Scn\EvalancheSoapStruct\Struct\Pool',
        'Scn\EvalancheSoapStruct\Struct\Profile',
        'Scn\EvalancheSoapStruct\Struct\Scoring',
        'Scn\EvalancheSoapStruct\Struct\SmartLink',
        'Scn\EvalancheSoapStruct\Struct\Statistic',
        'Scn\EvalancheSoapStruct\Struct\TargetGroup',
        'Scn\EvalancheSoapStruct\Struct\User',
        'Scn\EvalancheSoapStruct\Struct\Workflow',
    ],
    'Models' . PHP_EOL,
    true,
    false
);


(new ReadmeGenerator())
    ->generateMarkdown($readmeDocumentFactory)
    ->generateMarkdown($readmeDocumentStruct);
die();
