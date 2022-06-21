<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersFixture
 */
class UsersFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'users_id' => 1,
                'users' => 'Lorem ipsum dolor sit amet',
                'passwords' => 'Lorem ipsum dolor sit amet',
                'role_id' => 1,
                'deliverymans_id' => 1,
            ],
        ];
        parent::init();
    }
}
