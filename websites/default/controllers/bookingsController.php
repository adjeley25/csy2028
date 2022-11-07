<?php
class bookingsController {
	private $bookingsTable;

	public function __construct($bookingsTable) {
		$this->bookingsTable = $bookingsTable;
	}

	public function list() {

		$bookings = $this->bookingsTable->findAll();
		return ['template' => 'booking.html.php', 
                'title' => 'Bookings ',
				'variables' => [
						'bookings' => $bookings
					]
				];
	}

	public function delete() {
		$this->bookingsTable->delete($_POST['id']);
		header('location: /bookings/list');
	}

    public function edit() {

		if (isset($_POST['bookings'])) {
			
			$date = new DateTime();
			
			$bookings = $_POST['bookings'];
			$bookings['bookingdate'] = $date->format('Y-m-d H:i:s');
            

			$this->bookingsTable->save($bookings);
           
			header('location: /viewers/list');
		}
		else {
			if  (isset($_GET['id'])) {
				$result = $this->bookingsTable->find('id', $_GET['id']);
				$bookings = $result[0];
			}
			else  {
				$bookings = false;
			}

			return [
				'template' => 'bookinglayout.html.php',
				'variables' => ['bookings' => $bookings],             
				'title' => 'Bookings'
			];
		}
	}
    
	}
    ?>




