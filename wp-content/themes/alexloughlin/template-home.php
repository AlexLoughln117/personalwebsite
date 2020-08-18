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
  border-bottom: 1px solid white;
  padding: 1rem;
  height: 100vh;
  scroll-snap-align: start;
  text-align: center;
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
}

h1 {
  text-align: center;
  color: white;
  font-size: calc(1rem + 3vw);
}
</style>

<section style="background-color: black">
    <h1>Section One</h1>
</section>
<section style="background-color: red">
        <h1>Section Two</h1>
</section>
<section style="background-color: green">
        <h1>Section Three</h1>
</section>
<section style="background-color: red">
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