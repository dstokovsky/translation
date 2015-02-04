<?php

namespace Stevebauman\Translation\Models;

use Stevebauman\Translation\Traits\LocaleTrait;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Locale
 * @package Stevebauman\Translation\Models
 */
class Locale extends Model {

    use LocaleTrait;

    protected $table = 'locales';

    protected $fillable = array(
        'code',
        'name',
        'lang_code',
    );

    /**
     * The hasMany translations relationship
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function translations()
    {
        return $this->hasMany('Stevebauman\Translation\Models\Translation', 'locale_id', 'id');
    }

}