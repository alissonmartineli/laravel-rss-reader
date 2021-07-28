<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Cache;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(): JsonResponse
    {
        $data = Cache::remember('feed', 60, function () {
            $url = 'https://g1.globo.com/rss/g1/economia/';

            $rss = simplexml_load_file($url);

            $collection = collect();

            foreach ($rss->channel->item as $item) {
                $collection->push([
                    'title' => (string) $item->title,
                    'pubDate' => (string) $item->pubDate,
                    'link' => (string) $item->link,
                ]);
            }

            return $collection->sortByDesc('pubDate')
                ->values()
                ->all()
            ;
        });

        return response()->json($data);
    }
}
