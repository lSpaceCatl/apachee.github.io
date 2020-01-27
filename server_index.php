<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ImageBox</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="favicon.png" />
  </head>
  <body class="bg-light">
   <header>
      <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container d-flex justify-content-between">
          <a href="." class="navbar-brand d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
            <strong>ImageBox</strong>
          </a>
        </div>
      </div>
    </header>
    <main role="main" class="container card my-4">
      <div class="card-body">
        <p>Загрузите ваше изображение.</p>
        <div>
  <?php include 'uploader.php.inc'; ?>
        </div>
        <p>
          <form enctype="multipart/form-data" action="." method="POST">
            <input name="file" type="file" accept="image/*" />
            <button type="submit" class="btn btn-dark btn-primary"><svg xmlns="http://www.w3.org/2000/svg" style="fill: white; vertical-align: -2px; margin-right: 3px;" width="16" height="16" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M7 9H5l3-3 3 3H9v5H7V9zm5-4c0-.44-.91-3-4.5-3C5.08 2 3 3.92 3 6 1.02 6 0 7.52 0 9c0 1.53 1 3 3 3h3v-1.3H3c-1.62 0-1.7-1.42-1.7-1.7 0-.17.05-1.7 1.7-1.7h1.3V6c0-1.39 1.56-2.7 3.2-2.7 2.55 0 3.13 1.55 3.2 1.8v1.2H12c.81 0 2.7.22 2.7 2.2 0 2.09-2.25 2.2-2.7 2.2h-2V12h2c2.08 0 4-1.16 4-3.5C16 6.06 14.08 5 12 5z"/></svg> Загрузить</button>
          </form>
        </p>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/dQw4w9WgXcQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <p>Rickrolled by Apachee (@ItIsApacheee)</p>
        <div><small>Учтите, что каждые 15 минут сервис перезапускается и все файлы удаляются.</small></div>
      </div>
    </main>
    <footer class="text-muted container">
      <p>© 2019 ImageBox Jackal Ed.</p>
    </footer>
  </body>
</html>