<div>
    <button data-dropdown-toggle="dropdown-language"
        class="grid py-3 text-sm font-semibold transition rounded-lg place-items-center">
        <div class="flex items-center space-x-1">

            <x-filament::icon icon="lang-flag.{{ $lang }}" class="size-5" />

            <x-heroicon-o-chevron-down class="hidden size-4 sm:block" />
        </div>
    </button>
    <div id="dropdown-language"
        class="absolute z-[45] hidden p-2 overflow-hidden text-sm border border-white rounded-lg bg-gray-50/85 backdrop-blur w-[240px] max-w-sm">
        <ul>
            @foreach ($langs as $localeCode => $properties)
                <li>
                    <a rel="alternate" hreflang="{{ $localeCode }}"
                        href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                        class="flex items-center w-full px-2 py-3 space-x-2 transition rounded hover:bg-white">
                        <x-filament::icon icon="lang-flag.{{ $localeCode }}" class="size-5" />
                        <div>{{ $properties['native'] }}</div>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</div>
