<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class SitemapController extends Controller
{
    public function generate()
    {
        $sitemap = Sitemap::create();

        $urls = [
            '/users' => now(),
            '/add' => now(),
            '/add2' => now(),
            '/update' => now()
        ];

        foreach ($urls as $url => $lastModificationDate) {
            $sitemap->add(
                Url::create(url($url))
                    ->setLastModificationDate($lastModificationDate)
            );
        }

        $xmlContent = $sitemap->render();

        $response = new Response($xmlContent);
        $response->header('Content-Type', 'text/xml');

        return $response;
    }
}
