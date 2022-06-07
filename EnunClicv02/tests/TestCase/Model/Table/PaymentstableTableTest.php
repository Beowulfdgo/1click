<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PaymentstableTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PaymentstableTable Test Case
 */
class PaymentstableTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PaymentstableTable
     */
    protected $Paymentstable;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Paymentstable',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Paymentstable') ? [] : ['className' => PaymentstableTable::class];
        $this->Paymentstable = $this->getTableLocator()->get('Paymentstable', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Paymentstable);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\PaymentstableTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
