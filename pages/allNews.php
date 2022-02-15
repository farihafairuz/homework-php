<?php include 'pages/include/header.php'?>

<section class="py-5">
    <div class="container">
        <div class="row" style="height: 500px">
            <?php foreach($allNews as $news) { ?>
            <div class="col-md-4 mt-3">
                <div class="card">
                    <img src="<?php echo $news['image'] ?>" alt="" class="card-img-top" style="height:200px">
                    <div class="card-body">
                        <h3 class="card-title"> <a href="" style="color: #0b2e13; font-size:medium; font-weight: bold"><?php echo $news['name'] ?> </a></h3>
    
                        <p class="text-justify"><?php echo $news['description']?></p>
                        <span class="text-muted fs-11"><?php echo $news['hour']?></span>
            
                    </div>
                </div>
            </div>
            <?php } ?>


        </div>
    </div>

</section>



<?php include 'pages/include/footer.php'?>
