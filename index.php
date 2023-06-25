<!DOCTYPE html>
<html lang="ru">
    <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
      <script src="app.js"></script>
    </head>
    <title>Обратная связь</title>
    <body>
        <div class="container">
            <div class="row justify-content-center">
              <div class="col-md-6">
              <div><h5 style="text-align: center; margin: 20px;">Форма обратной связи</h5></div>
                <form action="submit-form.php" method="post" enctype="multipart/form-data" id="feedback-form">
                  <div class="form-group">
                    <label for="name"><span class="text-danger">*</span>Имя:</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                  </div>
                  <div class="form-group">
                    <label for="email"><span class="text-danger">*</span>E-mail:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                  </div>
                  <div class="form-group">
                    <label for="message"><span class="text-danger">*</span>Сообщение:</label>
                    <textarea class="form-control" id="message" name="message" rows="2" required></textarea>
                  </div>
                  <div class="form-group">
                    <label for="file">Файл (<span class="text-danger">*</span>.jpg, <span class="text-danger">*</span>.png):</label>
                    <input type="file" class="form-control" id="file" name="file">
                  </div>
                  <div id="feedback-messages" style="text-align: center; font-weight: bold; margin: 20px;">
                  </div>
                  <button type="submit" class="btn btn-primary btn-lg btn-block">Отправить</button>
                  <img src="nyan-cat.gif" alt="meow" width="620" height="150">
                </form>
              </div>
            </div>
          </div>
      </body>
</html>