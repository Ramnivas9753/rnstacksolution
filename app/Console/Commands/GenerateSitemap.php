<?php

namespace App\Console\Commands;
use App\Models\Admin\Blog;
use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
  
    protected $signature = 'sitemap:generate';

    protected $description = 'Automatically Generate an XML Sitemap';
    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $postsitmap = Sitemap::create(url('/'));

        $postsitmap->add(
            Url::create("/")
            ->setPriority(0.9)
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
        );

        $postsitmap->add(
            Url::create("/about-us")
            ->setPriority(0.9)
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
        );

        $postsitmap->add(
            Url::create("/contact-us")
            ->setPriority(0.9)
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
        );

        $postsitmap->add(
            Url::create("/privacy-policy")
            ->setPriority(0.9)
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
        );


        $postsitmap->add(
            Url::create("/term-condition")
            ->setPriority(0.9)
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
        );

        Blog::where('status',1)->get()->each(function (Blog $post) use ($postsitmap) {
            $postsitmap->add(
                Url::create("/blog-details/{$post->slug}")
                    ->setPriority(0.9)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
            );
        });

        $postsitmap->add(
            Url::create("/gallery")
            ->setPriority(0.9)
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
        );








        $postsitmap->writeToFile('sitemap.xml');
    }
}
