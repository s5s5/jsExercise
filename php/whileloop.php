<!DOCTYPE html>
<html>
    <head>
		<title>A loop of your own</title>
        <style>
        .coin {
            height: 50px;
            width: 50px;
            border-radius: 25px;
            background-color: grey;
        	text-align: center;
        	font-weight: bold;
        	font-family: sans-serif;
        	color: white;
        	margin: 10px;
        	display: inline-block;
        	line-height: 50px;
        	font-size: 20px;
        }
        </style>
	</head>
	<body>
    <?
	//Add while loop below
    $i = 0;
    while ($i < 4) {
        $j = rand(0, 1);
        if ($j) {
            echo "<div class=\"coin\">{$j}</div>";
			$i ++;
        } else {
            echo "<div class=\"coin\">{$j}</div>";
			$i ++;
        }
    }
    ?>
    </body>
</html>