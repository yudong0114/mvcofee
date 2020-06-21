<?php get_header(); ?>


  <div id="wrap-container">

    <div class="container">
      <div class="row">

        <main id="main-col" class="col-xs-12 col-md-9" role="main">
          <div class="main-col__inner">
            <?php if (have_posts()): ?>
              <?php while (have_posts() ): the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class('entry entry--excerpt entry--archive'); ?>>
                  <header>
                    <h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                  </header>
                  <?php if (has_post_thumbnail()): ?>
                  <div class="entry-thumbnail">
                    <a href="<?php the_permalink(); ?>">
                      <?php
                      the_post_thumbnail(
                        'post-thumbnail',
                        [
                          'class' => 'img-thumbnail img-thumbnail',
                          'alt' => the_title_attribute('echo=0'),
                          'title' => the_title_attribute('echo=0')
                        ]
                      ) ?>
                    </a>
                  </div>
                  <?php endif; ?>
                  <div class="entry-content">
                    <?php the_excerpt(); ?>
                  </div>
                  <footer class="entry-meta text-right">
                    <div class="entry-meta__time">
                      <span class="glyphicon glyphicon-time"></span><span class="vcard author"><?php the_author_posts_link(); ?></span> at <time class="updated" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y/m/d'); ?></time>
                    </div>
                    <?php if (has_tag()): ?>
                    <div class="entry-meta__tag">
                      <span class="glyphicon glyphicon-tag"></span>
                      <?php the_tags('<span>','</span><span>','</span>'); ?>
                    </div>
                  <?php endif; ?>
                  </footer>
                </article>

              <?php endwhile; ?>
            <?php else: ?>
            <section class="not-found">

              <h1 class="not-found__title">「<?php the_search_query(); ?>」の検索結果が見つかりませんでした</h1>

              <p>お探しのページは一時的にアクセスができない状態にあるか、ページが移動もしくは削除されてしまった可能性があります。</p>
              <p>以下の方法をお試し下さい。</p>
              <ul>
                <li>アドレスを再入力する。</li>
                <li><a href="javascript:history.back();">前のページに戻る。</a></li>
                <li><a href="<?php echo esc_url(home_url()); ?>">トップページに戻る</a></li>
                <li>下記の検索バーよりキーワード検索を試す。</li>
              </ul>
              <?php get_search_form(); ?>
            </section>
          <?php endif; ?>

          </div>
        </main>

        <div id="sub-col" class="col-xs-12 col-md-3" role="complementary">
          <?php get_sidebar(); ?>
        </div>

      </div>
    </div>

  </div>

<?php get_footer(); ?>
