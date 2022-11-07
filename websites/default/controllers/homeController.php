<?php
class homeController {
	private $homeTable;

	public function __construct($homeTable) {
		$this->homeTable = $homeTable;
	}

	public function list() {

		$home = $this->homeTable->findAll();
		return ['template' => 'homelist.html.php', 
                'title' => 'home list',
				'variables' => [
						'home' => $home
					]
				];
	}

	public function delete() {
		$this->homeTable->delete($_POST['id']);
		header('location: /home/list');
	}

	public function home() {
		$home = $this->homeTable->find('id', 3);

		return [
			'template' => 'home.html.php',
			'variables' => [],
            'title' => 'Kates kitchen Database'
        
		];

	}

	public function edit() {
		if (isset($_POST['home'])) {
		
			$home = $_POST['home'];
		
			$this->homeTable->save($home);

			header('location: /home/list');
		}
		else {
			if  (isset($_GET['id'])) {
				$result = $this->homeTable->find('id', $_GET['id']);
				$home = $result[0];
			}
			else  {
				$home = false;
			}

			return [
				'template' => 'edithome.html.php',
				'variables' => ['home' => $home],
				'title' => 'Edit home'
			];
		}
	}
}
?>
	
		