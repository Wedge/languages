<?php
// Version: 2.0; ManageSettings

$txt['caching_information'] = '<div class="center" style="font-weight: bold; text-decoration: underline">Important! Read this first before enabling these features.</div><br>
	Wedge supports caching through the use of accelerators. The currently supported accelerators include:<br>
	<ul class="list">
		<li>APC</li>
		<li>Memcached</li>
		<li>Zend Platform/Performance Suite (not Zend Optimizer)</li>
		<li>XCache</li>
	</ul>
	Caching will work best if you have PHP compiled with one of the above optimisers, or have a Memcached server available (along with the associated PHP extension.)
	If you do not have any optimiser installed, Wedge will do file-based caching.<br><br>
	Wedge performs caching at a variety of levels. The higher the level of caching enabled, the more CPU time will be spent
	retrieving cached information. If caching is available on your machine, it is recommended that you try caching at level 1 first.
	<br><br>
	Note that if you use Memcached, you need to provide the server details in the setting below. Wedge will perform random load balancing across the servers.
	They should be entered as a comma-separated list as shown in the example below:<br>
	&quot;server1,server2,server3:port,server4&quot;<br><br>
	If you do not specify a port, the default port (11211) will be used.
	<br><br>
	%1$s';
