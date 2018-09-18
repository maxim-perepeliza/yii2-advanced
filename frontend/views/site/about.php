<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = Yii::t('app', 'О нас');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <main role="main" class="contact-page">
        <div class="container">
            <section class="section-contacts">
                <div class="lm-title-block lm-title-block__center">
                    <h2 class="lm-title"><?= Html::encode($this->title) ?></h2>
                </div>
                <div class="contact-block">
                    <div class="contact-block-info">
                        <p><?php echo 'DESCRIPTION'; //echo !empty($fields['description']) ? $fields['description'] : '';  ?></p>
                        <address>
                            <span class="phone contact-block-info__phone">
                                <div>
                                    <a href="tel:000">
                                        <?php echo 'TEL'; //echo !empty($generalOptions['contant_tel_header']) ? $generalOptions['contant_tel_header'] : '';  ?>
                                    </a>
                                    <p><?php echo 'DESCRIPTION'; // __('Дзвінки безкоштовні.', 'lombard')  ?></p>
                                    <p><?php echo 'DESCRIPTION'; // sprintf(__('Щодня з %s до %s', 'lombard'), $generalOptions['call_from_time'], $generalOptions['call_to_time'])  ?></p>
                                </div>
                                <button id="backCallFooter"
                                        class="btn footer-btn  back-call"><span>Передзвонити менi</span></button>
                            </span>
                            <?php
                            if (!empty($generalOptions['email_contact_address'])) :
                                ?>
                                <p class="mail"><a href="mailto:<?= $generalOptions['email_contact_address'] ?>"><?= $generalOptions['email_contact_address'] ?></a></p>
                            <?php endif; ?>
                            <?php
                            if (!empty($generalOptions['email_contact_address'])) :
                                ?>
                                <p class="mail"><a href="mailto:<?= $generalOptions['email_contact_address'] ?>"><?= $generalOptions['email_contact_address'] ?></a></p>
                                <p class="location"><?php echo!empty($fields['head_office_address']) ? $fields['head_office_address'] : ''; ?></p>
                            <?php endif; ?>
                        </address>
                        <ul class="addresses-list">
                            <?php
                            if (!empty($fields['email_address_marketing']) && !empty($fields['marketing_department_title'])) :
                                ?>
                                <li><?= $fields['marketing_department_title'] ?>
                                    <div><a href="mailto:<?= $fields['email_address_marketing'] ?>"><?= $fields['email_address_marketing'] ?></a>
                                    </div>
                                </li>
                            <?php endif; ?>
                            <?php
                            if (!empty($fields['email_address_develop']) && !empty($fields['development_department_title'])) :
                                ?>
                                <li><?= $fields['development_department_title'] ?>
                                    <div><a href="mailto:<?= $fields['email_address_develop'] ?>"><?= $fields['email_address_develop'] ?></a>
                                    </div>
                                </li>
                            <?php endif; ?>
                            <?php
                            if (!empty($fields['email_address_hr']) && !empty($fields['hr_department_title'])) :
                                ?>
                                <li><?= $fields['hr_department_title'] ?>
                                    <div>
                                        <a href="mailto:<?= $fields['email_address_hr'] ?>"><?= $fields['email_address_hr'] ?></a>
                                    </div>
                                </li>
                            <?php endif; ?>
                            <?php
                            if (!empty($fields['email_address_internet_department']) && !empty($fields['internet_marketing_department_title'])) :
                                ?>
                                <li><?= $fields['internet_marketing_department_title'] ?>
                                    <div>
                                        <a href="mailto:<?= $fields['email_address_internet_department'] ?>"><?= $fields['email_address_internet_department'] ?></a>
                                    </div>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <div class="contact-block-form">
                        <p class="contact-block-form__title">
                            <?php echo 'DESCRIPTION'; // __('У вас є питання або пропозиція? Напишіть нам і ми вам відповімо.', 'lombard')  ?></p>
                            <?php echo 'DESCRIPTION'; // do_shortcode('[contact-form-7 id="3328" title="Форма на сторінку контактів"]') ?>
                    </div>
                </div>
            </section>

            <section class="section home-lombards">
                <div class="lm-title-block lm-title-block__center">
                    <h2 class="lm-title"><?php echo 'DESCRIPTION'; // __('Наші відділення', 'lombard')  ?></h2>
                </div>
                <div class="home-lombards-map" style="height: 500px;" id="map">

                </div>
            </section>
        </div>
    </main>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDlz7f8qQwqDy9wl8IRIZ58NiYgXTrqBTk&language=<?= Yii::$app->language ?>"></script>
    <script>
        var titleMap = '<?php echo Yii::t('app', 'Наш главный офис'); ?>';
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 16,
            center: {lat: 50.040973, lng: 36.29391}
        });
        var marker = new google.maps.Marker({
            position: {lat: 50.040973, lng: 36.29391},
            map: map,
            title: titleMap
        });
    </script>
</div>
