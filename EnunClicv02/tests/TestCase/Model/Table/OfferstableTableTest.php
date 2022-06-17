<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OfferstableTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OfferstableTable Test Case
 */
class OfferstableTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\OfferstableTable
     */
    protected $Offerstable;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Offerstable',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Offerstable') ? [] : ['className' => OfferstableTable::class];
        $this->Offerstable = $this->getTableLocator()->get('Offerstable', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Offerstable);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\OfferstableTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
