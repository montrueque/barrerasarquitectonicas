<ul class="dropdown-menu">
        @foreach (array_keys(config('locale.languages')) as $lang)
                @if ($lang != App::getLocale())
                        <li>{{ link_to('lang/'.$lang, trans('menus.language-picker.langs.'.$lang)) }}</li>
                @endif
        @endforeach
</ul>