<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * OrderstableFixture
 */
class OrderstableFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'orderstable';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'orders_id' => 1,
                'order_addresses' => 'Lorem ipsum dolor sit amet',
                'referencess' => 'Lorem ipsum dolor sit amet',
                'dates' => '2022-06-07',
                'times' => '19:02:15',
                'fees' => 1,
                'status' => 'Lorem ipsum dolor sit amet',
                'orders_gps' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            ],
        ];
        parent::init();
    }
}
