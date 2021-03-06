<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?=$this->title?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <style>
      body {
          font-family: Menlo, Monaco, Consolas, "Courier New", monospace;
          font-size: 12px;
          color: #333333;
      }
    </style>
  </head>

  <body>
    <?php $this->show_header(); ?>
    <?php $this->show_navbar(); ?>

    <div class="container">
    <?php $this->show_page(); ?>
    </div>
    
    <?php $this->show_footer(); ?>
  </body>
</html>

