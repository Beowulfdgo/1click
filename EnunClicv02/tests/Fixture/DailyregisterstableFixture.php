<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DailyregisterstableFixture
 */
class DailyregisterstableFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'dailyregisterstable';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'register_id' => 1,
                'register_status' => 'Lorem ipsum dolor sit amet',
                'daily_initial_cashes' => 1,
                'daily_final_cashes' => 1,
                'register_dates' => '2022-06-07',
            ],
        ];
        parent::init();
    }
}
