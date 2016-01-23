<?php 
class Home extends CI_Controller {

    public function index()
	{
		$this->load->model('index_model');
        $data['index_batch_list'] = $this->index_model->get_index_batch_list();
        $data['title'] = 'Testing Palace';

        $data['index_faculty_list'] = $this->index_model->get_index_faculty_list();
        $data['title'] = 'Testing Palace';

        $data['index_testimonial_list'] = $this->index_model->get_index_testimonial_list();
        $data['title'] = 'Testing Palace';

        $data['home_client_list'] = $this->index_model->get_index_client_list();
        $data['title'] = 'Testing Palace';

        $data['home_news_events'] = $this->index_model->get_index_news_events();
        $data['title'] = 'Testing Palace';
        
       	$this->load->view('front/common/header');
        $this->load->view('front/home_page',$data);
        $this->load->view('front/common/footer');
	}
}
?>