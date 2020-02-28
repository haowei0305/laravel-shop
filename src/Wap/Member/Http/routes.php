<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/2/28
 * Time: 15:26
 */
Route::get('/wetch/wap', 'MemberController@wap')->middleware('wechat');
