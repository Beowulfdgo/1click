<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LogisticstableDeliveriestableFixture
 */
class LogisticstableDeliveriestableFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'logisticstable_deliveriestable';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'logisticstable_logistics_id' => 1,
                'deliveriestable_delivery_man_id' => 1,
            ],
        ];
        parent::init();
    }
}
