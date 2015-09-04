

              <article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article" itemscope itemtype="http://schema.org/VideoObject">

                <header class="article-header entry-header">

                  <h1 class="entry-title single-title" itemprop="name"><?php the_title(); ?></h1>

                   <!-- Footer Meta - Facebook share -->
                    <div class="meta fbshare">

                      <a class="fbshare btn" href="http://www.facebook.com/sharer/sharer.php?u=<?php the_permalink() ?>&title=<?php the_title(); ?>"><i class="fa fa-facebook"></i>FACEBOOK</a>
                    </div>
                    <!-- Footer Meta - Facebook share -->
                    <div class="meta googleplus">
                      <a class="googleplus btn" href="https://plus.google.com/share?url=<?php the_permalink() ?>"><i class="fa fa-google-plus"></i>GOOGLE +</a>
                    </div>
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

                </header> <?php // end article header ?>

                <section class="entry-content cf" itemprop="description">
                  <?php
                    // the content (pretty self explanatory huh)
                    the_content();

                    /*
                     * Link Pages is used in case you have posts that are set to break into
                     * multiple pages. You can remove this if you don't plan on doing that.
                     *
                     * Also, breaking content up into multiple pages is a horrible experience,
                     * so don't do it. While there are SOME edge cases where this is useful, it's
                     * mostly used for people to get more ad views. It's up to you but if you want
                     * to do it, you're wrong and I hate you. (Ok, I still love you but just not as much)
                     *
                     * http://gizmodo.com/5841121/google-wants-to-help-you-avoid-stupid-annoying-multiple-page-articles
                     *
                    */
                    wp_link_pages( array(
                      'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bonestheme' ) . '</span>',
                      'after'       => '</div>',
                      'link_before' => '<span>',
                      'link_after'  => '</span>',
                    ) );
                  ?>
                </section> <?php // end article section ?>

                <footer class="article-footer">
                   <!-- Footer Meta - Facebook share -->
                    <div class="meta fbshare">

                      <a class="fbshare btn" href="http://www.facebook.com/sharer/sharer.php?u=<?php the_permalink() ?>&title=<?php the_title(); ?>"><i class="fa fa-facebook"></i>FACEBOOK</a>
                    </div>
                    <!-- Footer Meta - Facebook share -->
                    <div class="meta googleplus">
                      <a class="googleplus btn" href="https://plus.google.com/share?url=<?php the_permalink() ?>"><i class="fa fa-google-plus"></i>GOOGLE +</a>
                    </div>
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
                    <div class="category-tags">
                      <!-- Footer Meta - Categories -->
                      <div class="meta category">
                        <?php printf( __( 'Filed under: %1$s', 'bonestheme' ), get_the_category_list(', ') ); ?>
                      </div>

                      <!-- Footer Meta - Tags -->
                    <?php the_tags( '<div class="meta tags"><p class="tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p></div>' ); ?>
                    </div>
                </footer> <?php // end article footer ?>
                <?php bones_related_posts();?>
                <?php comments_template(); ?>

              </article> <?php // end article ?>
