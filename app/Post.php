<?php
/**
 * Created by IntelliJ IDEA.
 * User: KIIHUB
 * Date: 19/01/2019
 * Time: 6:23 AM
 */

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Post extends Eloquent {

    protected $table = 'posts';

    protected $fillable = array('title','content','author_id');

    public $timestamps = true;

    public function Author(){

        return $this->belongsTo('User','author_id');
    }

}
