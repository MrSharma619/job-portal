<?php

class Job{
	private $db;

	public function __construct()
	{
		$this->db = new Database;
		# code...
	}

	//get all jobs
	public function getAllJobs()
	{
		$this->db->query("select jobs.*, categories.name AS cname 
			from jobs
			inner join categories
			on jobs.category_id = categories.id
		 	order by post_date desc");


		//assign result set
		$results = $this->db->resultSet();
		return $results;
	}

	//get categories
	public function getCategories()
	{
		$this->db->query("select * from categories");
		//assign result set
		$results = $this->db->resultSet();
		return $results;	
		# code...
	}

	//get jobs by category
	public function getByCategory($category)
	{
		$this->db->query("select jobs.*, categories.name AS cname 
			from jobs
			inner join categories
			on jobs.category_id = categories.id
			where jobs.category_id = $category
		 	order by post_date desc");


		//assign result set
		$results = $this->db->resultSet();
		return $results;
		# code...
	}


	//get category
	public function getCategory($category_id)
	{
		$this->db->query("select * from categories where id = :category_id");
		# code...
		$this->db->bind(':category_id', $category_id);

		//assign row
		$row = $this->db->single();

		return $row;
	}


	public function getJob($id)
	{
		$this->db->query("select * from jobs where id = :id");
		# code...
		$this->db->bind(':id', $id);

		//assign row
		$row = $this->db->single();

		return $row;
		# code...
	}

	//create job
	public function create($data)
	{
		//insert query
		$this->db->query("insert into jobs(category_id, job_title, company, description, location, salary, contact_user, contact_email) 

			values(:category_id, :job_title, :company, :description, :location, :salary, :contact_user, :contact_email)");

		//bind data
		$this->db->bind(':category_id', $data['category_id']);
		$this->db->bind(':job_title', $data['job_title']);
		$this->db->bind(':company', $data['company']);
		$this->db->bind(':description', $data['description']);
		$this->db->bind(':location', $data['location']);
		$this->db->bind(':salary', $data['salary']);
		$this->db->bind(':contact_user', $data['contact_user']);
		$this->db->bind(':contact_email', $data['contact_email']);

		//execute
		if($this->db->execute()){
			return true;
		}
		else{
			return false;
		}

		# code...
	}

	//delete job
	public function delete($id)
	{
		//insert query
		$this->db->query("delete from jobs where id = $id");
		
		//execute
		if($this->db->execute()){
			return true;
		}
		else{
			return false;
		}
	
		# code...
	}


	//update job
	public function update($id, $data)
	{
		//insert query
		$this->db->query("update jobs set category_id = :category_id,
			job_title = :job_title,
			company = :company,
			description = :description,
			location = :location,
			salary = :salary,
			contact_user = :contact_user,
			contact_email = :contact_email
			where id = $id");

		//bind data
		$this->db->bind(':category_id', $data['category_id']);
		$this->db->bind(':job_title', $data['job_title']);
		$this->db->bind(':company', $data['company']);
		$this->db->bind(':description', $data['description']);
		$this->db->bind(':location', $data['location']);
		$this->db->bind(':salary', $data['salary']);
		$this->db->bind(':contact_user', $data['contact_user']);
		$this->db->bind(':contact_email', $data['contact_email']);

		//execute
		if($this->db->execute()){
			return true;
		}
		else{
			return false;
		}

		# code...
	}


}


?>