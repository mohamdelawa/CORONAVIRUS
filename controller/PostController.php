<?php

include_once('../model/Post.php');
include_once('../model/Comment.php');

include_once('Connection.php');
include_once('../view/Posters.php');

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
					$query1 = "SELECT * FROM Comments where post_id = ".$row['id'];
		            $result1 = mysqli_query($connection, $query1);
                    $comments = Array();
                   if ($result1 != false) {
		              if ($result1->num_rows > 0) {
			                while($row1 = $result1->fetch_assoc()) {
					             $comment = new Comment();
                                 $comment->set_id($row1['id']);
                                 $comment->set_commentator($row1['commentator']);
                                 $comment->set_reply($row1['reply']);
                                 $comment->set_date($row1['date']);
                                 array_push($comments, $comment);
				            }
			            }
		           }
                    $post->set_comments($comments);
					array_push($posts, $post);
				}
			}
		}

		return new Posters($posts);
	}
public static function add_post(){
	if( $_REQUEST['Publisher'] !=null && $_REQUEST['subject']!=null){
		$connection = DBConnection::get_instance()->get_connection();
		$publisher = mysqli_real_escape_string($connection, $_REQUEST['Publisher']);
		$subject = mysqli_real_escape_string($connection, $_REQUEST['subject']);
		$query = "INSERT INTO posts ( publisher, subject)  VALUES ('".$publisher."','".$subject."')";
		$result = mysqli_query($connection, $query);
		
		if($result == TRUE){
			header('Location: posts_view.php');
			exit;
		}
	}
	header('Location: javascript:history.back()');
			exit;
}

public static function add_comment(){
	if( $_REQUEST['reply'] !=null && $_REQUEST['commentator']!=null){
		$connection = DBConnection::get_instance()->get_connection();
		$commentator = mysqli_real_escape_string($connection, $_REQUEST['commentator']);
		$reply = mysqli_real_escape_string($connection, $_REQUEST['reply']);
		$query = "INSERT INTO posts ( commentator, reply)  VALUES ('".$commentator."','".$reply."')";
		$result = mysqli_query($connection, $query);
		
		if($result == TRUE){
			header('Location: table_view.php');
			exit;
		}
	}
	header('Location: javascript:history.back()');
			exit;
}

}

?>