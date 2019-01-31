<?php
namespace App\Controller;

use App\Controller\AppController;
use \Cake\ORM\TableRegistry;

/**
 * MeuTeste Controller
 *
 *
 * @method \App\Model\Entity\MeuTeste[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MeuTesteController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        /*-----------------------------> TESTES INICIAIS DA CLASSE MeuTesteController
        // $meuTeste = $this->paginate($this->MeuTeste);
        //
        // $this->set(compact('meuTeste'));
        // echo "Oi mundo!";
        /*
        $this->response->withAddedHeader("content-type", "json");
        echo json_encode(['linha1'=>"Olá Mundo!!", 'titulo'=>"Personalização de Controller",
                              ['linha1'=>"Nessa aula Filipe Morelli mostra a Personalização",
                                'linha2'=>"de controller"
                              ]
                          ]);
        * /
        // $lang = $this->request->acceptLanguage();
        // debug( $lang);

        // debug( $this->request);

        // debug([$query, "Daee!!"]);
        //var_dump([$query, $array]);

         // var_dump([$query, ["Oiii", "mundo!!", 'index'=>"String"] ]);
         /*
         $query = $this->request->getQuery();
         debug([$query, ["Oiii", "mundo!!", 'index'=>"String"] ]);
         */

         $this->loadModel('Shippers');//Esse método cria, em tempo de execução, o atributo Shippers no obj da classe MeuTesteController?
         $Shippers = $this->Shippers->find('all');

         debug($Shippers);

         $Shippers = $Shippers->toArray();

         debug($Shippers);

        $this->autoRender = false;
        //exit();
    }

    public function view($id = null){
      $this->loadModel('Shippers');

      $Shipper = $this->Shippers->get($id);

      debug($Shipper);

      $this->autoRender = false;
    }

    // public function add($id = null){
    public function add(){
      $tableShippers = TableRegistry::get('Shippers');

      $Shipper = $tableShippers->newEntity();
      $dadosURL = $this->request->getQuery();

      $Shipper->ShipperName = $dadosURL['ShipperName'];
      $Shipper->Phone = $dadosURL['Phone'];

      // $Shipper = $ShippersTable->get($id);

      debug($Shipper);

      $resultado = $tableShippers->save($Shipper);

      debug($resultado);

      $this->autoRender = false;
    }

    public function update($id = null){
      debug($id);

      $tableShippers = TableRegistry::get('Shippers');

      $Shipper = $tableShippers->get($id);
      $dadosURL = $this->request->getQuery();

      $Shipper->ShipperName = $dadosURL['ShipperName'];
      $Shipper->Phone = $dadosURL['Phone'];

      // $Shipper = $ShippersTable->get($id);

      debug($Shipper);

      $resultado = $tableShippers->save($Shipper);

      debug($resultado);

      $this->autoRender = false;
    }

    public function delete($id = null){
      debug($id);

      $tableShippers = TableRegistry::get('Shippers');

      $Shipper = $tableShippers->get($id);

      $resultado = $tableShippers->delete($Shipper);

      debug($resultado);

      $this->autoRender = false;
    }

}
