<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LogisticstableTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LogisticstableTable Test Case
 */
class LogisticstableTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\LogisticstableTable
     */
    protected $Logisticstable;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Logisticstable',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Logisticstable') ? [] : ['className' => LogisticstableTable::class];
        $this->Logisticstable = $this->getTableLocator()->get('Logisticstable', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Logisticstable);

        parent::tearDown();
    }
}
