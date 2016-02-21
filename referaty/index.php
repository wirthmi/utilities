<?php

	include('./error.php');
	include('./initialization.php');
	include('./database.php');
	
	$db = new Database();

	if ((!empty($_POST['id'])) && (!empty($_POST['student']))
			&& (mb_strlen($_POST['student']) <= 255))
	{
		$db->q("UPDATE topics SET "
			. "student = '" . p2db($_POST['student']) . "', "
			. "time = NOW(), "
			. "ip = '" . p2db($_SERVER['REMOTE_ADDR']) . "'"
			. " WHERE id = " . $_POST['id'] . " AND student IS NULL");
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>

	<head>
		<title>Referáty</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

		<style type="text/css">
			body { background-color: #e6eae9; } 
			table { margin-top: 25px; background-color: white; border-collapse: collapse; }
			td { height: 50px; padding: 8px 15px; border: 2px solid #c1dad7; vertical-align: center; }
			td.action { min-width: 310px; }
			p { width: 600px; }
		</style>
	</head>



	<body>
		<h1>Referáty</h1>

		<p>
			délka projevu minimálně 15 - maximálně 20 min, prezentace
			přes dataprojektor, referát není možné jen přečíst z předlohy,
			schopnost reagovat na otázky k tématu
		</p>

		<table>
			<?php
				$topics = $db->q("SELECT * FROM topics");

				foreach ($topics as $topic)
				{
					echo "<tr><td>" . $topic['name'] . "</td><td class=\"action\">";

					if (!empty($topic['student']))
						echo "rezervováno pro <b>" . $topic['student'] . "</b>";
					else
						echo "<form action=\"./index.php\" method=\"post\">"
							. "<input type=\"hidden\" name=\"id\" value=\"" . $topic['id'] . "\" />"
							. "<input type=\"text\" name=\"student\" />&nbsp;"
							. "<input type=\"submit\" value=\"rezervovat\" />"
							. "</form>";
					
					echo "</td></tr>";
				}
			?>
		</table>

	</body>

</html>

<?php
	unset($db);
?>