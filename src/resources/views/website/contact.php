<?php

?>

<form action="<?= $url; ?>" method="post">
  <select name="_method">
    <option value="POST">POST</option>
    <option value="PUT">PUT</option>
    <option value="PATCH">PATCH</option>
    <option value="DELETE">DELETE</option>
  </select>

  <input type="text" name="first_name" value="Fagner">
  <input type="text" name="last_name" value="Lopes">
  <input type="email" name="email" value="fagner@gmail.com">

  <button>Enviar</button>

</form>