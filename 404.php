<?php get_header();?>
<section class="breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcumb">
                    <h4><?php _e( "404 Page Not Found", "halim");?></h4>
                    <ul>
                        <li><a href=""></a>Home</li> / 
                        <li><?php _e( "404", "halim" );?></li>
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
                <a class="text-center" href="<?php echo site_url();?>">Go Back To The HomePage</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer();?>