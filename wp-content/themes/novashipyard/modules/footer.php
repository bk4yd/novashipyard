<footer>
    <div class="footer-container">
        <div class="footer-background">
            <video autoplay muted playsinline loop>
                <source src="../assets/image/other/sample.mp4">
            </video>
        </div>
        <div class="footer-top">
            <div class="container">
                <div class="wrapper">
                    <div class="footer-logo-field">
                        <a href="page-homepage.php">
                            <?php include 'modules/logo.php' ?>
                        </a>
                        <p class="title">Efficiency + Innovation + Integrity = Safety</p>
                        <p class="description">We believe that safety is the by product of each person living and working by our core values.</p>
                    </div>
                    <div class="footer-menu-field">
                        <div class="footer-menu">
                            <ul>
                                <li>
                                    <a href="#">
                                        <span class="text">Home</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="text">Project</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="text">Media/News</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="text">Contact</span>
                                    </a>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <a href="#">
                                        <span class="text">Company</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="text">About</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="text">Contact</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="text">Career</span>
                                    </a>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <a href="#">
                                        <span class="text">Projects</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="text">Nova FVT120 Fishing Trawler</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="text">Sport Utility Vessel Nova CTX</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="text">Fire Fighting Vessel Nova FFX360</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="footer-social-media">
                            <ul class="social-media-ul">
                                <?php
                                include 'components/icon-social-media.php';
                                foreach ($socialMedias as $socialMedia) :
                                ?>
                                    <li class="sm-li">
                                        <a href="<?= $socialMedia['link'] ?>" target="_blank" class="sm-link">
                                            <span class="icon">
                                                <?= $socialMedia['icon'] ?>
                                            </span>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-middle">
            <div class="container">
                <div class="wrapper">
                    <div class="contact-field">
                        <ul>
                            <?php
                            include 'components/contact-info.php';
                            foreach ($contactInfos as $contactInfo) :
                            ?>
                                <li>
                                    <a href="<?= $contactInfo['link'] ?>" target="<?= $contactInfo['target'] ?>">
                                        <span class="icon"><?= $contactInfo['icon'] ?></span>
                                        <span class="text"><?= $contactInfo['text'] ?></span>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="newsletter-field">
                        <?php include 'components/newsletter.php'; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="wrapper">
                    <div class="copyright">
                        <p class="text">© 2021 <a href="page-homepage.php">novashipyard.com</a> | All rights reserved</p>
                    </div>
                    <div class="right-field">
                        <ul>
                            <li>
                                <a href="page.php">
                                    <span class="text">Privacy Policy</span>
                                </a>
                            </li>
                            <li>
                                <a href="page.php">
                                    <span class="text">KVKK</span>
                                </a>
                            </li>
                        </ul>
                        <div class="signature">
                            <div class="penta-logo light">
                                <a class="penta-logo-text" href="https://www.pentayazilim.com/" title="Web Tasarım" rel="dofollow">Web<br>Tasarım</a>
                                <a class="penta-logo-brand" href="https://www.pentayazilim.com/" title="Penta Yazılım" rel="dofollow">
                                    <div class="penta-logo-img">
                                        <img class="penta-logo-p" src="../assets/image/static/penta-p-light.png" alt="Web Tasarım" title="Penta Yazılım">
                                        <img class="penta-logo-y" src="../assets/image/static/penta-y-light.png" alt="Penta Yazılım" title="Web Tasarım">
                                    </div>
                                    <strong>Penta<br>Yazılım</strong>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="bg-overlay bg-overlay--black"></div>
<?php include 'components/popup-gdpr.php' ?>
<!-- Önbellek tutmasın diye ekledim silersin -->
<script src="../assets/js/main.js?id<?= rand(); ?>"></script>
<script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
</body>

</html>