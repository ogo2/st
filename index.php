<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <script type="text/javascript" src="assets/frame.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <h1>Калькулятор</h1>
      <form method="post" action="functions.php">
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><div class="btn-group me-2" role="group" aria-label="Первая группа">
              <div class="input-group mb-3">
                <button class="btn btn-outline-secondary" value="C" type="button" style="width: 50px; background-color: #605d63; color: white;" id="button-addon1">С</button>
                <input type="text" name='otv' id='sosat' class="form-control" style="width: 150px;"  aria-label="Пример текста с надстройкой кнопкой" aria-describedby="button-addon1">
              </div>


            </div></li>
            <li class="list-group-item"><div class="btn-group me-2" role="group" aria-label="Первая группа">
              <button type="button" id="but_7" value="7" style="width: 50px;" class="btn btn-outline-secondary">7</button>
              <button type="button" value="8" style="width: 50px;" class="btn btn-outline-secondary">8</button>
              <button type="button" value="9" style="width: 50px;" class="btn btn-outline-secondary">9</button>
              <button type="button" value="*"  style="width: 50px; background-color: #605d63; color: white;" class="btn btn-outline-secondary">*</button>
            </div></li>
                      <li class="list-group-item"><div class="btn-group me-2" role="group" aria-label="Первая группа">
              <button type="button" value="4" style="width: 50px;" class="btn btn-outline-secondary">4</button>
              <button type="button" value="5" style="width: 50px;" class="btn btn-outline-secondary">5</button>
              <button type="button" value="6" style="width: 50px;" class="btn btn-outline-secondary">6</button>
              <button type="button" value="-" style="width: 50px; background-color: #605d63; color: white;" class="btn btn-outline-secondary">-</button>
            </div></li>
                      <li class="list-group-item"><div class="btn-group me-2" role="group" aria-label="Первая группа">
              <button type="button" style="width: 50px;" value="1" class="btn btn-outline-secondary">1</button>
              <button type="button" style="width: 50px;" value="2" class="btn btn-outline-secondary">2</button>
              <button type="button" style="width: 50px;" value="3" class="btn btn-outline-secondary">3</button>
              <button type="button" value="+" style="width: 50px; background-color: #605d63; color: white;" class="btn btn-outline-secondary">+</button>
            </div></li>
            <li class="list-group-item"><div class="btn-group me-2" role="group" aria-label="Первая группа">
              <button type="button" value="/" style="width: 50px; background-color: #605d63; color: white;" class="btn btn-outline-secondary">\</button>
              <button type="button" value="0" style="width: 50px;" class="btn btn-outline-secondary">0</button>
              <button type="button" value="," style="width: 50px; background-color: #605d63; color: white;" class="btn btn-outline-secondary">,</button>
              <button type="submit" id="otvet" value="=" style="width: 50px; background-color: #605d63; color: white;" class="btn btn-outline-secondary">=</button>
            </div></li>
          </ul>
      </form>
    </div>

    <script src="assets/functions.js"></script>
    <?php 
      if (isset($_POST['otv'])) {
      echo "string";
      $SEMEE = $_POST['otv'];
      echo $_POST['otv'];
    }else{
      $SEMEE = '';
    }

    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>
