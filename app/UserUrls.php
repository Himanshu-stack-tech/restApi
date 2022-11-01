<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserUrls extends Model
{
    protected $table = 'user_urls';

    public function user()
    {
        $this->belongsTo(User::class);
    }

    public function getIsInstagrammAttribute()
    {
        if (strpos($this->url, 'instagram.com') !== false) {
            return true;
        }

        return false;
    }

    public function getIsFacebookAttribute()
    {
        if (strpos($this->url, 'facebook.com') !== false) {
            return true;
        }

        return false;
    }

    public function getIsTwitterAttribute()
    {
        if (strpos($this->url, 'twitter.com') !== false) {
            return true;
        }

        return false;
    }
    public function getIsBandcampAttribute()
    {
        if (strpos($this->url, 'bandcamp.com') !== false) {
            return true;
        } 

        return false;
    }
    public function getIsPatreonAttribute()
    {
        if (strpos($this->url, 'patreon.com') !== false) {
            return true;
        } 

        return false;
    }
}
