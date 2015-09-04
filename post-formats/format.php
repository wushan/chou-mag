
              <?php
                /*
                 * This is the default post format.
                 *
                 * So basically this is a regular post. if you don't want to use post formats,
                 * you can just copy ths stuff in here and replace the post format thing in
                 * single.php.
                 *
                 * The other formats are SUPER basic so you can style them as you like.
                 *
                 * Again, If you want to remove post formats, just delete the post-formats
                 * folder and replace the function below with the contents of the "format.php" file.
                */
              ?>

              <article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article" itemscope itemprop="blogPost" itemtype="http://schema.org/BlogPosting">

                <header class="article-header entry-header">

                  <h1 class="entry-title single-title" itemprop="headline" rel="bookmark"><?php the_title(); ?></h1>


                  <!-- Footer Meta - Facebook share -->

                    <div class="meta fbshare">
                      <a href="javascript:fbShare('<?php the_permalink() ?>', '<?php the_title(); ?>', '', '', 520, 350)" class="fbshare btn"><i class="fa fa-facebook"></i>FACEBOOK</a>

                    </div>
                    <!-- Footer Meta - Google + share -->
                    <div class="meta googleplus">
                      <a class="googleplus btn" target="_blank" href="https://plus.google.com/share?url=<?php the_permalink() ?>"><i class="fa fa-google-plus"></i>GOOGLE +</a>
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
                    <div class="meta dateandauthor">
                      <?php printf( __( 'Posted %1$s by %2$s', 'bonestheme' ),
                        /* the time the post was published */
                        '<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
                        /* the author of the post */
                        '<span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link( get_the_author_meta( 'ID' ) ) . '</span>'
                      ); ?>
                    </div>
                </header> <?php // end article header ?>

                <section class="entry-content cf" itemprop="articleBody">
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
                    <div class="meta dateandauthor">
                      <?php printf( __( 'Posted %1$s by %2$s', 'bonestheme' ),
                        /* the time the post was published */
                        '<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
                        /* the author of the post */
                        '<span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link( get_the_author_meta( 'ID' ) ) . '</span>'
                      ); ?>
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
