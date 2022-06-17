<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LogisticstableDeliveriestableTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LogisticstableDeliveriestableTable Test Case
 */
class LogisticstableDeliveriestableTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\LogisticstableDeliveriestableTable
     */
    protected $LogisticstableDeliveriestable;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.LogisticstableDeliveriestable',
        'app.Logisticstable',
        'app.Deliveriestable',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('LogisticstableDeliveriestable') ? [] : ['className' => LogisticstableDeliveriestableTable::class];
        $this->LogisticstableDeliveriestable = $this->getTableLocator()->get('LogisticstableDeliveriestable', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->LogisticstableDeliveriestable);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\LogisticstableDeliveriestableTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\LogisticstableDeliveriestableTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
