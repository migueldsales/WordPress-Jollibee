<?php 
    $header = get_field('header');
    $body = get_field('body');
    $image = get_field('image');
    $orientation = get_field('orientation');
?>

<section class="two__cols <?php echo $orientation?>">
    <div class="container">
        <div class="two__cols__grid">
            <div class="col__1">
                <img src="<?php echo $image;?>" alt="">
            </div>
            <div class="col__2">
                <h3><?php echo $header;?></h3>
                <p>Jollibee Foods Corporation’s (“JFC” or the “Company”) core business is the development, operation and franchising of its quick-service restaurant brands. It offers a wide variety of affordable and delicious dishes and great tasting food prepared to satisfy customers of all ages and from all walks of life.</p>
                <p><?php echo $body;?></p>
            </div>
        </div>
    </div>
</section>