<?php

class Posters {
	private $posts;

	public function __construct ($posts) {
		$this->posts = $posts;
	}

	public function render () {
		$i =1;
		foreach ($this->posts as $key => $post) {
			echo '<tr>
				<td>'.$i++.'</td>
				<td>'.$post->get_publisher().'</td>
				<td>'.$post->get_subject().'</td>
				<td>'.$post->get_date().'</td>
			</tr>';
		}
	}
}

?>