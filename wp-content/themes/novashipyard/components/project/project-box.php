<a href="single-project.php">
    <div class="project-box" data-type="<?= $project['filter'] ?>">
        <div class="image-field">
            <div class="img img--cover">
                <img src="<?= $project['left-image'] ?>" alt="">
            </div>
        </div>
        <div class="info-field">
            <div class="info-content">
                <div class="image">
                    <div class="img img--contain">
                        <img src="<?= $project['right-image'] ?>" alt="">
                    </div>
                </div>
                <div class="text-field">
                    <div class="current">
                        <div class="category"><?= $project['filter-normal'] ?></div>
                        <p class="name">18M SUPPORT UTILITY VESSEL NOVA CTX 180</p>
                    </div>
                    <p class="button b--style b--style-white b--width-fit">
                        <span class="text">Detail</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</a>