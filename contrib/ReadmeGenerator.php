<?php

/**
 * Usage: Open a terminal, navigate to project root, execute: php contrib/ReadmeGenerator.php > README.md
 */

require __DIR__.'/../vendor/autoload.php';

(new ReadmeGenerator())->generateMarkdown();

final class ReadmeGenerator
{

    const MARKUP_CODE = "```".PHP_EOL;
    const MARKUP_H2 = '## ';
    const MARKUP_H3 = '### ';
    const MARKUP_H4 = '#### ';
    const MARKUP_H5 = '##### ';
    const MARKUP_H6 = '###### ';

    private function generateClassmap()
    {
        $folders = [
            'Account',
            'Blacklist',
            'Container',
            'Generic',
            'Mailing',
            'Mandator',
            'Pool',
            'Profile',
            'Scoring',
            'SmartLink',
            'Statistic',
            'TargetGroup',
            'User',
            'Workflow'
        ];

        $classmap = [];
        foreach ($folders as $folder) {

            $classPaths = glob(__DIR__.'/../src/Struct/'.$folder.'/*.php');
            $namespace = "\\Scn\\EvalancheSoapStruct\\Struct\\$folder\\";
            $classes = [];
            foreach ($classPaths as $classPath) {

                $segments = explode('/', $classPath);
                $segments = explode('\\', $segments[count($segments) - 1]);
                $className = $segments[count($segments) - 1];
                if (strrpos($className, 'Interface.php') !== false) {

                    continue;
                }

                $className = str_replace('.php', '', $className);
                $classes[] = $namespace.$className;
            }
            $classmap[$folder] = $classes;
        }

        return $classmap;
    }

    public function generateMarkdown()
    {
        echo "# EVALANCHE SOAP API STRUCT

[![Monthly Downloads](https://poser.pugx.org/scn/evalanche-soap-api-struct/d/monthly)](https://packagist.org/packages/scn/evalanche-soap-api-struct)
[![License](https://poser.pugx.org/scn/evalanche-soap-api-struct/license)](LICENSE)
[![Build Status](https://travis-ci.org/SC-Networks/evalanche-soap-api-struct.svg?branch=master)](https://travis-ci.org/SC-Networks/evalanche-soap-api-struct)

## Models
";

        foreach ($this->generateClassmap() as $folder => $classes) {
            echo self::MARKUP_H3.$folder.PHP_EOL;
            foreach ($classes as $class_name) {

                $class = new \ReflectionClass($class_name);

                if ($class->isInstantiable()) {
                    $short_name = $class->getShortName();
                    echo self::MARKUP_H5.$short_name.PHP_EOL;

                    // get first lines from class doc block until the first line with an @ sign in it
                    if (preg_match('/ \* ([^@\/]*)\n/i', $class->getDocComment(), $matches)) {
                        $description = $matches[1];
                        // remove asterisks
                        $description = str_replace('*', '', $description);

                        // trim lines and replace newline characters with <br> tags
                        $descriptionLines = explode(PHP_EOL, $description);
                        array_walk($descriptionLines, function ($value) {
                            return trim($value);
                        });
                        echo implode('<br>'.PHP_EOL, $descriptionLines);
                    }

                    $constructor = $class->getConstructor();
                    $parameters = $constructor->getParameters();

                    echo self::MARKUP_CODE;
                    echo $short_name.'('.PHP_EOL;

                    foreach ($parameters as $param) {
                        echo "    ".$param->getType()->getName();
                        if ($param->isArray()) {
                            $docBlock = $constructor->getDocComment();
                            $matches = [];
                            if (preg_match('/@param ([a-z]*)\[\] \$/i', $docBlock, $matches)) {
                                echo '('.$matches[1].')';
                            }
                        }
                        echo ' <'.$param->getName().'>'.PHP_EOL;
                    }

                    echo ')'.PHP_EOL;
                    echo self::MARKUP_CODE;
                }
            }
        }
    }
}
