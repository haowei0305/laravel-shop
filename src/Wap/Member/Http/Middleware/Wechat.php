<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/2/23
 * Time: 20:20
 */
namespace Linhaowei\LaravelShop\Wap\Member\Http\Middleware;
use Closure;
class Wechat{
    public function handle($request, Closure $next){
        if ($request->age <= 200) {
            return response('测试数据');
        }

        return $next($request);
    }
}