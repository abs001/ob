<?php
        $this->load->view('layout/Head');
?>
        <body>
<?php
        $this->load->view('layout/Nav');
		$this->load->view('pages/automobile/search/Searchbar');
        $this->load->view('pages/automobile/search/Content');
        $this->load->view('layout/Footer');
        $this->load->view('layout/Js');
?>      
        </body>