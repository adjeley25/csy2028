<?php
class adminController {
	private $adminTable;

	public function __construct($adminTable) {
		$this->adminTable = $adminTable;
	}

	
	public function about() {
		$admin = $this->adminTable->find('id', 1);
		return [
			'template' => 'about.html.php',
			'variables' => [],
            'title' => 'About us'
        
		];

	}

	public function adminpages() {
		$admin = $this->adminTable->find('id', 3);
		return [
			'template' => 'adminpages.html.php',
			'variables' => [],
            'title' => 'Kates kitchen Database'
        
		];

	}

	public function aboutfaqs() {
		$admin = $this->adminTable->find('id', 3);
		return [
			'template' => 'faqs.html.php',
			'variables' => [],
            'title' => 'Kates kitchen Database'
        
		];

	}

}
?>