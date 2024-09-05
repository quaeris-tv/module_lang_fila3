<?php

declare(strict_types=1);

namespace Modules\Lang\View\Composers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Modules\Lang\Datas\LangData;
use Spatie\LaravelData\DataCollection;

/**
 * --.
 */
class ThemeComposer
{
    /**
     * Undocumented function.
     *
     * @return DataCollection<LangData>
     */
    public function languages(): DataCollection
    {
        app()->getLocale();
        $langs = config('laravellocalization.supportedLocales');
        if (! is_array($langs)) {
            throw new \Exception('['.__LINE__.']['.__FILE__.']');
        }
        $langs = collect($langs)->map(
            function (array $item, $k): array {
                $reg = collect(explode('_', (string) $item['regional']))->first();
                if ('en' === $reg) {
                    $reg = 'gb';
                }
                $url = '#'; // devo fare ancora front
                if (inAdmin()) {
                    $route_name = (string) Route::currentRouteName();
                    $route_parameters = getRouteParameters();
                    $data = request()->all();
                    $route_parameters['lang'] = $k;
                    $url = route($route_name, $route_parameters);
                    $url = Request::create($url)->fullUrlWithQuery($data);
                }

                return [
                    'id' => $k,
                    'name' => $item['name'],
                    'flag' => '<div class="iti__flag-box"><div class="iti__flag iti__'.$reg.'"></div></div>',
                    'url' => $url,
                ];
            }
        );

        /**
         * @var DataCollection<LangData>
         */
        $res = LangData::collect($langs->all(), DataCollection::class);

        return $res;
    }

    /**
     * Undocumented function.
     *
     *  * @return DataCollection<LangData>
     */
    public function otherLanguages(): DataCollection
    {
        $curr = app()->getLocale();

        return $this->languages()
            ->filter(function ($item) use ($curr): bool {
                if (! $item instanceof LangData) {
                    throw new \Exception('['.__LINE__.']['.__FILE__.']');
                }

                return $item->id !== $curr;
            });
    }

    public function currentLang(string $field): string
    {
        $curr = app()->getLocale();
        $lang = $this->languages()->first(
            function ($item) use ($curr): bool {
                if (! $item instanceof LangData) {
                    throw new \Exception('['.__LINE__.']['.__FILE__.']');
                }

                return $item->id === $curr;
            }
        );

        return (string) $lang->{$field};
    }
}
