<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AdstableTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AdstableTable Test Case
 */
class AdstableTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AdstableTable
     */
    protected $Adstable;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Adstable',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Adstable') ? [] : ['className' => AdstableTable::class];
        $this->Adstable = $this->getTableLocator()->get('Adstable', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Adstable);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\AdstableTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
