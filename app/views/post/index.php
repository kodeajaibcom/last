<div class="tl_page_head navbar navbar-static-top navbar navbar-tg">
  <div class="navbar-inner">
    <div class="container clearfix">
      <ul class="nav navbar-nav navbar-right"><li class="navbar-twitter"><a href="https://twitter.com/telegram" target="_blank" data-track="Follow/Twitter" onclick="trackDlClick(this, event)"><i class="icon icon-twitter"></i><span class="hidden-xs"> Twitter</span></a></li></ul>
        <ul class="nav navbar-nav">
        <li><a href="<?= BASEURL .'/home';?>">Home</a></li>
        <li class="active"><a href="<?= BASEURL .'/post';?>">Blog</a></li>
        <li class=""><a href="/faq">FAQ</a></li>
        <li class=""><a href="/apps">Apps</a></li>
        <li class="hidden-xs "><a href="//core.telegram.org/api">API</a></li>
        <li class="hidden-xs "><a href="//core.telegram.org/mtproto">Protocol</a></li>
        </ul>
    </div>
  </div>
</div>

<div class="container clearfix tl_page_container tl_main_page_container">
  <div class="tl_page">
  <?php foreach ($data['posts'] as $key => $value) { ?>
    <div class="tl_contest_page_wrap">
      <div id="dev_page_content_wrap" class=" ">
        <h1 id="dev_page_title" dir="auto"><a href=""><?= $value['judulPost'];?></a></h1>
        <div id="dev_page_content" dir="auto">
          <div class="blog_side_image_wrap">
            <?php if (!$value['thumbPost'] == NULL) {?>
              <img src="img/<?= $value['thumbPost'];?>" class="blog_side_image"/>
            <?php }?>
          </div>
          <p><?= $value['descPost'];?></p>
          <blockquote>
          <p>We&#39;ve included short <strong>summaries</strong> in <strong>simple terms</strong> for paragraphs in this text, formatted like this <img class="emoji" src="//telegram.org/img/emoji/40/F09F9188.png" width="20" height="20" alt="👈" /></p>
          </blockquote>
        </div>
      </div>
      <div class="tl_main_share clearfix">
        <a href="https://t.me/share/url?url=https%3A%2F%2Ftelegram.org%2Fblog%2Fverifiable-apps-and-more&text=Introducing%20Reproducible%20Apps%2C%20Theme%20Editor%202.0%2C%20Send%20When%20Online%20and%20So%20Much%20More" class="tl_telegram_share_btn" id="tl_telegram_share_btn" data-text="Introducing Reproducible Apps, Theme Editor 2.0, Send When Online and So Much More" data-url="https://telegram.org/blog/verifiable-apps-and-more"><i class="tl_telegram_share_icon"></i><span class="tl_telegram_share_label" target="_blank">Forward</span></a>
        <a href="https://twitter.com/share" class="tl_twitter_share_btn" id="tl_twitter_share_btn" data-text="Introducing Reproducible Apps, Theme Editor 2.0, Send When Online and So Much More" data-url="https://telegram.org/blog/verifiable-apps-and-more" data-via="Telegram">Tweet <span class="tl_twitter_share_cnt"></span></a>
      </div>
    </div>
    <?php }?>
  </div>
</div>
    <div class="tl_main_noshare clearfix"></div>
