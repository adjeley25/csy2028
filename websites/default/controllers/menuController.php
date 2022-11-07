<?php
class menuController {
	private $menuTable;

	public function __construct($menuTable) {
		$this->menuTable = $menuTable;
	}

	public function list() {

		$menu = $this->menuTable->findAll();
		return ['template' => 'menulist.html.php', 
                'title' => 'menu List',
				'variables' => [
						'menu' => $menu
					]
				];
	}

	public function delete() {
		$this->menuTable->delete($_POST['id']);
		header('location: /menu/list');
	}



	public function home() {
		$menu = $this->menuTable->find('id', 3);

		return [
			'template' => 'home.html.php',
			'variables' => [],
            'title' => 'Kates kitchen Database'
        
		];

	}

	public function edit() {
		if (isset($_POST['menu'])) {
		
			$menu = $_POST['menu'];
		
			$this->menuTable->save($menu);

			header('location: /menu/list');
		}
		else {
			if  (isset($_GET['id'])) {
				$result = $this->menuTable->find('id', $_GET['id']);
				$menu = $result[0];
			}
			else  {
				$menu = false;
			}

			return [
				'template' => 'editdish.html.php',
				'variables' => ['menu' => $menu],
				'title' => 'Edit dish'
			];
		}
	}
}
?>