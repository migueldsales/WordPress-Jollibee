<?php get_header(); ?>


<!-- <section class="full__width">
    <div class="container">
        <div class="full__width__wrapper">
            <p>Jollibee is the largest fast food chain brand in the Philippines, operating a network of more than 1,500 stores in 17 countries. A dominant market leader in the Philippines, Jollibee enjoys the lion’s share of the local market that is more than all the other multinational fast food brands in PH combined. With a strict adherence to the highest standards of food quality, service and cleanliness, Jollibee serves great-tasting, high-quality and affordable food products to include its superior-tasting Chickenjoy, mouth-watering Yumburger, and deliciously satisfying Jolly Spaghetti among other delicious products.</p>
            <p>Jollibee has embarked on an aggressive international expansion plan, with more than 270 international branches in the United States, Canada, Hong Kong, Macau, Brunei, Vietnam, Singapore, Malaysia, Saudi Arabia, United Arab Emirates, Qatar, Oman, Kuwait, Bahrain, Italy, Spain, and in the United Kingdom.</p>
        </div>
    </div>
</section> -->

<?php echo do_shortcode('contact-jollibee') ?>

<?php if(have_posts()) : while(have_posts()) : the_post() ?>

<section class="page__hero">
    <h1><?php the_title();?></h1>
</section>

<div class="full__width">
    <div class="container">
        <?php the_content(); ?>
    </div>
</div>


<?php
    endwhile;
    else:
        echo "no more post";
    endif;
?>
<div class="modal">
    <div class="backdrop"></div>
    <div class="modal__main">
        <div class="modal__header">
            <h2>Contact Us</h2>
            <button id ="btnClose"><i class ="fas fa-times"></i></button>
        </div>
        <div class="modal-body">
    <?php echo do_shortcode('[contact-form-7 id="95" title="Contact form 1"]')?>
        <!-- <form action="">
                <div class="form__group">
                    <label for="fullname">Full Name</label>
                    <input type="text">
                </div>
                <div class="form__group">
                    <label for="email">Email</label>
                    <input type="text">
                </div>
                <div class="form__group">
                    <label for="tel">Mobile</label>
                    <input type="tel">
                </div>
                <div class="form__group">
                    <label for="tel">Message</label>
                    <textarea></textarea>
                </div>

                <input type="submit" value ="Send Message">
            </form> -->
        </div>
    </div>
</div>


<?php get_footer(); ?>