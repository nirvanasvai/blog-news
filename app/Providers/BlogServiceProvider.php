<?php

namespace Nirvana\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class BlogServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->topMenu();
        $this->homeMenu();
        $this->homeOneMenu();
        $this->homeTopMenu();
        $this->homeBotMenu();
        $this->MainNewsMenu();
        $this->KazNews();
        $this->WorldNews();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    // Top menu for users
    public function topMenu() {
      View::composer('layouts.header', function ($view) {
        $view->with('categories', \Nirvana\Category::where('parent_id', 0)->where('published', 1)->get());
      });
    }
    public function homeMenu() {
      View::composer('blog.article',function ($view) {
        $view->with('articles', \Nirvana\Article::where('title', 0)->where('published', 0)->get());
      });
    }
    public function homeOneMenu() {
      View::composer('blog.home',function ($view) {
        $view->with('articles', \Nirvana\Article::where('title', 0)->where('published', 0)->get());
      });
    }
    public function homeTopMenu() {
      View::composer('blog.home', function ($view) {
        $view->with('articless', \Nirvana\Article::where('title', 0)->where('published', 1)->get());
      });
    }
    public function homeBotMenu() {
      View::composer('blog.home', function ($view) {
        $view->with('bottom', \Nirvana\Article::where('title', 0)->where('published', 2)->get());
      });
    }
    public function MainNewsMenu() {
      View::composer('blog.home', function ($view) {
        $view->with('mainnews', \Nirvana\Article::where('title', 0)->where('published', 3)->get());
      });
    }
    public function KazNews() {
      View::composer('blog.home', function ($view) {
        $view->with('kaznews', \Nirvana\Article::where('title', 0)->where('published', 4)->get());
      });
    }
    public function WorldNews() {
      View::composer('blog.home', function ($view) {
        $view->with('worldnews', \Nirvana\Article::where('title', 0)->where('published', 5)->get());
      });
    }
}
