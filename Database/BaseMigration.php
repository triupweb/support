<?php


namespace Triup\Support\Database;


use Illuminate\Database\Migrations\Migration;

abstract class BaseMigration extends Migration
{

    /**
     * @var \Illuminate\Database\Schema\Builder;
     */
    protected $schema;

    public function __construct()
    {
        $this->schema = app('db')->connection()->getSchemaBuilder();
    }

    abstract function up();

    abstract function down();
}