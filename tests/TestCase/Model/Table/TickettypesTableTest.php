<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TickettypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TickettypesTable Test Case
 */
class TickettypesTableTest extends TestCase
{

    /**
     * Test subject     *
     * @var \App\Model\Table\TickettypesTable     */
    public $Tickettypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tickettypes',
        'app.tickets',
        'app.ticket_statuses',
        'app.sources',
        'app.itemcodes',
        'app.items',
        'app.itemcategories',
        'app.layoutcategories',
        'app.layouts',
        'app.branches',
        'app.branchgroups',
        'app.users',
        'app.positionbranches',
        'app.positions',
        'app.statususers',
        'app.groups',
        'app.ticketlogs',
        'app.roles',
        'app.articles',
        'app.articlefiles',
        'app.articles_roles',
        'app.hdcategories',
        'app.hdtemplate',
        'app.hdcategories_articles',
        'app.movereasontemplates',
        'app.movereasons',
        'app.stockmoves',
        'app.warehouses',
        'app.stocks',
        'app.shippers',
        'app.stockmoves_details',
        'app.ticketmarkeds',
        'app.ticketnotes',
        'app.ticketnotestypes',
        'app.userendmessages',
        'app.currencies',
        'app.brands',
        'app.invoices',
        'app.suppliers',
        'app.statusitems',
        'app.userautors',
        'app.userrequerieds',
        'app.ticketimpacts',
        'app.ticketurgencies',
        'app.ticketpriorities',
        'app.ticketstatuses',
        'app.ticketstatuses_tickettypes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Tickettypes') ? [] : ['className' => TickettypesTable::class];        $this->Tickettypes = TableRegistry::get('Tickettypes', $config);    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Tickettypes);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
