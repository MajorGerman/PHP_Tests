<?php

class MY_Controller extends CI_Controller {

    public function __construct(){
        parent::__construct();

        $this->data['title'] = "Kinobasa chto-to tam";

        $this->load->model('News_model');
        $this->data['news'] = $this->News_model->getNews();

        $this->load->model('Films_model');
        $this->data['films'] = $this->News_model->getFilmsByRating(10);

        $this->data['category'] = "";
    }
}