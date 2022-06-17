<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UserstableRolestableTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UserstableRolestableTable Test Case
 */
class UserstableRolestableTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\UserstableRolestableTable
     */
    protected $UserstableRolestable;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.UserstableRolestable',
        'app.Userstable',
        'app.Rolestable',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('UserstableRolestable') ? [] : ['className' => UserstableRolestableTable::class];
        $this->UserstableRolestable = $this->getTableLocator()->get('UserstableRolestable', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->UserstableRolestable);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\UserstableRolestableTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\UserstableRolestableTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
