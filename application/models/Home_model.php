<?php
	class Home_model extends CI_Model
		{
			public function __construct()
				{
					parent::__construct();
				}

		public function getNavigation(){
				$dbh = $this->db->where('site', 'pulser')
								->where("parentid",0)
								->where("inactive is NULL")
								->get("std_category");
				if ($dbh):
					return $dbh->result_array();
				else:
					throw new Exception("DB Not Connecting!");
				endif;
		}
		public function getTop($limit,$start=0)
		{
			// $dbh = $this->db->where("inactive is null")

		}
		public function getLatest($limit,$start=0)
		{
			$dbh =  $this->db->where("inactive is null")
				              ->where("source",'pulser')
				              ->limit($limit,$start)
				              ->order_by("publishdate","DESC")
				              ->get("std_article");

			if($dbh):
				if($dbh->num_rows()> 0):
					return $dbh->result_array();
				endif;
			else:
				return $this->db->error();
			endif;
		}

		public function getCategoryLatest($catId,$limit)
		{
			$dbh = $this->db->query('SELECT * FROM std_article WHERE source = "pulser" AND categoryid ='.$catId.' AND inactive IS NULL ORDER BY posteddate DESC LIMIT '.$limit);
			if($dbh):
				if($dbh->num_rows()> 0):
					return $dbh->result_array();
				endif;
			else:
				return $this->db->error();
			endif;
		}

		public function getCategory()
		{

		}

		public function getArticle($id)
		{
			$id  =  (int)$id;
			$dbh =  $this->db->where("id",$id)
				              ->where("inactive is NULL")
				              ->get("std_article");
			if($dbh):
				if($dbh->num_rows()> 0):
					return $dbh->result_array();
				endif;
			else:
				return $this->db->error();
			endif;
		}

		public function getDummyData()
		{
			$dbh = $this->db->select("std_article.*")
						->join("std_category","std_category.id=std_article.categoryid")
						->where("std_article.inactive is null")
						->where("source","pulser")
						->where("(std_category.id=435 or std_category.parentid=0)")
						->where("parentcategorylistorder is not null")
						->order_by("std_article.publishday","DESC")
						->order_by("std_article.parentcategorylistorder","ASC")
						->order_by("std_article.publishdate","DESC")
						->limit(20,0)
						->get("std_article");
			return $dbh->result_array();
		}

}
