<?php

namespace App\Utils;
use App\Post;

class Imagestire{
    public function __construct() {
        $this->var = $var;
    }

    public function delete_file()
    {
        # code...
    }

    public function save_file($request)
    {
        return $request->file('file')->store('post','public');
    }
}