<?php
namespace App\Controller;

use App\Controller\AppController;

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
        */
        // $lang = $this->request->acceptLanguage();
        // debug( $lang);

        // debug( $this->request);

        // debug([$query, "Daee!!"]);
        //var_dump([$query, $array]);

         // var_dump([$query, ["Oiii", "mundo!!", 'index'=>"String"] ]);
         $query = $this->request->getQuery();
         debug([$query, ["Oiii", "mundo!!", 'index'=>"String"] ]);

        $this->autoRender = false;
        //exit();
    }
}
