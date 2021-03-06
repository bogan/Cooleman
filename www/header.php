<!DOCTYPE HTML>
<html>

	<head>
		<title><?php echo "$title" ?> </title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

        <style type="text/css">

			td
			{
				padding:5px
			}
		
			table.news
			{
				padding:5px;
				width:100%;
				border:thin;
				border-style:solid;
				border-color:black 
			}

			td.news
			{
				text-align:center;
				border:thin;
				border-style:solid 
			}

			th.news
			{
				text-align:center;
				border:thin;
				border-style:solid 
			}

            tfoot input {
                width: 100%;
                padding: 3px;
                box-sizing: border-box;
            }

		</style>
	</head>

	<body >
	
		<div class="container">

			<br/>
			
			<div id="header" class="row">
				<div class="span12">
					<table align="center" style="font-family: Arial, Helvetica, sans-serif">

						<tr>
							<td width="20">&nbsp;</td>
							<td align="center" width="76"><a href="index.php">
							<img alt="" border="2" height="60" src="../images/treesil.jpg" width="60"></a></td>
							<td align="center" width="76"><a href="aboutfgrd.php">
							<img alt="" border="2" height="60" src="../images/fernemb.jpg" width="60"></a></td>
							<td align="center" width="76"><a href="place.php">
							<img alt="" border="2" height="60" src="../images/treesn.jpg" width="60"></a></td>
							<td align="center" width="76"><a href="flora.php">
							<img alt="" border="2" height="60" src="../images/hibert.jpg" width="60"></a></td>
							<td align="center" width="76"><a href="fauna.php">
							<img alt="" border="2" height="60" src="../images/kestrels.jpg" width="60"></a></td>
							<td align="center" width="76"><a href="geology.php">
							<img alt="" border="2" height="60" src="../images/rocks.jpg" width="60"></a></td>
							<td align="center" width="76"><a href="fire.php">
							<img alt="" border="2" height="60" src="../images/silhiv.jpg" width="60"></a></td>
							<td align="center" width="76"><a href="dam.php">
							<img alt="" border="2" height="60" src="../images/damwalk.jpg" width="60"></a></td>
							<td align="center" width="76"><a href="members.php">
							<img alt="" border="2" height="60" src="../images/douglas.jpg" width="60"></a></td>
							<td align="center" width="76"><a href="walks.php">
							<img alt="" border="2" height="60" src="../images/damwalk.jpg" width="60"></a></td>
							<td align="center" width="76"><a href="news.php">
							<img alt="" border="2" height="60" src="../images/bench.jpg" width="60"></a></td>
							
							<td width="20">&nbsp;</td>
						</tr>
						<tr>
							<td width="20">&nbsp;</td>
							<td align="center" height="30"><a href="index.php">Home</a></td>
							<td align="center" height="30"><a href="about.php">About</a></td>
							<td align="center" height="30"><a href="place.php">Place</a></td>
							<td align="center" height="30"><a href="flora.php">Flora</a></td>
							<td align="center" height="30"><a href="fauna.php">Fauna</a></td>
							<td align="center" height="30"><a href="geology.php">Earth</a></td>
							<td align="center" height="30"><a href="fire.php">Fire</a></td>
							<td align="center" height="30"><a href="dam.php">Water</a></td>
							<td align="center" height="30"><a href="members.php">People</a></td>
							<td align="center" height="30"><a href="walks.php">Walks</a></td>
							<td align="center" height="30"><a href="news.php">News</a></td>
							
							<td width="20">&nbsp;</td>
						</tr>
					</table>
				</div>
			</div>
		
			<br/>
