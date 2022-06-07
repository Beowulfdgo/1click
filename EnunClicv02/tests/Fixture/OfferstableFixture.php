<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * OfferstableFixture
 */
class OfferstableFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'offerstable';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'offers_id' => 1,
                'offer_names' => 'Lorem ipsum dolor sit amet',
                'offer_descriptions' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'offer_start_dates' => '2022-06-07',
                'offer_final_dates' => '2022-06-07',
                'offer_prices' => 1,
            ],
        ];
        parent::init();
    }
}
