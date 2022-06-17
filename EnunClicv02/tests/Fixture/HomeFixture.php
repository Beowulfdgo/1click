<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * HomeFixture
 */
class HomeFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'home';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'menu' => 'Lorem ipsum dolor sit amet',
                'id' => 1,
            ],
        ];
        parent::init();
    }
}
