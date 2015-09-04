<?php
/* ------------------------------------------------------------------------- *
 *  Video page template
 *  ___________________________________________________
 *
 *  Template name: Video Page
/* ------------------------------------------------------------------------- */


// Custom Post Classes
$classes = array(
    'single-template-1',
	'page-template-normal',
    'clearfix'
);
$args = array(
  'tax_query' => array(
    array(
      'taxonomy' => 'post_format',
      'field' => 'slug',
      'terms' => 'post-format-video'
    )
  )
);
query_posts( $args );

?>
<?php get_header(); ?>

      <div id="content">

        <div id="inner-content" class="wrap cf">
            <?php get_sidebar(); ?>
            <main id="main" class="main-wrapper" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
              <div class="chouchoutv-logo">
                  
                  <svg width="284px" height="39px" viewBox="0 0 284 39" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                    <!-- Generator: Sketch 3.2.2 (9983) - http://www.bohemiancoding.com/sketch -->
                    <title>chouchoutv</title>
                    <desc>Created with Sketch.</desc>
                    <defs></defs>
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                        <g id="chou--chou-+-/" sketch:type="MSLayerGroup" transform="translate(-1.000000, -10.000000)">
                            <text id="chou/chou" sketch:type="MSTextLayer" font-family="Baskerville" font-size="48" font-weight="normal" fill="#000000">
                                <tspan x="0" y="43">chou</tspan>
                                <tspan x="94.4765625" y="43" font-size="29">/</tspan>
                                <tspan x="109.585449" y="43">chou</tspan>
                            </text>
                            <text id="TV" sketch:type="MSTextLayer" font-family="Baskerville" font-size="36" font-weight="normal" fill="#4990E2">
                                <tspan x="233" y="44">TV</tspan>
                            </text>
                            <path d="M218.5,15.5 L218.5,48.0576401" id="Line" stroke="#4990E2" stroke-linecap="square" sketch:type="MSShapeGroup"></path>
                        </g>
                    </g>
                </svg>

                </div>
              <!-- main-inner start -->
              <div class="main-inner">
              <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

              <article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">
                <?php
                  // Must be inside a loop.
                    if ( has_post_thumbnail() ) {
                        // Set the proper thumbnail size tag in functions.php
                  ?>
                  <div class="article-feature-thumbnail">
                    <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail('bones-thumb-800'); ?>
                      <!--Post format Array-->
                      <?php
                        if (get_post_format() == video) {
                          echo "<div class='video-icon'><i class='fa fa-video-camera'></i></div>";
                        } else {

                        }
                      ?>
                      <!--Post format Array End-->
                    </a>
                  </div>
                  <?php
                      }
                      else {
                        echo '';
                    }
                  ?>
                <div class="article-content">
                  <header class="article-header">
                    <!-- Header Meta Category -->
                    <?php printf( '<div class="meta category">' . __('', 'bonestheme' ) . '%1$s</div>' , get_the_category_list(', ') ); ?>
                    <h1 class="h3 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
                  </header>

                  <footer class="article-footer cf">
                    
                    <!-- Footer Meta - Comments -->
                    <div class="meta comments">
                      <p class="footer-comment-count">
                        <?php comments_number( __( '<i class="fa fa-comment-o"></i>&nbsp;<span>0</span>', 'bonestheme' ), __( '<i class="fa fa-comment-o"></i>&nbsp;<span>1</span>', 'bonestheme' ), __( '<i class="fa fa-comment-o hot"></i>&nbsp;<span class="hot">%</span>', 'bonestheme' ) );?>
                      </p>
                    </div>
                    <!-- Footer Meta - Viewed -->
                    <div class="meta viewed">
                      <i class='fa fa-eye'></i><span>&nbsp;<?php the_views()?></span>
                    </div>
                    <!-- Footer Meta - Tags -->
                    <!-- Tags isn't nessary at Homepage, so we hide it but keep it in the DOM for SEO purpose. -->
                    <?php the_tags( '<div class="meta tag"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</div>' ); ?>

                    <!-- Post Date and Author isn't need to show at Homepage, we hide it. -->
                    <div class="meta dateandauthor">
                    <?php printf( __( 'Posted %1$s by %2$s', 'bonestheme' ),
                      /* the time the post was published */
                      '<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
                      /* the author of the post */
                      '<span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link( get_the_author_meta( 'ID' ) ) . '</span>'
                    ); ?>
                    </div>
                  </footer>
                  </div>
                </article>

                <?php endwhile; ?>
                </div>
                <!-- Main-inner End -->
                <!-- We dont need this anymore if you want infinite Scroll. -->
                <?php bones_page_navi(); ?>

                <?php else : ?>

                    <article id="post-not-found" class="hentry cf">
                        <header class="article-header">
                          <h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
                      </header>
                        <section class="entry-content">
                          <p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
                      </section>
                      <footer class="article-footer">
                          <p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
                      </footer>
                  </article>

              </div>
              <!-- Main-inner End -->
              <?php endif; ?>


            </main>


        </div>

      </div>


<?php get_footer(); ?>
