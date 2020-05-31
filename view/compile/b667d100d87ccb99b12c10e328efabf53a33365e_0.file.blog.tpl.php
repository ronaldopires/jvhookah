<?php
/* Smarty version 3.1.36, created on 2020-05-30 22:22:19
  from 'C:\xampp\htdocs\jvhookah\view\blog.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ed306cb490ed5_30658479',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b667d100d87ccb99b12c10e328efabf53a33365e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\jvhookah\\view\\blog.tpl',
      1 => 1590888137,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed306cb490ed5_30658479 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_HOME']->value;?>
"><i class="fa fa-home"></i> Home</a>
                    <span>Blog</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section Begin -->

<!-- Blog Section Begin -->
<section class="blog-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1">
                <div class="blog-sidebar">
                    <div class="search-form">
                        <h4>Search</h4>
                        <form action="#">
                            <input type="text" placeholder="Search . . .  ">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <div class="blog-catagory">
                        <h4>Categories</h4>
                        <ul>
                            <li><a href="#">Fashion</a></li>
                            <li><a href="#">Travel</a></li>
                            <li><a href="#">Picnic</a></li>
                            <li><a href="#">Model</a></li>
                        </ul>
                    </div>
                    <div class="recent-post">
                        <h4>Recent Post</h4>
                        <div class="recent-blog">
                            <a href="#" class="rb-item">
                                <div class="rb-pic">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/blog/recent-1.jpg" alt="">
                                </div>
                                <div class="rb-text">
                                    <h6>The Personality Trait That Makes...</h6>
                                    <p>Fashion <span>- May 19, 2019</span></p>
                                </div>
                            </a>
                            <a href="#" class="rb-item">
                                <div class="rb-pic">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/blog/recent-2.jpg" alt="">
                                </div>
                                <div class="rb-text">
                                    <h6>The Personality Trait That Makes...</h6>
                                    <p>Fashion <span>- May 19, 2019</span></p>
                                </div>
                            </a>
                            <a href="#" class="rb-item">
                                <div class="rb-pic">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/blog/recent-3.jpg" alt="">
                                </div>
                                <div class="rb-text">
                                    <h6>The Personality Trait That Makes...</h6>
                                    <p>Fashion <span>- May 19, 2019</span></p>
                                </div>
                            </a>
                            <a href="#" class="rb-item">
                                <div class="rb-pic">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/blog/recent-4.jpg" alt="">
                                </div>
                                <div class="rb-text">
                                    <h6>The Personality Trait That Makes...</h6>
                                    <p>Fashion <span>- May 19, 2019</span></p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="blog-tags">
                        <h4>Product Tags</h4>
                        <div class="tag-item">
                            <a href="#">Towel</a>
                            <a href="#">Shoes</a>
                            <a href="#">Coat</a>
                            <a href="#">Dresses</a>
                            <a href="#">Trousers</a>
                            <a href="#">Men's hats</a>
                            <a href="#">Backpack</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 order-1 order-lg-2">
                <div class="row">
                    <div class="col-lg-6 col-sm-6">
                        <div class="blog-item">
                            <div class="bi-pic">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/blog/blog-1.jpg" alt="">
                            </div>
                            <div class="bi-text">
                                <a href="./blog-details.html">
                                    <h4>The Personality Trait That Makes People Happier</h4>
                                </a>
                                <p>travel <span>- May 19, 2019</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="blog-item">
                            <div class="bi-pic">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/blog/blog-2.jpg" alt="">
                            </div>
                            <div class="bi-text">
                                <a href="./blog-details.html">
                                    <h4>This was one of our first days in Hawaii last week.</h4>
                                </a>
                                <p>Fashion <span>- May 19, 2019</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="blog-item">
                            <div class="bi-pic">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/blog/blog-3.jpg" alt="">
                            </div>
                            <div class="bi-text">
                                <a href="./blog-details.html">
                                    <h4>Last week I had my first work trip of the year to Sonoma Valley</h4>
                                </a>
                                <p>travel <span>- May 19, 2019</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="blog-item">
                            <div class="bi-pic">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/blog/blog-4.jpg" alt="">
                            </div>
                            <div class="bi-text">
                                <a href="./blog-details.html">
                                    <h4>Happppppy New Year! I know I am a little late on this post</h4>
                                </a>
                                <p>Fashion <span>- May 19, 2019</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="blog-item">
                            <div class="bi-pic">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/blog/blog-5.jpg" alt="">
                            </div>
                            <div class="bi-text">
                                <a href="./blog-details.html">
                                    <h4>Absolue collection. The Lancome team has been one…</h4>
                                </a>
                                <p>Model <span>- May 19, 2019</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="blog-item">
                            <div class="bi-pic">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/img/blog/blog-6.jpg" alt="">
                            </div>
                            <div class="bi-text">
                                <a href="./blog-details.html">
                                    <h4>Writing has always been kind of therapeutic for me</h4>
                                </a>
                                <p>Fashion <span>- May 19, 2019</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="loading-more">
                            <i class="icon_loading"></i>
                            <a href="#">
                                Loading More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Section End --><?php }
}
