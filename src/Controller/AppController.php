<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;
use Cake\I18n\I18n;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */

        /*
         * Enable the following components for recommended CakePHP security settings.
         * see https://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');

    var $limit_data = 50;




    public function initialize()
    {
        I18n::setLocale('es_MX');
       $this->loadComponent('Flash');
       $this->loadComponent('RequestHandler');
       $this->loadComponent('Tickettype');
       $this->request->session()->write('System.mail.sender','portal-ti@tony.mx');
      $this->loadComponent('Auth', [
      /*'authorize'=> 'Controller',*/
            'authenticate' => [
                'Form' => [
                    'fields' => [
                        'name' => 'name',
                        'password' => 'password'
                    ]
                ]
            ],
           'loginAction' => [
                'controller' => 'Users',
                'action' => 'login'
            ],
            'unauthorizededRedirect' => [
                'controller' => 'Users',
                'action' => 'login'
            ], //$this->referer() // If unauthorized, return them to page they were just on
            'logoutAction' => [
                'controller' => 'Users',
                'action' => 'login'
            ],
        ]);



        // Allow the display action so our pages controller
        // continues to work.
        //$this->Auth->allow(['add', 'index', 'edit']);
   }


   public function beforeFilter(Event $event)
   {
       $this->Auth->allow(['login', 'logout']);

   }

    public function beforeRender(Event $event)
    {

         if (!array_key_exists('_serialize', $this->viewVars) &&
            in_array($this->response->type(), ['application/json', 'application/xml'])
        ) {
            $this->set('_serialize', true);
        }
        $results =  null;
        if (!is_null($this->request->session()->read('Auth.User.id'))){
           //$results = $this->Tickettype->getTotal( $this->request->session()->read('typeViewTickets'));
            //$this->set('ticketrows',$results );
        }

    }

}
