<?php

$finder = (new PhpCsFixer\Finder())
    ->in([__DIR__.'/src', __DIR__.'/tests'])
    ->append([__FILE__])
;

return (new PhpCsFixer\Config())
    ->setRules([
        '@Symfony' => true,
        'global_namespace_import' => false,
        'no_superfluous_phpdoc_tags' => false,
        'phpdoc_align' => false,
        'yoda_style' => false,
        'increment_style' => false,
        'phpdoc_to_comment' => false,
    ])
    ->setFinder($finder)
;
