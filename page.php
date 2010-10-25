<?php

class Page extends AN_Model
{
	static function pages()
	{
		$pages = array();

		if (is_dir('./pages'))
		{
			foreach (glob('pages/*.html') as $p)
			{
				$pages[] = self::_page(basename($p));
			}
		}

		return $pages;
	}

	static function pageWithId($id)
	{
		if (is_dir('./pages') && file_exists("./pages/{$id}.html"))
		{
			return self::_page($id.'.html');
		}

		return null;
	}

	static function _page($filename)
	{
		$matches = array();
		if (preg_match('/([A-Z|a-z|\-]*?)\.html$/', $filename, $matches))
		{
			$file_contents = explode("\n\n", file_get_contents("./pages/{$filename}"));
			$data = array(
					'id' => $matches[1],
					'title' => ucwords(str_ireplace('-', ' ', $matches[1])),
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

	function date()
	{
		return date('l, \t\h\e jS \of F, Y', $this->date);
	}
}

?>
