<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/2/28
 * Time: 15:47
 */
namespace Linhaowei\LaravelShop\Wap\Member\Providers;

use Illuminate\Support\ServiceProvider;

class MemberServiceProvider extends ServiceProvider{
    public function register(){
        $this->registerRoutes();
    }


    public function registerRoutes(){
        //$this->loadRoutesFrom(__DIR__ . '/../Http/routes.php');
    }
}