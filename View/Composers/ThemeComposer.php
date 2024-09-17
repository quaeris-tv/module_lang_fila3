<?php

declare(strict_types=1);

namespace Modules\Lang\View\Composers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Modules\Lang\Datas\LangData;
use Spatie\LaravelData\DataCollection;

class ThemeComposer
{
    /**
     * Get all supported languages as a DataCollection.
     *
     * @throws \Exception if supportedLocales config is not an array
     *
     * @return DataCollection<LangData>
     */
    public function languages(): DataCollection
    {
        $langs = config('laravellocalization.supportedLocales');

        if (! is_array($langs)) {
            throw new \Exception(sprintf('Invalid config for supportedLocales on line %d in %s', __LINE__, class_basename($this)));
        }

        $languages = collect($langs)->map(function (mixed $item, string $locale): array {
            // Ensure $item is an array as expected, otherwise handle error.
            if (! is_array($item) || ! isset($item['regional'], $item['name'])) {
                throw new \InvalidArgumentException(sprintf('Expected array with "regional" and "name" keys at locale %s', $locale));
            }

            // Extract regional code and handle 'en' to 'gb' mapping.
            $regionalCode = explode('_', (string) $item['regional'])[0] ?? 'en';
            if ('en' === $regionalCode) {
                $regionalCode = 'gb';
            }

            $url = '#'; // Placeholder URL for frontend.
            if (inAdmin()) {
                $url = $this->buildAdminLanguageUrl($locale);
            }

            return [
                'id' => $locale,
                'name' => $item['name'],
                'flag' => $this->buildFlagHtml($regionalCode),
                'url' => $url,
            ];
        });

        return LangData::collection($languages->all());
    }

    /**
     * Get all languages except the current one.
     *
     * @return DataCollection<LangData>
     */
    public function otherLanguages(): DataCollection
    {
        $currentLocale = app()->getLocale();

        return $this->languages()->filter(function (LangData $language) use ($currentLocale): bool {
            return $language->id !== $currentLocale;
        });
    }

    /**
     * Get a specific field of the current language.
     *
     * @throws \Exception if the current language is not found
     */
    public function currentLang(string $field): string
    {
        $currentLocale = app()->getLocale();

        $currentLang = $this->languages()->firstWhere('id', $currentLocale);

        if (! $currentLang instanceof LangData) {
            throw new \Exception(sprintf('Current language not found on line %d in %s', __LINE__, class_basename($this)));
        }

        return (string) $currentLang->{$field};
    }

    /**
     * Build the URL for the admin panel based on the current route and parameters.
     */
    private function buildAdminLanguageUrl(string $locale): string
    {
        $routeName = Route::currentRouteName();
        $routeParameters = array_merge(getRouteParameters(), ['lang' => $locale]);
        $queryParameters = request()->all();

        $url = route($routeName, $routeParameters);

        return Request::create($url)->fullUrlWithQuery($queryParameters);
    }

    /**
     * Build the HTML for the language flag.
     */
    private function buildFlagHtml(string $regionalCode): string
    {
        return sprintf(
            '<div class="iti__flag-box"><div class="iti__flag iti__%s"></div></div>',
            e($regionalCode)
        );
    }
}
