<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Поддержка");
?>
    <div class="section-banner container">
        <div class="section-banner-wrapper">
            <video playsinline muted autoplay loop poster="<?= SITE_TEMPLATE_PATH ?>/assets/img/bg-video-picture.png"
                   src="<?= SITE_TEMPLATE_PATH ?>/assets/img/bg-video.mp4"></video>
            <div class="section-banner-block">
                <p class="section-banner-name">ПОДДЕРЖКА</p>
                <h2 class="section-banner-title">МАТЕРИАЛЫ ДЛЯ СКАЧИВАНИЯ</h2>
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    array(
                        "AREA_FILE_SHOW" => "file",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/inf.php"
                    )
                ); ?>
            </div>
        </div>
    </div>

    <div class="support container">
        <div class="support-items">
            <div class="support-card" data-aos="fade-up">
                <a href="<?= SITE_TEMPLATE_PATH ?>/assets/img/content/support-img1.png"
                   download="<?= SITE_TEMPLATE_PATH ?>/assets/img/content/support-img1.png"
                   class="support-card-link">
                    <div class="support-card-wrapper">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/content/support-img1.png" alt="">
                        <div class="support-card-content">
                            <h3>Aquarius Open Top</h3>
                            <a href="<?= SITE_TEMPLATE_PATH ?>/assets/img/content/support-img1.png"
                               download="<?= SITE_TEMPLATE_PATH ?>/assets/img/content/support-img1.png"
                               class="support-card-download">
                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.61713 6.98787L7.6453 8.81523V1.2334H6.65939V8.78288L4.68756 6.98787L4.68755 8.26353L6.65939 10.0918V10.1215H6.69116L7.17449 10.5691L7.6453 10.1215L9.61713 8.26353V6.98787Z"
                                          fill="#F8EBE2"/>
                                    <path d="M0.152344 10.5691V13.4834H14.1523V10.5691H12.9692V12.3553H1.33544V10.5691H0.152344Z"
                                          fill="#F8EBE2"/>
                                </svg>
                                Скачать
                            </a>
                        </div>
                    </div>
                </a>
            </div>
            <div class="support-card" data-aos="fade-up">
                <a href="<?= SITE_TEMPLATE_PATH ?>/assets/img/content/support-img2.png"
                   download="<?= SITE_TEMPLATE_PATH ?>/assets/img/content/support-img2.png"
                   class="support-card-link">
                    <div class="support-card-wrapper">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/content/support-img2.png" alt="">
                        <div class="support-card-content">
                            <h3>Aquarius Open Bottom</h3>
                            <a href="<?= SITE_TEMPLATE_PATH ?>/assets/img/content/support-img2.png"
                               download="<?= SITE_TEMPLATE_PATH ?>/assets/img/content/support-img2.png"
                               class="support-card-download">
                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.61713 6.98787L7.6453 8.81523V1.2334H6.65939V8.78288L4.68756 6.98787L4.68755 8.26353L6.65939 10.0918V10.1215H6.69116L7.17449 10.5691L7.6453 10.1215L9.61713 8.26353V6.98787Z"
                                          fill="#F8EBE2"/>
                                    <path d="M0.152344 10.5691V13.4834H14.1523V10.5691H12.9692V12.3553H1.33544V10.5691H0.152344Z"
                                          fill="#F8EBE2"/>
                                </svg>
                                Скачать
                            </a>
                        </div>
                    </div>
                </a>
            </div>
            <div class="support-card" data-aos="fade-up">
                <a href="<?= SITE_TEMPLATE_PATH ?>/assets/img/content/support-img3.png"
                   download="<?= SITE_TEMPLATE_PATH ?>/assets/img/content/support-img3.png"
                   class="support-card-link">
                    <div class="support-card-wrapper">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/content/support-img3.png" alt="">
                        <div class="support-card-content">
                            <h3>Aquarius Open Center Aquarius Open Center Aquarius Open</h3>
                            <a href="<?= SITE_TEMPLATE_PATH ?>/assets/img/content/support-img3.png"
                               download="<?= SITE_TEMPLATE_PATH ?>/assets/img/content/support-img3.png"
                               class="support-card-download">
                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.61713 6.98787L7.6453 8.81523V1.2334H6.65939V8.78288L4.68756 6.98787L4.68755 8.26353L6.65939 10.0918V10.1215H6.69116L7.17449 10.5691L7.6453 10.1215L9.61713 8.26353V6.98787Z"
                                          fill="#F8EBE2"/>
                                    <path d="M0.152344 10.5691V13.4834H14.1523V10.5691H12.9692V12.3553H1.33544V10.5691H0.152344Z"
                                          fill="#F8EBE2"/>
                                </svg>
                                Скачать
                            </a>
                        </div>
                    </div>
                </a>
            </div>
            <div class="support-card" data-aos="fade-up">
                <a href="<?= SITE_TEMPLATE_PATH ?>/assets/img/content/support-img2.png"
                   download="<?= SITE_TEMPLATE_PATH ?>/assets/img/content/support-img2.png"
                   class="support-card-link">
                    <div class="support-card-wrapper">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/content/support-img2.png" alt="">
                        <div class="support-card-content">
                            <h3>Aquarius Open Left</h3>
                            <a href="<?= SITE_TEMPLATE_PATH ?>/assets/img/content/support-img2.png"
                               download="<?= SITE_TEMPLATE_PATH ?>/assets/img/content/support-img2.png"
                               class="support-card-download">
                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.61713 6.98787L7.6453 8.81523V1.2334H6.65939V8.78288L4.68756 6.98787L4.68755 8.26353L6.65939 10.0918V10.1215H6.69116L7.17449 10.5691L7.6453 10.1215L9.61713 8.26353V6.98787Z"
                                          fill="#F8EBE2"/>
                                    <path d="M0.152344 10.5691V13.4834H14.1523V10.5691H12.9692V12.3553H1.33544V10.5691H0.152344Z"
                                          fill="#F8EBE2"/>
                                </svg>
                                Скачать
                            </a>
                        </div>
                    </div>
                </a>
            </div>
            <div class="support-card" data-aos="fade-up">
                <a href="<?= SITE_TEMPLATE_PATH ?>/assets/img/content/support-img1.png"
                   download="<?= SITE_TEMPLATE_PATH ?>/assets/img/content/support-img1.png"
                   class="support-card-link">
                    <div class="support-card-wrapper">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/content/support-img1.png" alt="">
                        <div class="support-card-content">
                            <h3>Aquarius Open Right</h3>
                            <a href="<?= SITE_TEMPLATE_PATH ?>/assets/img/content/support-img1.png"
                               download="<?= SITE_TEMPLATE_PATH ?>/assets/img/content/support-img1.png"
                               class="support-card-download">
                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.61713 6.98787L7.6453 8.81523V1.2334H6.65939V8.78288L4.68756 6.98787L4.68755 8.26353L6.65939 10.0918V10.1215H6.69116L7.17449 10.5691L7.6453 10.1215L9.61713 8.26353V6.98787Z"
                                          fill="#F8EBE2"/>
                                    <path d="M0.152344 10.5691V13.4834H14.1523V10.5691H12.9692V12.3553H1.33544V10.5691H0.152344Z"
                                          fill="#F8EBE2"/>
                                </svg>
                                Скачать
                            </a>
                        </div>
                    </div>
                </a>
            </div>
            <div class="support-card" data-aos="fade-up">
                <a href="<?= SITE_TEMPLATE_PATH ?>/assets/img/content/support-img3.png"
                   download="<?= SITE_TEMPLATE_PATH ?>/assets/img/content/support-img3.png"
                   class="support-card-link">
                    <div class="support-card-wrapper">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/content/support-img3.png" alt="">
                        <div class="support-card-content">
                            <h3>Aquarius Open Top</h3>
                            <a href="<?= SITE_TEMPLATE_PATH ?>/assets/img/content/support-img3.png"
                               download="<?= SITE_TEMPLATE_PATH ?>/assets/img/content/support-img3.png"
                               class="support-card-download">
                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.61713 6.98787L7.6453 8.81523V1.2334H6.65939V8.78288L4.68756 6.98787L4.68755 8.26353L6.65939 10.0918V10.1215H6.69116L7.17449 10.5691L7.6453 10.1215L9.61713 8.26353V6.98787Z"
                                          fill="#F8EBE2"/>
                                    <path d="M0.152344 10.5691V13.4834H14.1523V10.5691H12.9692V12.3553H1.33544V10.5691H0.152344Z"
                                          fill="#F8EBE2"/>
                                </svg>
                                Скачать
                            </a>
                        </div>
                    </div>
                </a>
            </div>
            <div class="support-card" data-aos="fade-up">
                <a href="<?= SITE_TEMPLATE_PATH ?>/assets/img/content/support-img2.png"
                   download="<?= SITE_TEMPLATE_PATH ?>/assets/img/content/support-img2.png"
                   class="support-card-link">
                    <div class="support-card-wrapper">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/content/support-img2.png" alt="">
                        <div class="support-card-content">
                            <h3>Aquarius Open Bottom</h3>
                            <a href="<?= SITE_TEMPLATE_PATH ?>/assets/img/content/support-img2.png"
                               download="<?= SITE_TEMPLATE_PATH ?>/assets/img/content/support-img2.png"
                               class="support-card-download">
                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.61713 6.98787L7.6453 8.81523V1.2334H6.65939V8.78288L4.68756 6.98787L4.68755 8.26353L6.65939 10.0918V10.1215H6.69116L7.17449 10.5691L7.6453 10.1215L9.61713 8.26353V6.98787Z"
                                          fill="#F8EBE2"/>
                                    <path d="M0.152344 10.5691V13.4834H14.1523V10.5691H12.9692V12.3553H1.33544V10.5691H0.152344Z"
                                          fill="#F8EBE2"/>
                                </svg>
                                Скачать
                            </a>
                        </div>
                    </div>
                </a>
            </div>
            <div class="support-card" data-aos="fade-up">
                <a href="<?= SITE_TEMPLATE_PATH ?>/assets/img/content/support-img1.png"
                   download="<?= SITE_TEMPLATE_PATH ?>/assets/img/content/support-img1.png"
                   class="support-card-link">
                    <div class="support-card-wrapper">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/content/support-img1.png" alt="">
                        <div class="support-card-content">
                            <h3>Aquarius Open Right</h3>
                            <a href="<?= SITE_TEMPLATE_PATH ?>/assets/img/content/support-img1.png"
                               download="<?= SITE_TEMPLATE_PATH ?>/assets/img/content/support-img1.png"
                               class="support-card-download">
                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.61713 6.98787L7.6453 8.81523V1.2334H6.65939V8.78288L4.68756 6.98787L4.68755 8.26353L6.65939 10.0918V10.1215H6.69116L7.17449 10.5691L7.6453 10.1215L9.61713 8.26353V6.98787Z"
                                          fill="#F8EBE2"/>
                                    <path d="M0.152344 10.5691V13.4834H14.1523V10.5691H12.9692V12.3553H1.33544V10.5691H0.152344Z"
                                          fill="#F8EBE2"/>
                                </svg>
                                Скачать
                            </a>
                        </div>
                    </div>
                </a>
            </div>
            <div class="support-card" data-aos="fade-up">
                <a href="<?= SITE_TEMPLATE_PATH ?>/assets/img/content/support-img2.png"
                   download="<?= SITE_TEMPLATE_PATH ?>/assets/img/content/support-img2.png"
                   class="support-card-link">
                    <div class="support-card-wrapper">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/content/support-img2.png" alt="">
                        <div class="support-card-content">
                            <h3>Aquarius Open Top</h3>
                            <a href="<?= SITE_TEMPLATE_PATH ?>/assets/img/content/support-img2.png"
                               download="<?= SITE_TEMPLATE_PATH ?>/assets/img/content/support-img2.png"
                               class="support-card-download">
                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.61713 6.98787L7.6453 8.81523V1.2334H6.65939V8.78288L4.68756 6.98787L4.68755 8.26353L6.65939 10.0918V10.1215H6.69116L7.17449 10.5691L7.6453 10.1215L9.61713 8.26353V6.98787Z"
                                          fill="#F8EBE2"/>
                                    <path d="M0.152344 10.5691V13.4834H14.1523V10.5691H12.9692V12.3553H1.33544V10.5691H0.152344Z"
                                          fill="#F8EBE2"/>
                                </svg>
                                Скачать
                            </a>
                        </div>
                    </div>
                </a>
            </div>
            <div class="support-card" data-aos="fade-up">
                <a href="<?= SITE_TEMPLATE_PATH ?>/assets/img/content/support-img3.png"
                   download="<?= SITE_TEMPLATE_PATH ?>/assets/img/content/support-img3.png"
                   class="support-card-link">
                    <div class="support-card-wrapper">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/content/support-img3.png" alt="">
                        <div class="support-card-content">
                            <h3>Aquarius Open Center</h3>
                            <a href="<?= SITE_TEMPLATE_PATH ?>/assets/img/content/support-img3.png"
                               download="<?= SITE_TEMPLATE_PATH ?>/assets/img/content/support-img3.png"
                               class="support-card-download">
                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.61713 6.98787L7.6453 8.81523V1.2334H6.65939V8.78288L4.68756 6.98787L4.68755 8.26353L6.65939 10.0918V10.1215H6.69116L7.17449 10.5691L7.6453 10.1215L9.61713 8.26353V6.98787Z"
                                          fill="#F8EBE2"/>
                                    <path d="M0.152344 10.5691V13.4834H14.1523V10.5691H12.9692V12.3553H1.33544V10.5691H0.152344Z"
                                          fill="#F8EBE2"/>
                                </svg>
                                Скачать
                            </a>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="support-bottom">
            <button class="support-btn btn-secondary">Показать Ещё</button>
        </div>
    </div>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>