<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UserstableTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UserstableTable Test Case
 */
class UserstableTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\UserstableTable
     */
    protected $Userstable;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Userstable',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Userstable') ? [] : ['className' => UserstableTable::class];
        $this->Userstable = $this->getTableLocator()->get('Userstable', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Userstable);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\UserstableTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
