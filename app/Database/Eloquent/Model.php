<?php

namespace App\Database\Eloquent;

use App\Models\Traits\PreFill;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as BaseModel;
//use TradeTree\Database\Query\Builder as QueryBuilder;
//use TradeTree\Facades\Middleware;

class Model extends BaseModel
{
    use HasFactory, PreFill;
    public $incrementing = false;

    const SCOPE_FR = 'fr';
    const SCOPE_ONLY = 'only';

    protected static function boot()
    {
        parent::boot();

        if (property_exists(static::class, 'selectScopes')) {
            if (isset(static::$selectScopes[self::SCOPE_ONLY])) {
//                static::addGlobalScope(self::SCOPE_ONLY, function (Builder $builder) {
//                    $builder->select(array_get(static::$selectScopes, self::SCOPE_ONLY, ['*']));
//                });
            }

            if (isset(static::$selectScopes[self::SCOPE_FR])) {
                static::addGlobalScope(self::SCOPE_FR, function (Builder $builder) {
//                    $fr = array_get(static::$selectScopes, self::SCOPE_FR, false);
//                    if ($fr && !Middleware::isSet('follower-reads')) {
//                        $builder->asFollower();
//                    }
                });
            }
        }
    }

    protected function performInsert(Builder $query)
    {
        if ($this->usesUniqueIds()) {
            $this->setUniqueIds();
        }

        if ($this->fireModelEvent('creating') === false) {
            return false;
        }

        if ($this->usesTimestamps()) {
            $this->updateTimestamps();
        }

        if (!empty($attributes = $this->getAttributesForInsert())) {
            $this->insertAndSetId($query, $attributes);
            $this->fireModelEvent('created', false);
        }

        return true;
    }

//    protected function newBaseQueryBuilder()
//    {
//        $connection = $this->getConnection();
//
//        return new QueryBuilder(
//            $connection, $connection->getQueryGrammar(), $connection->getPostProcessor()
//        );
//    }

//    public static function setScope($scope, $val = true)
//    {
//        if (property_exists(static::class, 'selectScopes')) {
//            static::$selectScopes[$scope] = $val;
//        }
//    }
}
