<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CommentModel
{
    // use HasFactory;

    // protected $fillable = [
    //     'comment',
    //     'user'
    // ];

    var $comment;

    var $user;

    public function setComment($comment)
    {
        if($comment == '')
        {
            return $this->comment;
        }
        $this->comment = $comment;
    }   

    public function setUser($user)
    {
        if($user == '')
        {
            return $this->user;
        }
        $this->user = $user;
    }

}
