<h4> <?= $nome ?? "Teste"  ?></h4>

<?= $this->html->nestedList([
  /**/
      'busca'  => $this->html->
        link("Busca", ['controller' => "shippers", 'action' => "busca", '?' => ['nome'=> "MicSena", 'idade' => "41"], '#' => "top" ]),
      'busca1' => $this->html->link("BuscaTeste", ['controller' => "shippers", 'action' => "busca1"]),
      'busca2' => $this->html->link("Busca2"    , ['controller' => "shippers", 'action' => "busca2"]),

    //  'Busca'  => $this->html->link("busca", "shipper/busca" ),

      'Outros' => [
        'goolgle' => $this->html->link("Google", "http://www.google.com.br", ['target' => "_blank", 'class' => "busca-teste"]),
        'Yahoo'   => $this->html->link("Yahoo" , "http://www.yahoo.com.br" , ['target' => "_blank", 'class' => "busca-teste"])
        //1, 2, 3, 4, '5 teste'=>["5.1", "5.2", "5.3"], 6, 7, 8
      ]
  ])
 ?>
