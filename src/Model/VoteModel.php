<?php

declare(strict_types=1);

namespace App\Model;

use App\Abstracts\ModelAbstracts;

/**
 * Class VoteModel
 * @package App\Model
 */
class VoteModel extends ModelAbstracts
{
    public $table = 'vote';
    public $primaryKey = null;
    protected $timestamps = true;

    const UPDATE_TIME = false;

    public $columns = [
        'user_id',
        'votable_id',
        'votable_type',
        'type',
        'create_time',
    ];
}
