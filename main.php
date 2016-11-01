<!DOCTYPE html>
<?php

/**
 * DokuWiki sprintDoc Template
 *
 * @link     FIXME
 * @author   Jana Deutschlaender <deutschlaender@cosmocode.de>
 * @license  GPL 2 (http://www.gnu.org/licenses/gpl.html)
 */

if (!defined('DOKU_INC')) die();                        /* must be run from within DokuWiki */
@require_once(dirname(__FILE__).'/tpl_functions.php');  /* include hook for template functions */
header('X-UA-Compatible: IE=edge,chrome=1');

$showTools = !tpl_getConf('hideTools') || ( tpl_getConf('hideTools') && !empty($_SERVER['REMOTE_USER']) );
$showSidebar = page_findnearest($conf['sidebar']) && ($ACT=='show');

?>
<!--[if lt IE 9]> <html class="no-js lt-ie10 lt-ie9" lang="<?php echo $conf['lang'] ?>" dir="<?php echo $lang['direction'] ?>"> <![endif]-->
<!--[if IE 9]> <html class="no-js lt-ie10 ie-9" lang="<?php echo $conf['lang'] ?>" dir="<?php echo $lang['direction'] ?>"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="edge no-js" lang="<?php echo $conf['lang'] ?>" dir="<?php echo $lang['direction'] ?>"> <!--<![endif]-->
<head>

<?php


/* + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + */
/* meta and link relations */
/* + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + */
?>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<?php tpl_metaheaders() ?>
<?php


/* + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + */
/* IE8 support HTML5 / media queries */
/* + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + */
?>
<!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->

<?php


/* + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + */
/* page title */
/* + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + */
?>
<title><?php tpl_pagetitle() ?> [<?php echo strip_tags($conf['title']) ?>]</title>

<script type="text/javascript">(function(H){H.className=H.className.replace(/\bno-js\b/,'js')})(document.documentElement)</script>

<?php


/* + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + */
/* favicons */
/* + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + */
?>
<?php echo tpl_favicon(array('favicon')) ?> <?php /* DokuWiki: favicon.ico  */ ?>

<link rel="apple-touch-icon" sizes="57x57" href="<?php echo tpl_getMediaFile(array(':wiki:apple-touch-icon-57x57.png', 'images/fav/apple-touch-icon-57x57.png')); ?>">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo tpl_getMediaFile(array(':wiki:apple-touch-icon-60x60.png', 'images/fav/apple-touch-icon-60x60.png')); ?>">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo tpl_getMediaFile(array(':wiki:apple-touch-icon-72x72.png', 'images/fav/apple-touch-icon-72x72.png')); ?>">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo tpl_getMediaFile(array(':wiki:apple-touch-icon-76x76.png', 'images/fav/apple-touch-icon-76x76.png')); ?>">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo tpl_getMediaFile(array(':wiki:apple-touch-icon-114x114.png', 'images/fav/apple-touch-icon-114x114.png')); ?>">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo tpl_getMediaFile(array(':wiki:apple-touch-icon-120x120.png', 'images/fav/apple-touch-icon-120x120.png')); ?>">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo tpl_getMediaFile(array(':wiki:apple-touch-icon-144x144.png', 'images/fav/apple-touch-icon-144x144.png')); ?>">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo tpl_getMediaFile(array(':wiki:apple-touch-icon-152x152.png', 'images/fav/apple-touch-icon-152x152.png')); ?>">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo tpl_getMediaFile(array(':wiki:apple-touch-icon-180x180.png', 'images/fav/apple-touch-icon-180x180.png')); ?>">

<link rel="icon" type="image/png" href="<?php echo tpl_getMediaFile(array(':wiki:favicon-32x32.png', 'images/fav/favicon-32x32.png')); ?>" sizes="32x32">
<link rel="icon" type="image/png" href="<?php echo tpl_getMediaFile(array(':wiki:favicon-96x96.png', 'images/fav/favicon-96x96.png')); ?>" sizes="96x96">
<link rel="icon" type="image/png" href="<?php echo tpl_getMediaFile(array(':wiki:android-chrome-192x192.png', 'images/fav/android-chrome-192x192.png')); ?>" sizes="192x192">

<meta name="msapplication-square70x70logo" content="<?php echo tpl_getMediaFile(array(':wiki:smalltile.png', 'images/fav/smalltile.png')); ?>" />
<meta name="msapplication-square150x150logo" content="<?php echo tpl_getMediaFile(array(':wiki:mediumtile.png', 'images/fav/mediumtile.png')); ?>" />
<meta name="msapplication-wide310x150logo" content="<?php echo tpl_getMediaFile(array(':wiki:widetile.png', 'images/fav/widetile.png')); ?>" />
<meta name="msapplication-square310x310logo" content="<?php echo tpl_getMediaFile(array(':wiki:largetile.png', 'images/fav/largetile.png')); ?>" />
<?php


/* + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + */
/* Include Hook: meta.html */
/* + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + */
?>
<?php tpl_includeFile('meta.html') ?>
</head>
<?php /* #dokuwiki__top used as anchor for "back to top" button/link links */ ?>
<body id="dokuwiki__top" class="<?php echo tpl_classes(); ?>">


    <div id="dokuwiki__site">
        <?php


/* + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + */
/* nav-direct */
/* + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + */
        ?>

        <div id="dokuwiki_direct" class="nav-direct no-print">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">

                        <p>
                            <span class="sr-out"><?php echo tpl_getLang('direct_prefix'); ?>: </span>
                            <span class="skip">
                                <a href="#content"><?php echo tpl_getLang('direct_content_main'); ?></a><span class="sr-out"> /</span>
                                <a href="#nav-main"><?php echo tpl_getLang('direct_menu_main');  ?></a>
                            </span>
                        </p>

                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .nav-direct -->


        <div class="page-wrapper <?php echo ($showSidebar) ? 'hasSidebar' : ''; ?>">
            <?php


/* + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + */
/* Message AREA */
/* FIXME: position of error + info messages. Does it have to be on top of the page? */
/* + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + */
            html_msgarea();


/* + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + */
/* Include Hook: header.html */
/* + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + */
            tpl_includeFile('header.html');


/* + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + */
/* MagicMatcher */
/* + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + */
            ?>

            <div id="dokuwiki_magic-matcher" class="magic-matcher no-print">
                <div class="container">
                </div><!-- .container -->
            </div><!-- .magic-matcher -->
            <?php


/* + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + */
/* Header */
/* + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + */
            ?>

            <div id="dokuwiki__header" class="header no-print">
                <div class="container">
                </div><!-- .container -->

            <div class="headings">
                <h1><?php tpl_link(wl(),$conf['title'],'accesskey="h" title="[H]"') ?></h1>
                <?php /* how to insert logo instead (if no CSS image replacement technique is used):
                        upload your logo into the data/media folder (root of the media manager) and replace 'logo.png' accordingly:
                        tpl_link(wl(),'<img src="'.ml('logo.png').'" alt="'.$conf['title'].'" />','id="dokuwiki__top" accesskey="h" title="[H]"') */ ?>
                <?php if ($conf['tagline']): ?>
                    <p class="claim"><?php echo $conf['tagline'] ?></p>
                <?php endif ?>

                <ul class="a11y skip">
                    <li><a href="#dokuwiki__content"><?php echo $lang['skip_to_content'] ?></a></li>
                </ul>
                <div class="clearer"></div>
            </div>

            <div class="tools">
                <!-- USER TOOLS -->
                <?php if ($conf['useacl'] && $showTools): ?>
                    <div id="dokuwiki__usertools">
                        <h3 class="a11y"><?php echo $lang['user_tools'] ?></h3>
                        <ul>
                            <?php
                                if (!empty($_SERVER['REMOTE_USER'])) {
                                    echo '<li class="user">';
                                    tpl_userinfo(); /* 'Logged in as ...' */
                                    echo '</li>';
                                }
                            ?>
                            <?php /* the optional second parameter of tpl_action() switches between a link and a button,
                                     e.g. a button inside a <li> would be: tpl_action('edit', 0, 'li') */
                            ?>
                            <?php tpl_toolsevent('usertools', array(
                                'admin'     => tpl_action('admin', 1, 'li', 1),
                                'userpage'  => _tpl_action('userpage', 1, 'li', 1),
                                'profile'   => tpl_action('profile', 1, 'li', 1),
                                'register'  => tpl_action('register', 1, 'li', 1),
                                'login'     => tpl_action('login', 1, 'li', 1),
                            )); ?>
                        </ul>
                    </div>
                <?php endif ?>

                <!-- SITE TOOLS -->
                <div id="dokuwiki__sitetools">
                    <h3 class="a11y"><?php echo $lang['site_tools'] ?></h3>
                    <?php tpl_searchform() ?>
                    <ul>
                        <?php tpl_toolsevent('sitetools', array(
                            'recent'    => tpl_action('recent', 1, 'li', 1),
                            'media'     => tpl_action('media', 1, 'li', 1),
                            'index'     => tpl_action('index', 1, 'li', 1),
                        )); ?>
                    </ul>
                </div>

            </div>
            <div class="clearer"></div>

            <!-- BREADCRUMBS -->
            <?php if($conf['breadcrumbs']){ ?>
                <div class="breadcrumbs"><?php tpl_breadcrumbs() ?></div>
            <?php } ?>
            <?php if($conf['youarehere']){ ?>
                <div class="breadcrumbs"><?php tpl_youarehere() ?></div>
            <?php } ?>

            <div class="clearer"></div>
            <hr class="a11y" />
        </div></div><!-- /header -->


        <div class="wrapper">

            <!-- ********** ASIDE ********** -->
            <?php if ($showSidebar): ?>
                <div id="dokuwiki__aside"><div class="pad aside include group">
                    <?php tpl_includeFile('sidebarheader.html') ?>
                    <?php tpl_include_page($conf['sidebar'], 1, 1) /* includes the nearest sidebar page */ ?>
                    <?php tpl_includeFile('sidebarfooter.html') ?>
                    <div class="clearer"></div>
                </div></div><!-- /aside -->
            <?php endif; ?>

            <!-- ********** CONTENT ********** -->
            <div id="dokuwiki__content"><div class="pad">
                <?php tpl_flush() /* flush the output buffer */ ?>
                <?php tpl_includeFile('pageheader.html') ?>

                <div class="page">
                    <!-- wikipage start -->
                    <?php tpl_content() /* the main content */ ?>
                    <!-- wikipage stop -->
                    <div class="clearer"></div>
                </div>

                <?php tpl_flush() ?>
                <?php tpl_includeFile('pagefooter.html') ?>
            </div></div><!-- /content -->

            <div class="clearer"></div>
            <hr class="a11y" />

            <!-- PAGE ACTIONS -->
            <?php if ($showTools): ?>
                <div id="dokuwiki__pagetools">
                    <h3 class="a11y"><?php echo $lang['page_tools'] ?></h3>
                    <ul>
                        <?php tpl_toolsevent('pagetools', array(
                            'edit'      => tpl_action('edit', 1, 'li', 1),
                            'discussion'=> _tpl_action('discussion', 1, 'li', 1),
                            'revisions' => tpl_action('revisions', 1, 'li', 1),
                            'backlink'  => tpl_action('backlink', 1, 'li', 1),
                            'subscribe' => tpl_action('subscribe', 1, 'li', 1),
                            'revert'    => tpl_action('revert', 1, 'li', 1),
                            'top'       => tpl_action('top', 1, 'li', 1),
                        )); ?>
                    </ul>
                </div>
            <?php endif; ?>
        </div><!-- /wrapper -->

        <!-- ********** FOOTER ********** -->
        <div id="dokuwiki__footer"><div class="pad">
            <div class="doc"><?php tpl_pageinfo() /* 'Last modified' etc */ ?></div>
            <?php tpl_license('button') /* content license, parameters: img=*badge|button|0, imgonly=*0|1, return=*0|1 */ ?>
        </div></div><!-- /footer -->

        <?php tpl_includeFile('footer.html') ?>
    </div><!-- .dokuwiki__site -->

    <div class="no"><?php tpl_indexerWebBug() /* provide DokuWiki housekeeping, required in all templates */ ?></div>

</body>
</html>
