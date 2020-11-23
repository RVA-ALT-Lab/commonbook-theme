<?php
/**
 * Template Name: About Page Template
 *
 * This template can be used to override the default template and sidebar setup
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">

			<div
				class="<?php if ( is_active_sidebar( 'right-sidebar' ) ) : ?>col-md-8<?php else : ?>col-md-12<?php endif; ?> content-area"
				id="primary">

				<main class="site-main" id="main" role="main">

					<?php while ( have_posts() ) : the_post(); ?>

            <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

            <header class="entry-header">

              <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

            </header><!-- .entry-header -->

            <?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

            <div class="entry-content">

              <?php the_content(); ?>
              <div class="row section">
                <div class="col-sm-12">
                  <h3>Meet the Team</h3>
                    <div class="card mb-3" >
                      <div class="row no-gutters">
                        <div class="col-md-4">
                          <img src="https://image.shutterstock.com/image-photo/headshot-portrait-beautiful-african-american-600w-1437938126.jpg" class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <h5 class="card-title">FirstName LastName</h5>
                            <p class="card-text">This is a longer biography paragraph</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card mb-3" >
                      <div class="row no-gutters">
                        <div class="col-md-4">
                          <img src="https://image.shutterstock.com/image-photo/headshot-portrait-beautiful-african-american-600w-1437938126.jpg" class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <h5 class="card-title">FirstName LastName</h5>
                            <p class="card-text">This is a longer biography paragraph</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card mb-3" >
                      <div class="row no-gutters">
                        <div class="col-md-4">
                          <img src="https://image.shutterstock.com/image-photo/headshot-portrait-beautiful-african-american-600w-1437938126.jpg" class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <h5 class="card-title">FirstName LastName</h5>
                            <p class="card-text">This is a longer biography paragraph</p>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
              </div>

            </div><!-- .entry-content -->

            <footer class="entry-footer">

              <?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>

            </footer><!-- .entry-footer -->

            </article><!-- #post-## -->

						<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
						?>

					<?php endwhile; // end of the loop. ?>

				</main><!-- #main -->

			</div><!-- #primary -->

			<?php get_template_part( 'sidebar-templates/sidebar', 'right' ); ?>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php get_footer(); ?>
