<div class="breadcrumb">
    <div class="wrapper">
        <div class="image-field">
            <div class="img img--cover">
                <?php if ($breadcrumbType == "Görsel") : ?>
                    <img src="<?= $breadcrumbSRC ?>" alt="">
                <?php else : ?>
                    <video autoplay muted playsinline loop>
                        <source src="<?= $breadcrumbSRC ?>" type="video/mp4">
                    </video>
                <?php endif; ?>
            </div>
            <div class="text-container container">
                <div class="text-field">
                    <div class="navigation">
                        <h2 class="title"><?= $pageTitle ?></h2>
                        <ul>
                            <li>
                                <a href="page-homepage.php">
                                    <span class="text">Home</span>
                                </a>
                            </li>
                            <?php if ($subNavigation) : ?>
                                <li>
                                    <!-- Buraya mevcut sayfa adı ve linki gelecek -->
                                    <a href="javascript:;">
                                        <span class="text"><?= $subNavigation ?></span>
                                    </a>
                                </li>
                            <?php endif; ?>
                            <li>
                                <a href="javascript:;" class="deactive">
                                    <span class="text"><?= $pageTitle ?></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="scroll">
                        <div class="content scroll-animation" data-target=".page-content">
                            <span class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 30">
                                    <line class="stroke" x1="10.5" y1=".5" x2="10.5" y2="29.5" style="fill: none; stroke-linecap: round;" />
                                    <line class="stroke" x1="10.5" y1="29.5" x2="19.5" y2="20.5" style="fill: none; stroke-linecap: round;" />
                                    <line class="stroke" x1="10.5" y1="29.5" x2=".5" y2="20.5" style="fill: none; stroke-linecap: round;" />
                                </svg>
                            </span>
                            <span class="text">Scroll</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>