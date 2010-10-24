<?php

class Post extends AN_Model
{
	static function posts()
	{
		$posts = array();

		if (is_dir('./posts'))
		{
			foreach (glob('posts/*.html') as $p)
			{
				$posts[] = self::_post(basename($p));
			}
		}

		return $posts;
	}

	static function postWithId($id)
	{
		if (is_dir('./posts') && file_exists("./posts/{$id}.html"))
		{
			return self::_post($id.'.html');
		}

		return null;
	}

	static function _post($filename)
	{
		$matches = array();
		if (preg_match('/([0-9]{4}-[0-9]{2}-[0-9]{2})-([A-Z|a-z|\-]*?)\.html$/', $filename, $matches))
		{
			$file_contents = explode("\n\n", file_get_contents("./posts/{$filename}"));
			$data = array(
					'id' => $matches[1].'-'.$matches[2],
					'date' => strtotime($matches[1]),
					'title' => ucwords(str_ireplace('-', ' ', $matches[2])),
					'body' => $file_contents[1]
			);

			$tags = explode("\n", $file_contents[0]);

			foreach ($tags as $key => $value)
			{
				 $split = preg_split('/: ?/', $value);

				 $data[$split[0]] = $split[1];
			}

			return new self($data);
		}

		return null;
	}

	function body()
	{
		include_once('markdown/markdown.php');

		return Markdown($this->body);
	}
}

?>
