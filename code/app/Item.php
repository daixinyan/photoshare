<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Item extends Model
{
    use Notifiable;
    use SoftDeletes;
    //
    /**
     * 应该被调整为日期的属性
     *
     * @var array
     */
    protected $dates = ['deleted_at'];


    protected $fillable = ['owner_id', 'url', 'album_id', 'description', 'likes', 'label'];

    public function hasManyComments() {
        return $this->hasMany('App\Comment', 'item_id', 'id');
    }

    public function belongsToUser() {
        return $this->belongsTo('App\User', 'owner_id', 'id');
    }

    public function insert($data) {
        foreach ($data as $key=>$value) {
            if (in_array($key, $this->fillable)) {
                $this->$key = $value;
            }
        }
        $this->likes = 0;
        $this->save();
    }

}
