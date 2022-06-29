<?php

/**
 * Created by Navatech.
 * @project Default (Template) Project
 * @author  Phuong
 * @email   notteen[at]gmail.com
 * @date    22/12/2020
 * @time    2:39 PM
 */

/* @var $this \yii\web\View */
?>

<h1>Multislider</h1>
<h2>A responsive, jQuery powered, mutli-slideshow.</h2>

<div id="exampleSlider">
	<div class="MS-content">
		<div class="item">
			<p>Item<br>1</p>
		</div>
		<div class="item">
			<p>Item<br>2</p>
		</div>
		<div class="item">
			<p>Item<br>3</p>
		</div>
		<div class="item">
			<p>Item<br>4</p>
		</div>
		<div class="item">
			<p>Item<br>5</p>
		</div>
		<div class="item">
			<p>Item<br>6</p>
		</div>
		<div class="item">
			<p>Item<br>7</p>
		</div>
		<div class="item">
			<p>Item<br>8</p>
		</div>
		<div class="item">
			<p>Item<br>9</p>
		</div>
		<div class="item">
			<p>Item<br>10</p>
		</div>
	</div>
	<div class="MS-controls">
		<button class="MS-left"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
		<button class="MS-right"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
	</div>
</div>
<script>
	$('#exampleSlider').multislider({
		interval: 4000,
		slideAll: true,
		duration: 1500
	});
</script>
