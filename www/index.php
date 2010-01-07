
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
The 'itertools' package provides a variety of functions used to create iterators,
as defined by REvolution Computing's 'iterators' package.
It is strongly inspired by the Python itertools module, and includes a
number of functions of the same name.
The 'isplit' functions were inspired by functions in the 'snow' package,
and are particularly useful for parallel computing tasks.
</p>
<p>
There are also several utility functions included that were contributed
by Hadley Wickham that aid in writing iterators.  These include 'is.iterator',
'end_iterator', 'iteration_has_ended', and 'new_iterator'.
Thanks, Hadley!
</p>
<p>
This package is intended to be used with the 'foreach' package,
which has excellent support for iterators.
Used together, they can simplify many programming tasks.
</p>

<h2>Functions included in itertools:</h2>
<p>
<ul>
  <li>isplitVector: splits, or slices, a vector into shorter segments</li>
  <li>isplitCols: splits a matrix column-wise</li>
  <li>isplitRows: splits a matrix row-wise</li>
  <li>isplitIndices: iterate over 'chunks' of indices from 1 to n</li>
  <li>chain: chain multiple iterators together into one iterator</li>
  <li>enumerate: create an enumeration from an iterator</li>
  <li>ichunk: create lists of values from an iterator to aid manual chunking</li>
  <li>ihasNext: add a hasNext method to an iterator</li>
  <li>ifilter: only return values for which a predicate function returns true</li>
  <li>ifilterfalse: only return values for which a predicate function returns false</li>
  <li>ilimit: limit, or truncate, an iterator</li>
  <li>irep: create a repeating iterator</li>
  <li>izip: zip together multiple iterators</li>
  <li>product: zip together multiple iterators in cartesian product fashion</li>
  <li>recycle: recycle values from an iterator repeatedly</li>
  <li>is.iterator: indicates if an object is an iterator</li>
  <li>end_iteration: throws an exception to signal end of iteration</li>
  <li>iteration_has_ended: tests an exception to see if iteration has ended</li>
  <li>new_iterator: creates a new iterator object</li>
</ul>
</p>

<p> The <strong>project summary page</strong> you can find <a href="http://<?php echo $domain; ?>/projects/<?php echo $group_name; ?>/"><strong>here</strong></a>. </p>

</body>
</html>
