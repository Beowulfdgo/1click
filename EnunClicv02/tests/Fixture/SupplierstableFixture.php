<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SupplierstableFixture
 */
class SupplierstableFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'supplierstable';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'supplier_id' => 1,
                'supplier_names' => 'Lorem ipsum dolor sit amet',
                'supplier_addresses' => 'Lorem ipsum dolor sit amet',
                'supplier_phones' => 1,
            ],
        ];
        parent::init();
    }
}
