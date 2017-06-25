<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Talk extends Model
{
    /**
     * {@inheritDoc}
     */
    protected $fillable = [
        'user_id',
        'meetup_id',
        'topic',
        'overview',
        'accepted',
    ];

    /**
     * {@inheritDoc}
     */
    protected $with = ['user'];

    /**
     * {@inheritDoc}
     */
    protected $casts = ['accepted' => 'bool'];

    /**
     * Define the relationship with the User resource.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Define the relationship with the Meetup resource.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function meetup()
    {
        return $this->belongsTo(Meetup::class);
    }
}