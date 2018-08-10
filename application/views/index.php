<?= $this->load->view('header.php',null,true) ?>
<?= $this->load->view('carousel.php',null,true) ?>

<?= isset($content) ? $content : '' ?>

<?= $this->load->view('footer.php',null,true) ?>