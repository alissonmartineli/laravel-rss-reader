<?php

namespace App\Http\Controllers;

use App\Infra\FeedReader;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Cache;

class IndexController extends Controller
{
    /**
     * RSS Reader.
     */
    public function __invoke(): JsonResponse
    {
        $data = Cache::remember('feed', 60, function () {
            $url = 'https://g1.globo.com/rss/g1/economia/';

            return FeedReader::read($url)
                ->sortByDesc('pubDate')
                ->values()
                ->all()
            ;
        });

        return response()->json($data);
    }
}
