<?php get_header(); ?>
<section class="cta">
    <div class="container">
        <div class="cta__wrapper">
            <h3>Have a question?</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum architecto pariatur recusandae itaque possimus quibusdam doloremque dignissimos doloribus ex impedit.</p>
            <button id="btnModal">Contact</button> 
        </div>
    </div>
</section>

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