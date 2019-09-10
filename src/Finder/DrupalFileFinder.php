<?php

namespace Wunderio\CodingStandards;

use Nette\Utils\Finder;
use Symplify\EasyCodingStandard\Contract\Finder\CustomSourceProviderInterface;

final class DrupalFileFinder implements CustomSourceProviderInterface
{
    /**
     * @param array $source
     * @return iterable|Finder|\SplFileInfo[]|string[]|\Symfony\Component\Finder\Finder
     */
    public function find(array $source)
    {
        return Finder::find('*.php', '*.module','*.install','*.inc')
            ->in($source)
            ->exclude('vendor');
    }
}