<?php

namespace App\Http\Controllers;

use App\Services\UrlService;
use App\Services\UrlShortenerService;
use Illuminate\Http\Request;

class UrlController extends Controller
{
    public function redirect(UrlService $urlService, string $shortUrl)
    {
        $url = $urlService->getUserUrl($shortUrl);

        return redirect()->away($url->user_url);
    }

    public function create(UrlShortenerService $shortenerService, UrlService $urlService, Request $request)
    {
        $shortUrl = $shortenerService->makeShortUrl();

        $urlModel = $urlService->save($shortUrl, $request->input('user_url'));

        return $urlModel->toJson();
    }
}
