wazzup!

<html>
  <head>
    <title>Teste</title>
  </head>
  <body>
    <?php foreach($result as $row):?>
    <h3><?=$row->title?></h3>
    <p><?=$row->text?></p>
    <br />
    <?php endforeach;?>

    <p>
      <form action="http://localhost/lab/index.php/home/put" method="post">
	<input type="text" name="title"/> title <br/>
	<input type="text" name="text" /> text <br/>
	<input type="submit" value="Enviar"/>
      </form>
    </p>


  </body>
</html>
