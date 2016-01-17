<?php

namespace App;

class Category extends BaseModel {

    protected $primaryKey = 'id';
    protected $table = 'articles';
    protected $fillable = array('title', 'contents', 'genre', 'created_at_ip', 'updated_at_ip');
    //
}
