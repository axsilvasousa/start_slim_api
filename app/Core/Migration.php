<?php


namespace App\Core;


use Illuminate\Database\Capsule\Manager as Capsule;
use Phinx\Migration\AbstractMigration;



class Migration extends AbstractMigration {
    /** @var \Illuminate\Database\Capsule\Manager $capsule */
    public $capsule;
    /** @var \Illuminate\Database\Schema\Builder $capsule */
    public $schema;

    public function init()  {
        require __DIR__.'/../../bootstrap/config.php';

        $this->capsule = new Capsule;
        $this->capsule->addConnection( $database['orm'] );

        $this->capsule->bootEloquent();
        $this->capsule->setAsGlobal();
        $this->schema = $this->capsule->schema();
    }
}