<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LogisticstableFixture
 */
class LogisticstableFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'logisticstable';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'logistics_id' => 1,
            ],
        ];
        parent::init();
    }
}
