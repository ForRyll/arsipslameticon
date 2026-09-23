<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class SetLocaleMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        // Cek jika ada query parameter ?lang=en atau ?lang=id
        if ($request->has('lang')) {
            $lang = $request->get('lang');
            if (in_array($lang, ['en', 'id'])) {
                Session::put('locale', $lang);
            }
        }

        // Ambil locale dari session, jika tidak ada pakai default 'id'
        $locale = Session::get('locale', config('app.locale', 'id'));

        // Set locale ke aplikasi (mempengaruhi helper __() dan Spatie Translatable)
        App::setLocale($locale);

        return $next($request);
    }
}