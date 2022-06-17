<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * OrderstableLogisticstableFixture
 */
class OrderstableLogisticstableFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'orderstable_logisticstable';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'orderstable_orders_id' => 1,
                'logisticstable_logistics_id' => 1,
            ],
        ];
        parent::init();
    }
}
