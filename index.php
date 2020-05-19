<?php
    include('includes/header.php');

    $photos = Photo::find_all();
?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="row m-5">
                    <?php foreach ($photos as $photo): ?>
                    <div class="col-4 col-xl-4">
                        <a href="photo.php?id=<?php echo $photo->id; ?>"><img src="<?php echo 'admin/' . $photo->picture_path(); ?>" alt="<?php echo $photo->alternate_text; ?>" class="img-fluid"></a>
                    </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>

<?php
    include('includes/footer.php');
?>