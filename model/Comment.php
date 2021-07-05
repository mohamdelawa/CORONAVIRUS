<?php 
class Comment{
    private $id;
    private $commentator;
    private $reply;
    private $date;
    private $post_id;

    public function set_id ($id) {
		$this->id = $id;
	}

	public function get_id () {
		return $this->id;
	}
    public function set_commentator ($commentator) {
		$this->commentator= $commentator;
	}

	public function get_commentator() {
		return $this->commentator;
	}
    public function set_reply ($reply) {
		$this->reply = $reply;
	}

	public function get_reply () {
		return $this->reply;
	}
    public function set_date ($date) {
		$this->date = $date;
	}

	public function get_date () {
		return $this->date;
	}

 public function set_post_id ($post_id) {
		$this->post_id = $post_id;
	}

	public function get_post_id () {
		return $this->post_id;
	}

    

}
?>