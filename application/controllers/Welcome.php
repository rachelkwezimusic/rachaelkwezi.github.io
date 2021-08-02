<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Welcome extends CI_Controller {
    // protected $facebookPageID;
    public function __construct() {
       parent::__construct();
        $this->load->helper(array('url','html')); // load url and html hlpers
        // $this->facebookPageID = '377678419433855'; // set page id
        //$this->load->model('albums_model');

    }
	public function index()
	{   $data['title'] = 'home';

		$this->load->view('includes/header', $data);
		$this->load->view('home', $data);
		$this->load->view('includes/footer', $data);
	}

	// public function events()
	// {	$data['title'] = 'events';
	// 	$this->load->view('includes/header', $data);
	// 	$this->load->view('events', $data);
	// 	$this->load->view('includes/footer', $data);
	// }
	public function music()
	{   $data['title'] = 'music';

		$this->load->view('includes/header', $data);
		$this->load->view('music', $data);
		$this->load->view('includes/footer', $data);
	
	}
	public function abouts()
	{   $data['title'] = 'abouts';

		$this->load->view('includes/header', $data);
		$this->load->view('abouts', $data);
		$this->load->view('includes/footer', $data);
	
	}
	public function disco()
	{   $data['title'] = 'disco';

		$this->load->view('includes/header', $data);
		$this->load->view('disco', $data);
		$this->load->view('includes/footer', $data);
	
	}
	public function single()
	{   $data['title'] = 'single';

		$this->load->view('includes/header', $data);
		$this->load->view('single', $data);
		$this->load->view('includes/footer', $data);
	
	}
	public function blog()
	{	$data['title'] = 'blog';
		$this->load->view('includes/header', $data);
		$this->load->view('blog' , $data);
		$this->load->view('includes/footer', $data);
	}
	public function about()
	{	$data['title'] = 'about';
		$this->load->view('includes/header', $data);
		$this->load->view('about' , $data);
		$this->load->view('includes/footer', $data);
	}
	public function contact()
	{	$data['title'] = 'contact';
		$this->load->view('includes/header', $data);
		$this->load->view('contact', $data);
		$this->load->view('includes/footer', $data);
	}


 
    // public function index()
    // {
    //     $albums = $this->facebook->api($this->facebookPageID.'?fields=albums'); // api call to facebook to fech all albums of the given page
    //     // list all albums
    //     foreach($albums['albums']['data'] as $album) {
    //        echo anchor('welcome/view_album/'.$album['id'],img(array('src' => $this->get_album_cover($album['cover_photo']),'alt' => $album['name'])));
    //        echo $album['name'];
    //        echo br();
    //     }
    // }
   // view single album pics
   //  public function view_album($album_id=false) {
       
   //      if(!$album_id) show_404();
       
   //      $photos = $this->facebook->api($album_id.'?fields=photos');
   //      foreach($photos['photos']['data'] as $photo) {
   //          echo img(array('src' => $photo['source']));
   //      }
   //  }
   // // get album cover pic 
   //  public function get_album_cover($cover_id) {
   //      $cover_pic = $this->facebook->api($cover_id);
   //      return $cover_pic['source'];
   //  }
}

?>
