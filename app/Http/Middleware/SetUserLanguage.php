<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SetUserLanguage
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     *
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $language = config('lang.user.default_locale');

        if ($request->has('lang')) {
            $lang = $request->get('lang');

            switch ($lang) {
                case 'zh-TW':
                    $language = config('lang.available_locales.zh-TW');
                    break;
                case 'en':
                    $language = config('lang.available_locales.en');
                    break;
                default:
                    $language = config('lang.available_locales.en');
            }

            if (!session()->has('webLanguage')) {
                session()->put('webLanguage', $language);
            } else {
                if (session()->get('webLanguage') != $language) {
                    session()->forget('webLanguage');

                    session()->put('webLanguage', $language);
                }
            }
        } else {
            if (!session()->has('webLanguage')) {
                session()->put('webLanguage', $language);
            }
        }

        app()->setLocale(session()->get('webLanguage'));

        return $next($request);
    }
}
