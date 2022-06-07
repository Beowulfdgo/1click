<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UserstableFixture
 */
class UserstableFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'userstable';
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
            ],
        ];
        parent::init();
    }
}
