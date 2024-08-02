<?php
/**
 * @see https://github.com/laravel/framework/discussions/49574
 */

declare(strict_types=1);

namespace Modules\Lang\Http\Livewire\Lang;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Str;
use Illuminate\View\View;
use Livewire\Component;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

// Route::get('{path}', RedirectToPreferredLanguage::class)
// ->where('path', '^(?!(en|de)).*');

class Change extends Component
{
    public string $lang;
    public array $langs;
    public string $url;

    public function mount(): void
    {
        $this->lang = app()->getLocale();
        $langs = LaravelLocalization::getSupportedLocales();
        unset($langs[$this->lang]);
        $this->url = Request::getRequestUri();
        $langs = Arr::map($langs, function ($item, $key) {
            $url = LaravelLocalization::getLocalizedURL($key, $this->url, [], true);
            if (is_string($url)) {
                $url = Str::of($url)->replace(url(''), '')->toString();
            }
            $item['url'] = $url;

            return $item;
        });
        $this->langs = $langs;
    }

    public function switchLang(string $lang): Application|RedirectResponse|Redirector
    {
        $url = LaravelLocalization::getLocalizedURL($lang, $this->url, [], true);
        if (false === $url) {
            throw new \Exception('url not found['.__LINE__.']['.__FILE__.']');
        }

        return redirect($url, 303);
    }

    public function render(): View
    {
        $view = 'lang::livewire.lang.change';
        $view_params = [
            'view' => $view,
        ];
        // if ([] === $this->teams) {
        //    $view = 'ui::livewire.empty';
        // }

        return view($view, $view_params);
    }
}
