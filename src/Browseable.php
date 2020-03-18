<?php

namespace Shengfai\LaravelBrowse;

use Illuminate\Database\Eloquent\Model;

/**
 * 可用浏览模型
 * Class Browseable
 *
 * @package \App\Models
 * @author ShengFai <shengfai@qq.com>
 * @version 2020年3月19日
 */
class Browseable extends Model
{
    const TYPE_VIEW = 1;        // 浏览
    const TYPE_CLICK = 2;       // 点击
    const TYPE_LAUNCH = 3;      // 启动
    const TYPE_OPEN = 4;        // 打开
    const TYPE_DOWNLOAD = 5;    // 下载
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type',
        'ip',
        'user_agent'
    ];
    
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'type' => 'integer'
    ];

    /**
     * 关联目标对象
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function target()
    {
        return $this->morphTo('browseable')->withDefault();
    }
}
