<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DailyregisterstableTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DailyregisterstableTable Test Case
 */
class DailyregisterstableTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DailyregisterstableTable
     */
    protected $Dailyregisterstable;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Dailyregisterstable',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Dailyregisterstable') ? [] : ['className' => DailyregisterstableTable::class];
        $this->Dailyregisterstable = $this->getTableLocator()->get('Dailyregisterstable', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Dailyregisterstable);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\DailyregisterstableTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
