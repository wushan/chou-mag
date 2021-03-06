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
                    <h1 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
                  </header>

                  <section class="entry-content cf">
                    <?php the_excerpt(); ?>
                  </section>

                  <footer class="article-footer cf">

                    <!-- Footer Meta - Viewed -->
                    <div class="meta viewed">
                      <i class='fa fa-eye'></i><span>&nbsp;<?php the_views()?></span>
                    </div>
                    <div class="meta comments">
                      <p class="footer-comment-count">
                        <a href="<?php the_permalink() ?>#respond">
                          <?php comments_number( __( '<i class="fa fa-comment-o"></i>&nbsp;<span>0</span>', 'bonestheme' ), __( '<i class="fa fa-comment-o"></i>&nbsp;<span>1</span>', 'bonestheme' ), __( '<i class="fa fa-comment-o hot"></i>&nbsp;<span class="hot">%</span>', 'bonestheme' ) );?>
                        </a>
                      </p>
                    </div>
                    <!-- Footer Meta - Tags -->
                    <!-- Tags isn't nessary at Homepage, so we hide it but keep it in the DOM for SEO purpose. -->
                    <!-- <?php the_tags( '<div class="meta tag"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</div>' ); ?>-->

                    <!-- Post Date and Author isn't need to show at Homepage, we hide it. -->
                    <div class="meta dateandauthor">
                    <?php printf( __( '%1$s by %2$s', 'bonestheme' ),
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
