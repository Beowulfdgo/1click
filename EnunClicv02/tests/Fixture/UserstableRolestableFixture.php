<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UserstableRolestableFixture
 */
class UserstableRolestableFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'userstable_rolestable';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'userstable_users_id' => 1,
                'rolestable_roles_id' => 1,
            ],
        ];
        parent::init();
    }
}
