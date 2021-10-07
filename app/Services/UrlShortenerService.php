<?php
namespace App\Services;

use Illuminate\Support\Str;

class UrlShortenerService
{
    const SHORT_URL_LENGTH = '10';

    private string $shortUrl;

    public function makeShortUrl(): string
    {
        $this->shortUrl = Str::random(self::SHORT_URL_LENGTH);

        return $this->shortUrl;
    }
}

?>
