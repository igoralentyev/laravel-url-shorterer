<?php
namespace App\Services;

use App\Models\Url;
use Exception;

class UrlService
{
    public function getUserUrl(string $shortUrl)
    {
        $url = Url::select('user_url')->where('short_url', $shortUrl)->first();

        if (!$url)
            throw new Exception("Url ${shortUrl} not exist");

        return $url;
    }

    public function save($shortUrl, $userUrl)
    {
        try {
            $urlModel = Url::create([
                'short_url' => $shortUrl,
                'user_url' => $userUrl,
            ]);
        } catch (Exception) {
            throw new Exception("Error, please try again");
        }

        return $urlModel;
    }
}

?>
