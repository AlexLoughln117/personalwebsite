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
  -ms-scroll-snap-type: mandatory;
      scroll-snap-type: mandatory;
  -ms-scroll-snap-points-y: repeat(100vh);
      scroll-snap-points-y: repeat(100vh);
  -ms-scroll-snap-type: y mandatory;
      scroll-snap-type: y mandatory;
}
</style>

<section class="section-1">
  <div class="section-inner">
    <h1>Hi, I'm Alex Loughlin</h1>
    <h3>A front-end developer with four years experience in building well designed, beautiful and forward-thinking websites. I have worked with digital agencies and in-house teams, currently working for Drew London as their Lead Developer. I am in love with coffee, gaming and Vitra Design. </h3>
  </div>
 </section>
<section class="section-2">
        <div class="section-inner">
           <h1>Get in Touch</h1>
           <h3>Looking to to send me a message about work or anything use my email below.</h3>
           <a href="mailtio:aloughlin711@gmail.com">Email me</a>
        </div>
</section>
<section class="section-3">
        <div class="section-inner">
                <h1>Web Work</h1>
                <h3>Click through to see a sample of web projects I have worked on.</h3>
                <a href="">See work</a>
        </div>
</section>
<section class="section-4">
        <div class="section-inner">
                <h1>What I'm Playing</h1>
                <h3>Thoughts on the games I'm currently playing.</h3>
                <a href="">See the list</a>
        </div>
</section>
<!-- <section style="background-color: black">
        <h1>Section Five</h1>
</section> -->

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