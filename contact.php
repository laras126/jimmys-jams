<?php 
$body_class = 'contact';
include('partials/header.php'); ?> 

	<h1>Contact</h1>
	
	<p>A blurb about contacting us can go here.</p>
	
	<div id="wufoo-rcddhmq0u7st4b">
	Fill out my <a href="https://laras126.wufoo.com/forms/rcddhmq0u7st4b">online form</a>.
	</div>
	<div id="wuf-adv" style="font-family:inherit;font-size: small;color:#a7a7a7;text-align:center;display:block;">The easy to use <a href="http://www.wufoo.com/form-builder/">Wufoo form builder</a> helps you make forms easy, fast, and fun.</div>
	<script type="text/javascript">var rcddhmq0u7st4b;(function(d, t) {
	var s = d.createElement(t), options = {
	'userName':'laras126',
	'formHash':'rcddhmq0u7st4b',
	'autoResize':true,
	'height':'497',
	'async':true,
	'host':'wufoo.com',
	'header':'show',
	'ssl':true};
	s.src = ('https:' == d.location.protocol ? 'https://' : 'http://') + 'www.wufoo.com/scripts/embed/form.js';
	s.onload = s.onreadystatechange = function() {
	var rs = this.readyState; if (rs) if (rs != 'complete') if (rs != 'loaded') return;
	try { rcddhmq0u7st4b = new WufooForm();rcddhmq0u7st4b.initialize(options);rcddhmq0u7st4b.display(); } catch (e) {}};
	var scr = d.getElementsByTagName(t)[0], par = scr.parentNode; par.insertBefore(s, scr);
	})(document, 'script');</script>

<?php include('partials/footer.php'); ?> 

