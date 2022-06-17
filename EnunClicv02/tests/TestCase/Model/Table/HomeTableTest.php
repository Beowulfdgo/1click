<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HomeTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HomeTable Test Case
 */
class HomeTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\HomeTable
     */
    protected $Home;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Home',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Home') ? [] : ['className' => HomeTable::class];
        $this->Home = $this->getTableLocator()->get('Home', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Home);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\HomeTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
