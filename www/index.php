
<!-- This is the project specific website template -->
<!-- It can be changed as liked or replaced by other content -->

<?php

$domain=ereg_replace('[^\.]*\.(.*)$','\1',$_SERVER['HTTP_HOST']);
$group_name=ereg_replace('([^\.]*)\..*$','\1',$_SERVER['HTTP_HOST']);
$themeroot='http://r-forge.r-project.org/themes/rforge/';

echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en   ">

  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title><?php echo $group_name; ?></title>
	<link href="<?php echo $themeroot; ?>styles/estilo1.css" rel="stylesheet" type="text/css" />
  </head>

<body>

<!-- R-Forge Logo -->
<table border="0" width="100%" cellspacing="0" cellpadding="0">
<tr><td>
<a href="/"><img src="<?php echo $themeroot; ?>/images/logo.png" border="0" alt="R-Forge Logo" /> </a> </td> </tr>
</table>


<!-- get project title  -->
<!-- own website starts here, the following may be changed as you like -->

<h1>Welcome to the itertools project</h1>
<p>
The 'itertools' package provides a variety of functions used to create iterators.
It is strongly inspired by the Python itertools module, and includes a
number of functions of the same name.  It is intended to be used with the
'foreach' package, which has excellent support for iterators.
Together, they simplify many programming tasks.
</p>

<h2>Functions included in itertools:</h2>
<p>
<ul>
  <li>chain: chain multiple iterators together into one iterator</li>
  <li>enumerate: create an enumeration from an iterator</li>
  <li>ihasNext: add a hasNext method to an iterator</li>
  <li>ifilter: only return values for which a predicate function returns true</li>
  <li>ifilterfalse: only return values for which a predicate function returns false</li>
  <li>ilimit: limit, or truncate, an iterator</li>
  <li>irep: create a repeating iterator</li>
  <li>izip: zip together multiple iterators</li>
  <li>product: zip together multiple iterators in cartesian product fashion</li>
  <li>recycle: recycle values from an iterator repeatedly</li>
</ul>
</p>

<p> The <strong>project summary page</strong> you can find <a href="http://<?php echo $domain; ?>/projects/<?php echo $group_name; ?>/"><strong>here</strong></a>. </p>

</body>
</html>
