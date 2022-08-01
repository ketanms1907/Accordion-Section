<div class="container">
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<?php $faq_accordion = get_field('treatment_accordion', $post->ID);
if(!empty($faq_accordion)){?>
<h2 class="faqs-rel-treatment-title">FAQ's</h2>
<?php
if(!empty($faq_accordion)) { ?>
<div class="treatment-accordion-secetion">
<?php foreach ( $faq_accordion as $faq_acco ) {?>
<div class="maccordion">
<div class="accordion_head1">
<div class="accordion_head plusminus-sign">+</div>
<div class="accordion-title"><?php echo $faq_acco['accordion_title']; ?>
</div>
</div>
<div class="accordion_body1" style="display: none;">
<div class="accordion-description"> <?php echo $faq_acco['accordion_description']; ?></div>
</div>
</div>
<?php } ?>
</div>
<?php } ?>
<?php } ?>
</div>
</div>
</div>
<script>
jQuery(document).ready(function ($) {
//toggle the component with class accordion_body
$(".accordion_head1").click(function () {
if ($('.accordion_body1').is(':visible')) {
$(".accordion_body1").slideUp(300);
$(".plusminus-sign").text('+');
}
if ($(this).next(".accordion_body1").is(':visible')) {
$(this).next(".accordion_body1").slideUp(300);
$(this).children(".plusminus-sign").text('+');
} else {
$(this).next(".accordion_body1").slideDown(300);
$(this).children(".plusminus-sign").text('-');
}
});
});
</script>