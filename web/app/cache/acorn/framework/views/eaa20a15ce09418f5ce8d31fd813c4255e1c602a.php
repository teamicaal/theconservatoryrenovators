<?php
$script_header = get_field('script_header', 'option');
$script_schema_global = get_field('script_schema_global', 'option');
?>
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="preload" href="<?= \Roots\asset('fonts/roboto/Roboto-Regular.woff2'); ?>" as="font" crossorigin="anonymous" />
  <link rel="preload" href="<?= \Roots\asset('fonts/roboto/Roboto-Italic.woff2'); ?>" as="font" crossorigin="anonymous" />
  <link rel="preload" href="<?= \Roots\asset('fonts/oswald/Oswald-Regular.woff2'); ?>" as="font" crossorigin="anonymous" />
  <link rel="apple-touch-icon" sizes="180x180" href="<?= \Roots\asset('images/favicon/apple-touch-icon.png'); ?>">
  <link rel="icon" type="image/png" sizes="32x32" href="<?= \Roots\asset('images/favicon/favicon-32x32.png'); ?>">
  <link rel="icon" type="image/png" sizes="16x16" href="<?= \Roots\asset('images/favicon/favicon-16x16.png'); ?>">
  <link rel="manifest" href="<?= \Roots\asset('images/favicon/site.webmanifest'); ?>">
  <link rel="mask-icon" href="<?= \Roots\asset('images/favicon/safari-pinned-tab.svg'); ?>" color="#0076ff">
  <meta name="msapplication-TileColor" content="#0076ff">
  <meta name="theme-color" content="#ffffff">
  <?php wp_head() ?>
  <?php echo $script_header ? $script_header : null; ?>

  <?php echo $script_schema_global ? $script_schema_global : null; ?>

  <?php if( is_user_logged_in() ): ?>
  <style>
    #wpadminbar {
      opacity: 0;
      transition: all .2s ease;
    }
    #wpadminbar:hover {
      opacity: 1;
    }
  </style>
  <?php endif; ?>
</head>
<?php /**PATH /Users/mattpickles/Local Sites/wraith/web/app/themes/wraith/resources/views/partials/head.blade.php ENDPATH**/ ?>