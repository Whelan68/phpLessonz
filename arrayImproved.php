<html>
	<head>
		<style>
			#peeps {
				color:red;
			}
			.class{
				color:blue;
			}
		</style>
	</head>
	<body>
		<?php	
			$testArray = array('test1','test2','test3','test4','test5');
			echo "<ol>";
			foreach($testArray as $test){
				echo "<li class='class'>".$test."</li>";
			}
			echo "</ol>";
		?>
	</body>
</html>
