<?php

namespace byjam\tailwindmerge\web\twig;

use Craft;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

/**
 * Twig extension
 */
class TwMerge extends AbstractExtension
{
    public function getFunctions()
    {
        return [
            new TwigFunction('twMerge', function($initialClasses, $secondaryClasses = null) {
				$tw = \TailwindMerge\TailwindMerge::instance();
				return $tw->merge($initialClasses, $secondaryClasses);
            }),
        ];
    }
}
