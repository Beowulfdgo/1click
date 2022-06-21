<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DailyregistersTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DailyregistersTable Test Case
 */
class DailyregistersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DailyregistersTable
     */
    protected $Dailyregisters;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Dailyregisters',
        'app.Deliveries',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Dailyregisters') ? [] : ['className' => DailyregistersTable::class];
        $this->Dailyregisters = $this->getTableLocator()->get('Dailyregisters', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Dailyregisters);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\DailyregistersTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\DailyregistersTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
