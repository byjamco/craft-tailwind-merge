<?php

namespace byjam\tailwindmerge;

use Craft;
use byjam\tailwindmerge\web\twig\TwMerge;
use craft\base\Plugin;

/**
 * TailwindMerge plugin
 *
 * @method static TailwindMerge getInstance()
 * @author byjam <support@byjam.co>
 * @copyright byjam
 * @license MIT
 */
class TailwindMerge extends Plugin
{
    public string $schemaVersion = '1.0.0';

    public static function config(): array
    {
        return [
            'components' => [
                // Define component configs here...
            ],
        ];
    }

    public function init(): void
    {
        parent::init();

        // Defer most setup tasks until Craft is fully initialized
        Craft::$app->onInit(function() {
            $this->attachEventHandlers();
            // ...
        });
        Craft::$app->view->registerTwigExtension(new TwMerge());
    }

    private function attachEventHandlers(): void
    {
        // Register event handlers here ...
        // (see https://craftcms.com/docs/4.x/extend/events.html to get started)
    }
}
