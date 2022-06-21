<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CostumersFixture
 */
class CostumersFixture extends TestFixture
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
                'costumer_id' => 1,
                'costumer_names' => 'Lorem ipsum dolor sit amet',
                'costumer_addresses' => 'Lorem ipsum dolor sit amet',
                'costumer_gps' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'costumer_phones' => 1,
                'payments_id' => 1,
            ],
        ];
        parent::init();
    }
}
