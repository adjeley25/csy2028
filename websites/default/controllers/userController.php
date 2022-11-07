<?php
class userController {
	private $userTable;

	public function __construct($userTable) {
		$this->userTable = $userTable;
	}

	public function list() {

		$user = $this->userTable->findAll();
		return ['template' => 'userlist.html.php', 
                'title' => 'Sign up List',
				'variables' => [
						'user' => $user
					]
				];
	}

	public function delete() {

		$this->staffTable->delete($_POST['id']);
		header('location: /user/list');
	}

    public function edit() {
		if (isset($_POST['user'])) {
			
			
			$user = $_POST['user'];

			$this->userTable->save($user);

			header('location: /admin.php');
		}
		else {
			if  (isset($_GET['id'])) {
				$result = $this->userTable->find('id', $_GET['id']);
				$user = $result[0];
			}
			else  {
				$user = false;
			}

			return [
				'template' => 'edituser.html.php',
				'variables' => ['user' => $user],             
				'title' => 'Add user'
			];
		}
	}
    
	}
    ?>




