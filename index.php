
	<?php
	include ($_SERVER['DOCUMENT_ROOT'].'/database.php');
	$sql = "SELECT * FROM article ORDER BY Post DESC LIMIT 5;";
	$result = mysqli_query($conn, $sql);
	mysqli_close($conn);
	if (mysqli_num_rows($result) > 0)
		{
			// output data of each row
			while($row = mysqli_fetch_assoc($result))
			{
			echo 	"<div class=\"articleBox\">
						<div  class=\"asideArticleImage\"> 
							<a class=\"\" href=\" ".$row["articleLink"]." \" title=\" ".$row["articleTitle"]." \" ><img class=\"img img-responsive articleImage\" width=\"100\" height=\"70\" alt=\" ".$row["imageAlt"]." \" src=\"".$row["imageLink2"]." \" title=\" ".$row["articleTitle"]." \" ></img></a>
						</div>
						<div class=\"asideArticleTitle\">
							<h3><a  title=\" ".$row["articleTitle"]." \" href=\"  ".$row["articleLink"]." \">".$row["articleTitle"]."</a></h3>
							<div  style=\"color:#aaa;font-size:11px;\"><span class=\" fa fa-calendar-o\"></span><span class=\"articleDate\" >".$row["articleDate"]."</span></div>
						</div>
					</div>";
			}
		} 
		else 
		{
		echo "0 results";
		}
	?>
