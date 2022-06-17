<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AdstableFixture
 */
class AdstableFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'adstable';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'ads_id' => 1,
                'ads_names' => 'Lorem ipsum dolor sit amet',
                'ads_descriptions' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'ads_start_dates' => '2022-06-07',
                'ads_end_dates' => '2022-06-07',
            ],
        ];
        parent::init();
    }
}
