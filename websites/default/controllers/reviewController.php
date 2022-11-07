<?php
class reviewController {
	private $reviewTable;

	public function __construct($reviewTable) {
		$this->reviewTable = $reviewTable;
	}

	public function list() {

		$review= $this->reviewTable->findAll();
		return ['template' => 'review.html.php', 
                'title' => 'review',
				'variables' => [
						'review' => $review
					]
				];
	}

	public function delete() {
		$this->reviewTable->delete($_POST['id']);
		header('location: /review/list');
	}

    public function edit() {

		if (isset($_POST['review'])) {
			
			$date = new DateTime();
			
			$review = $_POST['review'];
			$review['date'] = $date->format('Y-m-d H:i:s');
            

			$this->reviewTable->save($review);
           
			header('location: /viewers/list');
		}
		else {
			if  (isset($_GET['id'])) {
				$result = $this->reviewTable->find('id', $_GET['id']);
				$review= $result[0];
			}
			else  {
				$review= false;
			}

			return [
				'template' => 'reviewlayout.html.php',
				'variables' => ['review' => $review],             
				'title' => 'review'
			];
		}
	}
    
	}
    ?>




