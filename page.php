<?php get_header();?>
<section class="breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcumb">
                    <h4><?php the_title();?></h4>
                    <ul>
                        <li><a href=""></a>Home</li> / 
                        <li><?php the_title();?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="page_content pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="content">
                   <?php the_content();?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer();?>