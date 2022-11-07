<?php
class categoryController {
	private $categoryTable;

	public function __construct($categoryTable) {
		$this->categoryTable = $categoryTable;
	}

	public function list() {

		$category = $this->categoryTable->findAll();
		return ['template' => 'categorylist.html.php', 
                'title' => 'Categories List',
				'variables' => [
						'category' => $category
					]
				];
	}

	public function delete() {
		$this->categoryTable->delete($_POST['id']);
		header('location: /category/list');
	}


    public function edit() {
		if (isset($_POST['category'])) {
		
			$category = $_POST['category'];
		
			$this->categoryTable->save($category);

			header('location: /category/list');
		}
		else {
			if  (isset($_GET['id'])) {
				$result = $this->categoryTable->find('id', $_GET['id']);
				$category = $result[0];
			}
			else  {
				$category = false;
			}

			return [
				'template' => 'editCat.html.php',
				'variables' => ['category' => $category],
				'title' => 'Edit categories'
			];
		}
	}
}



