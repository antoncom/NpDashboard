
<?php require_once './include/page_header.php'; ?>

<header class="header-title">
	<nav class="sidebar-nav-toggle" role="navigation" aria-label="Sidebar control">
		<button type="button" id="sidebar-button-toggle" class="button-toggle" title="Show sidebar">Show sidebar</button>
	</nav>
	<div><h1 id="page-title-general">NetPing Dashboard</h1></div>
</header>

<?php
	// Change the ip/port here if NetPing Dashboard app address/port is changed.
	// ========================================================================
	$port = "3000";
	$ip = $_SERVER['HTTP_HOST'];

	$npd_url = "http://" . $ip . ":" . $port;
	echo (new CIFrame($src=$npd_url, "100%", "100%", $scrolling="auto"))->toString();

	require_once './include/page_footer.php';
?>
