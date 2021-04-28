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

section {
  padding: 1rem;
  height: 100vh;
  scroll-snap-align: start;
  text-align: center;
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
}

.section-1{   
    background-color: #21D4FD;
    background-image: linear-gradient(19deg, #21D4FD 0%, #B721FF 100%);
}
.section-2{   
        background-image: linear-gradient(135deg, #FCCF31 10%, #F55555 100%);
}
.section-3{   
    background-color: #FF3CAC;
    background-image: linear-gradient(225deg, #FF3CAC 0%, #784BA0 50%, #2B86C5 100%);
}

.section-4{   
      background-image: linear-gradient(135deg, #E8D07A 0%, #5312D6 100%);
}

h1 {
  text-align: center;
  color: white;
  font-size: calc(1rem + 3vw);
}
</style>

<section class="section-1">
    <h1>Hi, I'm Alex Loughlin</h1>
    <p>A front-end developer with four years experience in building well designed, beautiful and forward-thinking websites. I have worked with digital agencies and in-house teams, currently working for Drew London as their Front End Developer. I am in love with coffee, gaming and Vitra Design. </p>
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