<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DeliveriestableTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DeliveriestableTable Test Case
 */
class DeliveriestableTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DeliveriestableTable
     */
    protected $Deliveriestable;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
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
        $config = $this->getTableLocator()->exists('Deliveriestable') ? [] : ['className' => DeliveriestableTable::class];
        $this->Deliveriestable = $this->getTableLocator()->get('Deliveriestable', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Deliveriestable);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\DeliveriestableTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
