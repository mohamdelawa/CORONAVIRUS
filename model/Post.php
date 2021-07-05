<?php 
class Post{
    private $id;
    private $publisher;
    private $subject;
    private $date;
    private $comments;
    public function set_id ($id) {
		$this->id = $id;
	}

	public function get_id () {
		return $this->id;
	}
    public function set_publisher ($publisher) {
		$this->publisher= $publisher;
	}

	public function get_publisher() {
		return $this->publisher;
	}
    public function set_subject ($subject) {
		$this->subject = $subject;
	}

	public function get_subject () {
		return $this->subject;
	}
    public function set_date ($date) {
		$this->date = $date;
	}

	public function get_date () {
		return $this->date;
	}

     public function set_comments ($comments) {
		$this->comments = $comments;
	}

	public function get_comments () {
		return $this->comments;
	}


    

}
?>