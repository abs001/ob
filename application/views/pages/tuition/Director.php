<?php
        $this->load->view('layout/Head');
?>
        <body>
<?php
        $this->load->view('layout/Nav');
        $this->load->view('pages/tuition/Searchbar');
        $this->load->view('pages/tuition/Content');
        $this->load->view('layout/Footer');
        $this->load->view('layout/Js');
?>      
        </body>