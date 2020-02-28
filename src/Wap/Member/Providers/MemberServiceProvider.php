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
    protected $routeMiddleware = [
        'wechat' =>\Linhaowei\LaravelShop\Wap\Member\Http\Middleware\Wechat::class
    ];
    public function register(){
        $this->registerRoutes();
        $this->registerMiddleware();
    }


    /**
     * 注册中间件
     * */
    protected function registerMiddleware(){
        dd($this->app);
        foreach ($this->routeMiddleware as $key => $middleware) {
           // $this->router->aliasMiddleware($key, $middleware);
        }
    }

    //注册路由
    public function registerRoutes(){
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__ . '/../Http/routes.php');
        });
    }

    public function routeConfiguration(){
        return [
            // 是定义路由的命名空间
            'namespace' => 'Linhaowei\LaravelShop\Wap\Member\Http\Controllers',
            // 这是前缀
            'prefix' => 'wap/member',
            //引入web中间件,预防session错误不断刷新出现
            'middleware' => 'web',
        ];
    }
}