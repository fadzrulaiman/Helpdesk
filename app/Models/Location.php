<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
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
 * @method static Builder|Location whereCreatedAt($id)
 * @method static Builder|Location whereId($id)
 * @method static Builder|Location whereName($id)
 * @method static Builder|Location whereUpdatedAt($id)
 * @method static Builder|Location whereid($id)
 * @mixin Eloquent
 */
class Location extends Model
{
    use HasFactory;
}
