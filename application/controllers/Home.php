<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
	{
		public $data;
	    public function __construct()
		    {
		        parent::__construct();
		        $this->load->model("home_model","hmod");
		    }
		public function index()
			{
				$this->data['top']		=	$this->hmod->getTop(3);
				$this->data['latest']	=	$this->hmod->getLatest(5);
				$this->data["view"] 	=   "home";
				$this->load->view('structure',$this->data);
			}
		public function category($id,$title=NULL)
			{
				$this->data["view"] =   "category";
				$this->load->view('structure',$this->data);
			}	
		public function article($id,$title=NULL)
			{
				$this->data["view"] =   "article";
				$this->load->view('structure',$this->data);
			}
		public function video($id,$title=Null)
			{
				$this->data["view"] =   "videos";
				$this->load->view('structure',$this->data);
			}
		public function show($id,$title=Null)
			{
				$this->data["view"] =   "home";
				$this->load->view('structure',$this->data);
			}			
	}

	