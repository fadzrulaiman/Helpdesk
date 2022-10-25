<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;

/**
 * App\Models\Location
 *
 * @property int $id
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Location newModelQuery()
 * @method static Builder|Location newQuery()
 * @method static Builder|Location query()
 * @method static Builder|Location whereCreatedAt($value)
 * @method static Builder|Location whereId($value)
 * @method static Builder|Location whereName($value)
 * @method static Builder|Location whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Location extends Model
{
    use HasFactory;
      /**
     * Get the users for the user role
     *
     * @return HasMany
     */
    public function users(): HasMany
    {
        return $this->hasMany(User::class, 'location_id');
    }
}
