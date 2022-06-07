<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ZonestableTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ZonestableTable Test Case
 */
class ZonestableTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ZonestableTable
     */
    protected $Zonestable;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Zonestable',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Zonestable') ? [] : ['className' => ZonestableTable::class];
        $this->Zonestable = $this->getTableLocator()->get('Zonestable', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Zonestable);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ZonestableTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
