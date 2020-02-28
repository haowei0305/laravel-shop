<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/2/28
 * Time: 15:47
 */
namespace Linhaowei\LaravelShop\Wap\Member\Providers;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class MemberServiceProvider extends ServiceProvider{
    public function register(){
        $this->registerRoutes();
    }


    public function registerRoutes(){
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__ . '/../Http/routes.php');
        });
    }

    public function routeConfiguration(){
        return [
            // 定义访问路由的域名
            // 'domain' => config('telescope.domain', null),
            // 是定义路由的命名空间
            'namespace' => 'Linhaowei\LaravelShop\Wap\Member\Http\Controllers',
            // 这是前缀
            'prefix' => 'wap/member',
            //引入web中间件,预防session错误不断刷新出现
            'middleware' => 'web',
        ];
    }
}