<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ZonestableLogisticstableFixture
 */
class ZonestableLogisticstableFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'zonestable_logisticstable';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'zonestable_zones_id' => 1,
                'logisticstable_logistics_id' => 1,
            ],
        ];
        parent::init();
    }
}
