<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // DBの文字数の設定
        // Herokuでvarchar型の文字数はデフォルトの255では大きいため、191に設定
        Schema::defaultStringLength(191);

        // アプリをhttpsに対応
        // 本番環境の場合にhttpsに強制
        if (\App::environment('production')) {
            \URL::forceSchema('https');
        }
    }
}
