<?php

declare(strict_types=1);

namespace Modules\Lang\Models;

// use GeneaLabs\LaravelModelCaching\Traits\Cachable;
// use Laravel\Scout\Searchable;
// ---------- traits
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Services\FactoryService;
use Modules\Xot\Traits\Updater;

/**
 * Class BaseModel.
 */
abstract class BaseModel extends Model
{
    use HasFactory;
<<<<<<< HEAD

    // use Searchable;
    // use Cachable;
    use Updater;

=======
    // use Searchable;
    // use Cachable;
    use Updater;
>>>>>>> dev
    /**
     * Indicates whether attributes are snake cased on arrays.
     *
     * @see  https://laravel-news.com/6-eloquent-secrets
     *
     * @var bool
     */
    public static $snakeAttributes = true;

    protected $perPage = 30;

    /**
     * @var string
     */
    protected $connection = 'mysql'; // this will use the specified database connection

    /**
     * @var string[]
     */
    protected $fillable = ['id'];
<<<<<<< HEAD

=======
>>>>>>> dev
    /**
     * @var array<string, string>
     */
    protected $casts = ['published_at' => 'datetime', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
<<<<<<< HEAD

=======
>>>>>>> dev
    /**
     * @var string
     */
    protected $primaryKey = 'id';
<<<<<<< HEAD

=======
>>>>>>> dev
    /**
     * @var bool
     */
    public $incrementing = true;
<<<<<<< HEAD

=======
>>>>>>> dev
    /**
     * @var array<int, string>
     */
    protected $hidden = [
        // 'password'
    ];
<<<<<<< HEAD

=======
>>>>>>> dev
    /**
     * @var bool
     */
    public $timestamps = true;

    /**
     * Create a new factory instance for the model.
     *
     * @return Factory
     */
    protected static function newFactory()
    {
        return FactoryService::newFactory(static::class);
    }
}
