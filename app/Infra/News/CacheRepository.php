<?php

namespace App\Infra\News;

use App\Domain\DateTime;
use App\Domain\Link;
use App\Domain\News\News;
use App\Domain\News\Repository;
use App\Infra\FeedReader;
use Illuminate\Support\Facades\Cache;

class CacheRepository implements Repository
{
    public const URL = 'https://g1.globo.com/rss/g1/economia/';

    public function getAllSortedByPubDate(): array
    {
        $items = Cache::remember('feed', 60, function () {
            return FeedReader::read(self::URL)
                ->sortByDesc('pubDate')
                ->values()
                ->all()
            ;
        });

        return array_map(
            fn ($item) => new News(
                $item['title'],
                new DateTime($item['pubDate']),
                new Link($item['link'])
            ),
            $items
        );
    }
}
