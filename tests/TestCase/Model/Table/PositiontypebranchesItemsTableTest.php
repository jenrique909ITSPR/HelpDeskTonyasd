<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PositiontypebranchesItemsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PositiontypebranchesItemsTable Test Case
 */
class PositiontypebranchesItemsTableTest extends TestCase
{

    /**
     * Test subject     *
     * @var \App\Model\Table\PositiontypebranchesItemsTable     */
    public $PositiontypebranchesItems;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.positiontypebranches_items',
        'app.positiontypebranches',
        'app.branches',
        'app.branchgroups',
        'app.users',
        'app.positionbranches',
        'app.positions',
        'app.itemcodes',
        'app.items',
        'app.itemcategories',
        'app.layoutcategories',
        'app.layouts',
        'app.currencies',
        'app.brands',
        'app.itemtypes',
        'app.stockmoves_details',
        'app.stockmoves',
        'app.warehouses',
        'app.stocks',
        'app.movereasons',
        'app.movereasontemplates',
        'app.shippers',
        'app.invoices',
        'app.suppliers',
        'app.statusitems',
        'app.tickets',
        'app.tickettypes',
        'app.ticketstatuses',
        'app.ticketstatuses_tickettypes',
        'app.ticket_statuses',
        'app.sources',
        'app.userautors',
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
        'app.ticketmarkeds',
        'app.ticketnotes',
        'app.ticketnotestypes',
        'app.userendmessages',
        'app.userrequerieds',
        'app.ticketimpacts',
        'app.ticketurgencies',
        'app.ticketpriorities',
        'app.positiontypes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('PositiontypebranchesItems') ? [] : ['className' => PositiontypebranchesItemsTable::class];        $this->PositiontypebranchesItems = TableRegistry::get('PositiontypebranchesItems', $config);    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PositiontypebranchesItems);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
