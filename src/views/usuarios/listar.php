<?php include '../../../config/header.php'; ?>
<for>
<div class="form-group mt-2">
<label for="filtro">Digite um Nome para filtar</label>
<input type="text" name="filtar" id="filtrar" class="form-control">
<button type="submit" class="btn btn-outline-info mt-2" name="btnfiltar" id="btnfiltar"
>Filtrar</button>
</div>
</form>
<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>John</td>
      <td>Doe</td>
      <td>@social</td>
    </tr>
  </tbody>
</table>