<?php

namespace Wunderio\CodingStandards\Finder;

use Symfony\Component\Finder\Finder;
use Symplify\EasyCodingStandard\Contract\Finder\CustomSourceProviderInterface;

final class DrupalFileFinder implements CustomSourceProviderInterface
{
    /**
     * @param array $source
     * @return iterable|Finder|\SplFileInfo[]|string[]|\Symfony\Component\Finder\Finder
     */
    public function find(array $source)
    {
        $files = [];
        foreach ($source as $singleSource) {
            if (is_file($singleSource)) {
                $files = $this->processFile($files, $singleSource);
            } else {
                $files = Finder::create()->files()
                    ->name('*.php')
                    ->name('*.module')
                    ->name('*.install')
                    ->name('*.inc')
                    ->in($singleSource)
                    ->exclude('vendor')
                    ->sortByName();
            }
        }

        return $files;
    }
}
