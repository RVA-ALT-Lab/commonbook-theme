<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>


<div class="wrapper splash-page" id="page-wrapper">
      <div class="jumbotron jumbotron-fluid splash-image" style="background-image:linear-gradient( rgba(0, 0, 0, 0.45), rgba(0, 0, 0, 0.45) ), url(<?php echo get_stylesheet_directory_uri(); ?>/images/books.jpg); background-size: cover;">
        <div class="container-fluid">
          <h1 class="display-4">Common Book Program</h1>
          <h2>Encouragining discourse among students, faculty, and the community</h2>
          <a href="/about" class="btn btn-secondary">About the Common Book Program</a>
        </div>
      </div>

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

			<main class="site-main" id="main">
      <div class="row section current-book-section">
        <div class="col-sm-12 col-lg-6">
          <h2>
          <svg height='50px' width='50px'  fill="#ffffff" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve"><path d="M45.9,49.3c0.5,0,1.1-0.4,1.1-1.1V4.4c0-0.6-0.5-1.1-1.1-1.1H10.1C9.5,3.3,9,3.8,9,4.4v45.9c0.8-0.6,1.9-1,3-1H45.9z   M34,15.3H22c-0.5,0-1-0.5-1-1s0.5-1,1-1h12c0.5,0,1,0.5,1,1S34.5,15.3,34,15.3z M42,45.3h1v-1c0-0.5,0.5-1,1-1s1,0.5,1,1v1.1  c0,1.1-0.8,1.9-1.9,1.9H42c-0.5,0-1-0.5-1-1S41.5,45.3,42,45.3z M20,9.3h16c0.5,0,1,0.5,1,1s-0.5,1-1,1H20c-0.5,0-1-0.5-1-1  S19.5,9.3,20,9.3z M11,8.2c0-1.6,1.3-2.9,2.9-2.9H16c0.5,0,1,0.5,1,1s-0.5,1-1,1h-2.1c-0.5,0-0.9,0.5-0.9,0.9v2.1c0,0.5-0.5,1-1,1  s-1-0.5-1-1V8.2z M11,16.3v-2c0-0.5,0.5-1,1-1s1,0.5,1,1v2c0,0.5-0.5,1-1,1S11,16.9,11,16.3z"></path><path d="M54.1,5.3H49v42.9c0,1.7-1.4,3.1-3.1,3.1H12c-1.7,0-3.1,1.4-3,3c0.3,3.5,4,3,4,3v-2c0,0-2,0.3-2-1c0-0.5,0.5-1,1-1h38.3  c0.5,0,0.7-0.4,0.7-0.7V8.3c0-0.5,0.5-1,1-1s1,0.5,1,1v44.3c0,1.5-1.2,2.7-2.7,2.7H23v2.1h31.1c0.6,0,0.9-0.5,0.9-0.9V6.2  C55,5.7,54.5,5.3,54.1,5.3z"></path><polygon points="15,60.7 18,59.2 21,60.7 21,55.3 15,55.3 "></polygon></svg>
          Current Book</h2>
          <h4><?php echo get_field('book_title') ?></h4>
          <h5><?php echo get_field('author') ?></h5>
          <p>Novemeber, 26th 6:00PM</p>
          <p>Location</p>
        </div>
        <div class="col-lg-6">
          <img src="https://images.gr-assets.com/authors/1574217836p5/1455.jpg" class="img-fluid" alt="">
        </div>
      </div>
      <div class="row section">
        <div class="col-sm-12">
          <h2>
          <svg height='50px' width='50px'  fill="#000" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" version="1.1" x="0px" y="0px" viewBox="0 0 100 100"><g transform="translate(0,-952.36218)"><path d="m 91,967.36213 c 1.108,0 2,0.892 2,2 l 0,16 -86,0 0,-16 c 0,-1.108 0.892,-2 2,-2 l 82,0 z m -18,5 c -2.2091,0 -4,1.7909 -4,4 0,2.2092 1.7909,4 4,4 2.2091,0 4,-1.7908 4,-4 0,-2.2091 -1.7909,-4 -4,-4 z m -46,0 c -2.2091,0 -4,1.7909 -4,4 0,2.2092 1.7909,4 4,4 2.2091,0 4,-1.7908 4,-4 0,-2.2091 -1.7909,-4 -4,-4 z m 66,17 0,46.00007 c 0,1.108 -0.892,2 -2,2 l -82,0 c -1.108,0 -2,-0.892 -2,-2 l 0,-46.00007 86,0 z m -13,8 -12,0 0,13.99997 12,0 0,-13.99997 z m -16,0 -12,0 0,13.99997 12,0 0,-13.99997 z m -16,0 -12,0 0,13.99997 12,0 0,-13.99997 z m -16,0 -12,0 0,13.99997 12,0 0,-13.99997 z m 48,18.00007 -12,0 0,14 12,0 0,-14 z m -16,0 -12,0 0,14 12,0 0,-14 z m -16,0 -12,0 0,14 12,0 0,-14 z" style="color:#000000;enable-background:accumulate;" fill="#000" stroke="none" marker="none" visibility="visible" display="inline" overflow="visible"></path></g></svg>
          Upcoming Events</h2>
          <div class="row">
            <div class="col-lg-4">
              <div class="card" >
                <img class="card-img-top" src="https://images.unsplash.com/photo-1531058020387-3be344556be6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Lecture on Book</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-secondary">View Event Details</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card" >
                <img class="card-img-top" src="https://images.unsplash.com/photo-1475721027785-f74eccf877e2?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">A Speech by Author</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-secondary">View Event Details</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row section">
        <div class="col-sm-12">
          <h2>
          <svg height='50px' width='50px'  fill="#1a1a1a" xmlns:x="http://ns.adobe.com/Extensibility/1.0/" xmlns:i="http://ns.adobe.com/AdobeIllustrator/10.0/" xmlns:graph="http://ns.adobe.com/Graphs/1.0/" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve"><g><g i:extraneous="self"><g><path d="M5273.1,2400.1v-2c0-2.8-5-4-9.7-4s-9.7,1.3-9.7,4v2c0,1.8,0.7,3.6,2,4.9l5,4.9c0.3,0.3,0.4,0.6,0.4,1v6.4     c0,0.4,0.2,0.7,0.6,0.8l2.9,0.9c0.5,0.1,1-0.2,1-0.8v-7.2c0-0.4,0.2-0.7,0.4-1l5.1-5C5272.4,2403.7,5273.1,2401.9,5273.1,2400.1z      M5263.4,2400c-4.8,0-7.4-1.3-7.5-1.8v0c0.1-0.5,2.7-1.8,7.5-1.8c4.8,0,7.3,1.3,7.5,1.8C5270.7,2398.7,5268.2,2400,5263.4,2400z"></path><path d="M5268.4,2410.3c-0.6,0-1,0.4-1,1c0,0.6,0.4,1,1,1h4.3c0.6,0,1-0.4,1-1c0-0.6-0.4-1-1-1H5268.4z"></path><path d="M5272.7,2413.7h-4.3c-0.6,0-1,0.4-1,1c0,0.6,0.4,1,1,1h4.3c0.6,0,1-0.4,1-1C5273.7,2414.1,5273.3,2413.7,5272.7,2413.7z"></path><path d="M5272.7,2417h-4.3c-0.6,0-1,0.4-1,1c0,0.6,0.4,1,1,1h4.3c0.6,0,1-0.4,1-1C5273.7,2417.5,5273.3,2417,5272.7,2417z"></path></g><g><path d="M66,30.9c-1-0.6-2.1-0.3-3.1,0.8c-1,1-2.7,3.2-2.7,3.2c-0.9,0.9-1.7,0.3-1.7-0.6c0.1-1.7,0.2-2.8,0.4-4.7     c0.2-1.9,1.8-10.7,1.8-10.7c0.2-1.1-0.6-2.2-1.7-2.4c-1.1-0.2-2.2,0.6-2.4,1.7L54.8,29c0,0.3-0.3,0.5-0.6,0.5l-0.2,0     c-0.4,0-0.7-0.3-0.7-0.7l0.7-13.2c0.1-1.1-0.8-2.1-1.9-2.2c-1.1,0-2.1,0.8-2.2,1.9l-0.8,13.8c0,0.3-0.3,0.6-0.6,0.6     c-0.4,0-0.6-0.2-0.7-0.6l-0.6-11.9c-0.1-1.1-1-2-2.1-1.9c-1.1,0.1-2,1-1.9,2.1l0.6,11.9c0,0.3-0.3,0.6-0.6,0.7l0,0     c-0.3,0-0.6-0.2-0.7-0.6l-1.1-9.1c-0.1-1.1-1.2-1.9-2.3-1.8c-1.1,0.1-1.9,1.2-1.8,2.3c0,0,1.7,12.6,2.4,17.2     c0.4,2.8,1.1,5.4,2.5,7.2c0,0.1,0,0.2,0.1,0.3c0.3,1.6,0.7,3.4,0.7,5v35c0,0.6,0.5,1.1,1.1,1.1h11.6c0.6,0,1.1-0.5,1.1-1.1v-35     c0-1.3,0.3-2.7,0.7-4v-0.1c0.8-0.5,1.6-1.3,2.3-2c2.7-3,7.1-10.3,7.1-10.3C67.4,33.1,67.1,31.6,66,30.9z"></path><path d="M29.7,67.1c0-0.1,0-0.3,0-0.4c1-2,1-4.7,0.7-7.5c-0.4-4.6-1.8-17.3-1.8-17.3c-0.1-1.1-1.1-1.9-2.3-1.8     c-1.1,0.1-1.9,1.1-1.8,2.3l1,9.2c0,0.3-0.2,0.6-0.5,0.7l0,0c-0.3,0.1-0.7-0.2-0.7-0.5L22.1,40c-0.2-1.1-1.3-1.8-2.4-1.6     c-1.1,0.2-1.8,1.3-1.6,2.4l2.2,11.7c0.1,0.3-0.2,0.7-0.5,0.7c-0.3,0.1-0.6-0.1-0.7-0.4l-4-13.3c-0.3-1.1-1.5-1.7-2.6-1.4     c-1.1,0.3-1.7,1.5-1.4,2.6L15,53.4c0.1,0.4-0.1,0.7-0.5,0.8l-0.2,0c-0.3,0.1-0.6-0.1-0.7-0.4L9.3,43.8c-0.4-1-1.6-1.5-2.7-1.1     c-1,0.4-1.5,1.6-1.1,2.7c0,0,3.6,8.2,4.3,10c0.7,1.8,1,2.8,1.5,4.4c0.3,0.9-0.4,1.7-1.5,1c0,0-2.2-1.7-3.4-2.5     c-1.2-0.8-2.4-0.9-3.2,0c-0.9,0.9-0.9,2.4,0.1,3.3c0,0,6,6,9.3,8.3c0.8,0.5,1.7,1.1,2.6,1.4c0,0,0,0,0,0.1     c0.8,1.2,1.3,2.6,1.7,3.9l2.5,10.4c0.1,0.5,0.5,0.8,1,0.8h12c0.7,0,1.2-0.6,1-1.3L30.2,72C29.9,70.5,29.8,68.7,29.7,67.1z"></path><path d="M96.8,58.4c-0.9-0.9-2-0.8-3.2,0c-1.2,0.8-3.4,2.5-3.4,2.5c-1.1,0.7-1.8-0.1-1.5-1c0.5-1.6,0.8-2.6,1.5-4.4     c0.7-1.8,4.3-10,4.3-10c0.4-1,0-2.2-1.1-2.7c-1-0.4-2.2,0-2.7,1.1l-4.3,10.1c-0.1,0.3-0.4,0.4-0.7,0.4l-0.2,0     c-0.4-0.1-0.6-0.4-0.5-0.8l3.8-12.7c0.3-1.1-0.3-2.2-1.4-2.6c-1.1-0.3-2.2,0.3-2.6,1.4l-4,13.3c-0.1,0.3-0.4,0.5-0.7,0.4     c-0.3-0.1-0.6-0.4-0.5-0.7l2.2-11.7c0.2-1.1-0.5-2.2-1.6-2.4c-1.1-0.2-2.2,0.5-2.4,1.6l-2.2,11.7c-0.1,0.3-0.4,0.6-0.7,0.5l0,0     c-0.3-0.1-0.5-0.4-0.5-0.7l1-9.2c0.1-1.1-0.7-2.1-1.8-2.3c-1.1-0.1-2.1,0.7-2.3,1.8c0,0-1.3,12.7-1.8,17.3     c-0.3,2.8-0.2,5.6,0.8,7.6c0,0.1,0,0.2,0,0.2c-0.1,1.6-0.2,3.5-0.6,5l-3.2,13.2c-0.2,0.7,0.3,1.3,1,1.3h12.1c0.5,0,0.9-0.3,1-0.8     l2.5-10.4c0.3-1.3,0.9-2.7,1.6-3.9c0,0,0,0,0,0c0.9-0.3,1.9-0.8,2.7-1.4c3.4-2.3,9.3-8.3,9.3-8.3C97.7,60.8,97.8,59.3,96.8,58.4z     "></path></g></g></g></svg>
          Get Involved</h2>
          <div class="row">
            <div class="col-lg-6">
            <p>The Common Book program offers multiple ways to get involved for students, faculty, and the community.</p>

              <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">Students</h5>
                  </div>
                  <img src="<?php echo get_stylesheet_directory_uri();?>/images/student-reading.png" class="float-left" alt="">
                  <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                </a>
                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">Faculty</h5>
                  </div>
                  <img src="<?php echo get_stylesheet_directory_uri();?>/images/faculty.png" class="float-left" alt="">
                  <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                </a>
                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">Community</h5>
                  </div>
                  <img src="<?php echo get_stylesheet_directory_uri();?>/images/community.png" class="float-left" alt="">
                  <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                </a>
              </div>
            </div>
            <div class="col-lg-6">
              <p>Check out all of the past books to get an idea of what happens. You can also suggest a book for us here</p>
              <ul>
                <li><a href=""><i>Evicted</i>, by Matthew Desmond (2019) </a></li>
                <li><a href=""><i>Tell Me How It Ends </i>, by Valeria Luiselli (2018) </a></li>
                <li><a href=""><i>Dreamland</i>, Sam Quinones (2017) </a></li>
                <li><a href=""><i>Just Mercy</i>, by Bryan Stevenson (2016) </a></li>
                <li><a href=""><i>The Secret History of Wonder Woman</i>, by Jill Lepore (2015) </a></li>
              </ul>
              <p>Maybe give some details about what goes into selecting the common book</p>
              <a href="" class="btn btn-secondary">Suggest a Book</a>
            </div>
          </div>
        </div>
      </div>

			</main><!-- #main -->


	</div><!-- #content -->

</div><!-- #page-wrapper -->
<script type="text/javascript" src="//branding.vcu.edu/bar/academic/latest.js"></script>
<?php get_footer(); ?>
