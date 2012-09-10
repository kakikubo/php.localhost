<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title><?php if (isset($title)): echo $this->escape($title) . ' - '; endif; ?>Mini Blog</title>
</head>
<body>
<div id="header">
  <h1><a href="<?php echo $base_url; ?>/">Mini Blog</a></h1>
</div>

<div id="main">
  <?php echo $_content; ?>
</div>
    
</body>
</html>
