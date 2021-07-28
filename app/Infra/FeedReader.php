<?php

namespace App\Infra;

use Illuminate\Support\Collection;

class FeedReader
{
    public static function read($url): Collection
    {
        $rss = simplexml_load_file($url);

        $collection = collect();

        foreach ($rss->channel->item as $item) {
            $collection->push([
                'title' => (string) $item->title,
                'pubDate' => (string) $item->pubDate,
                'link' => (string) $item->link,
            ]);
        }

        return $collection;
    }
}
