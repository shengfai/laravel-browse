<?php

namespace Shengfai\LaravelBrowse\Traits;

use Shengfai\LaravelBrowse\Browseable;
use Illuminate\Database\Eloquent\Relations\MorphMany;

/**
 * 浏览 Traits
 * trait HasBrowses
 *
 * @package \App\Models\Traits
 * @author ShengFai <shengfai@qq.com>
 * @version 2020年3月19日
 */
trait HasBrowses
{

    /**
     * 模型关联的浏览记录
     *
     * @return Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function browses(): MorphMany
    {
        return $this->morphMany(Browseable::class, 'browseable');
    }

}