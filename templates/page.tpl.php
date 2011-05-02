<div id="page-wrapper">
  <div id="page">
    <div id="header"><div class="section clearfix">
      <?php if ($logo): ?>
        <div id="site-logo">
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
            <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
          </a>
        </div>
      <?php endif; ?>

      <?php if ($site_name): ?>
        <?php if ($title): ?>
          <div id="site-name">
            <h1><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><?php print $site_name; ?></a></h1>
          </div>
        <?php else: ?>
          <h1 id="site-name">
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
          </h1>
        <?php endif; ?>
    <?php endif; ?>

    <?php print render($page['header']); ?>

    </div>
  </div>

  <?php if ($main_menu): ?>
    <div id="navigation">
      <div class="section">
        <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => array('links', 'inline', 'clearfix')), 'heading' => NULL)); ?>
      </div>
    </div>
  <?php endif; ?>

  <?php if ($breadcrumb): ?>
    <div id="breadcrumb"><?php print $breadcrumb; ?></div>
  <?php endif; ?>

  <?php if(!empty($messages)): ?>
    <div class="console">  
      <?php print $messages; ?>
    </div>
  <?php endif; ?>

  <div id="main-wrapper">
    <div id="main" class="clearfix">
      <div id="content" class="column">
        <div class="section">
          <a id="main-content"></a>
          <?php print render($title_prefix); ?>
        
          <?php if ($title): ?>
            <h1 class="title" id="page-title">
              <?php print $title; ?>
            </h1>
          <?php endif; ?>
        
          <?php print render($title_suffix); ?>
        
          <?php if ($tabs): ?>
            <div class="tabs">
              <?php print render($tabs); ?>
            </div>
          <?php endif; ?>
        
          <?php print render($page['help']); ?>
          <?php if ($action_links): ?>
            <ul class="action-links">
              <?php print render($action_links); ?>
            </ul>
          <?php endif; ?>
        
          <?php print render($page['content']); ?>
          <?php print $feed_icons; ?>
        </div>
      </div>

      <?php if ($page['sidebar_first']): ?>
        <div id="sidebar" class="column sidebar">
          <div class="section">
            <?php print render($page['sidebar_first']); ?>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </div>

    <div id="footer">
      <div class="section">
        <?php print render($page['footer']); ?>
      </div>
    </div>

  </div>
</div>
