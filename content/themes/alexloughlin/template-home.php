<?php
/**
 * Template Name: Home Page Template
 */

get_header();

?>

<style type="text/css">
* {
  box-sizing: border-box;
}

html {
  font-family: sans-serif;
  -ms-scroll-snap-type: mandatory;
      scroll-snap-type: mandatory;
  -ms-scroll-snap-points-y: repeat(100vh);
      scroll-snap-points-y: repeat(100vh);
  -ms-scroll-snap-type: y mandatory;
      scroll-snap-type: y mandatory;
}
</style>

<section class="section-1">
  <div>
    <h1>Hi, I'm Alex Loughlin</h1>
    <h3>A front-end developer with four years experience in building well designed, beautiful and forward-thinking websites. I have worked with digital agencies and in-house teams, currently working for Drew London as their Front End Developer. I am in love with coffee, gaming and Vitra Design. </h3>
  </div>
 </section>
<section class="section-2">
        <h1>Section Two</h1>
</section>
<section class="section-3">
        <h1>Section Three</h1>
</section>
<section class="section-4">
        <h1>Section Four</h1>
</section>
<section style="background-color: black">
        <h1>Section Five</h1>
</section>

<script type="text/javascript">
	const gra = function (min, max) {
	return Math.random() * (max - min) + min;
		};
		const init = function () {
			let items = document.querySelectorAll("section");
			for (let i = 0; i < items.length; i++) {
				
			}
			cssScrollSnapPolyfill();
		};
		init();
</script>


<?php
get_footer();