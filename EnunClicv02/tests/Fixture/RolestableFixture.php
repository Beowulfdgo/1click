<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RolestableFixture
 */
class RolestableFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'rolestable';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'roles_id' => 1,
                'roles' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
