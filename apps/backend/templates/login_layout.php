<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="id" lang="id">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">    
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
    <!--[if lt IE 9]>
        <script src="/js/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="/js/respond/1.4.2/respond.min.js"></script>
    <![endif]-->    
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">      
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">        
        <!-- Main content -->
        <section class="content">
        <?php echo $sf_content ;?>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 0.0.1
        </div>
        <strong>Copyright &copy; <?php echo date('Y');?> <a href="http://www.openthinklabs.com" target="_blank">OpenThink Labs</a>.</strong>
      </footer>
    </div><!-- ./wrapper -->
  </body>  
</html>>