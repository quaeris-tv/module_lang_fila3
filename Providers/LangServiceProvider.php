<?php

declare(strict_types=1);

namespace Modules\Lang\Providers;

use Illuminate\Container\Container;
use Modules\Lang\Services\TranslatorService;
use Modules\Xot\Providers\XotBaseServiceProvider;
use Modules\Xot\Services\BladeService;
use Webmozart\Assert\Assert;

/**
 * Undocumented class.
 */
class LangServiceProvider extends XotBaseServiceProvider
{
    protected string $module_dir = __DIR__;

    protected string $module_ns = __NAMESPACE__;

    public string $module_name = 'lang';

    public function bootCallback(): void
    {
        // BladeService::registerComponents($this->module_dir.'/../View/Components', 'Modules\\Lang');
        $this->registerTranslator();
    }

    public function registerCallback(): void
    {
        // --dalla doc in register ... ma non funziona, funziona in boot
        // $this->registerTranslator();
    }

    public function registerTranslator(): void
    {
        $this->app->singleton('translator', function (Container $app): TranslatorService {
            $loader = $app['translation.loader'];

            // When registering the translator component, we'll need to set the default
            // locale as well as the fallback locale. So, we'll grab the application
            // configuration so we can easily get both of these values from there.
            Assert::string($locale = $app['config']['app.locale']);
            Assert::string($fallback_locale = $app['config']['app.fallback_locale']);

            $translatorService = new TranslatorService($loader, $locale);

            $translatorService->setFallback($fallback_locale);

            /*
            if($app->bound('translation-manager')){
                $trans->setTranslationManager($app['translation-manager']);
            }
            */
            return $translatorService;
        });
    }
}
