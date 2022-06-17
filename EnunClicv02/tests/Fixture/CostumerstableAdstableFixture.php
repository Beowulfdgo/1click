<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CostumerstableAdstableFixture
 */
class CostumerstableAdstableFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'costumerstable_adstable';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'costumerstable_costumer_id' => 1,
                'adstable_ads_id' => 1,
            ],
        ];
        parent::init();
    }
}
