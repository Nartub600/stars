<?php
$content["domain"] = 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['REQUEST_URI']);
$pid = $_GET['pid'];
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta property="og:url" content="<?php echo $content["domain"]; ?>/share_promise.php?pid=<?php echo $pid; ?>&t=<?php echo $_GET['t']; ?>"/>
<meta property="og:description" content="Show your love for Augustus and Hazel's little infinity by making your own promise to live a meaningful life. And, your hometown could get a #TFIOS bench dedicated to Hazel & Gus. https://devcenter.dutchmonaco.net/tfios/site #TFIOSLittleInfinity"/>
<meta property="og:image" content="<?php echo $content["domain"]; ?>/site/shares/<?php echo $pid; ?>.png" />
<meta property="og:site_name" content="Little Infinities Galaxy" />
<meta property="og:type" content="website" /> 
<meta name="og:keywords" content="the fault in our stars, fault in our stars, Shailene Woodley, Ansel Elgort, Laura Dern, Nat Wolff, Josh Boone, John Green, Scott Neustadter, Michael H. Weber" />
<title>Little Infinities Galaxy</title>


