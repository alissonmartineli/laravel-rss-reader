<?php

namespace App\Http\Controllers;

use App\Infra\News\CacheRepository;
use Illuminate\Http\JsonResponse;

class IndexController extends Controller
{
    private CacheRepository $repository;

    public function __construct(CacheRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * RSS Reader.
     */
    public function __invoke(): JsonResponse
    {
        return response()->json(
            array_map(
                fn ($news) => [
                    'title' => $news->getTitle(),
                    'pubDate' => (string) $news->getPubDate(),
                    'link' => (string) $news->getLink(),
                ],
                $this->repository->getAllSortedByPubDate()
            )
        );
    }
}
