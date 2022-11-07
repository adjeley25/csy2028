<?php
class viewersController {
	private $viewersTable;

	public function __construct($viewersTable) {
		$this->viewersTable = $viewersTable;
	}

    public function list() {

		$menu = $this->viewersTable->findAll();
		return ['template' => 'ourMenus.html.php', 
                'title' => 'Menu list ',
				'variables' => [
						'menu' => $menu
					]
				];

				
		
	}

	
	public function home() {
		$viewers = $this->viewersTable->find('id', 3);

		return [
			'template' => 'home.html.php',
			'variables' => [],
            'title' => 'Kates kitchen Database'
        
		];

	}

	
}