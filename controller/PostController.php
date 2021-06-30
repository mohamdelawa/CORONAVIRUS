<?php

include_once('../model/Post.php');
include_once('Connection.php');
include_once('../view/Table.php');

class PostController {

	public static function get_posts () {
		$connection = DBConnection::get_instance()->get_connection();

		$query = "SELECT * FROM posts";
		$result = mysqli_query($connection, $query);

		$posts = array();

		if ($result != false) {
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					$post = new Post();
					$post->set_id($row["id"]);
					$post->set_publisher($row["publisher"]);
					$post->set_subject($row["subject"]);
					$post->set_date($row["date"]);
					array_push($posts, $post);
				}
			}
		}

		return new Table($posts);
	}
}

?>