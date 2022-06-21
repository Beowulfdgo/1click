<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ZonesDeliveriesFixture
 */
class ZonesDeliveriesFixture extends TestFixture
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
                'zones_id' => 1,
                'deliverymans_id' => 1,
            ],
        ];
        parent::init();
    }
}
