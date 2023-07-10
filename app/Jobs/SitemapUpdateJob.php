<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class SitemapUpdateJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function handle()
    {
        $sitemap = Sitemap::create();

        $urls = [
            '/users',
            '/add',
            '/add2',
            '/update'
        ];

        foreach ($urls as $url) {
            $sitemap->add(
                Url::create($url)
                    ->setLastModificationDate(now())
            );
        }

        $sitemap->writeToFile(public_path('app/sitemap.xml'));
    }
}
