add_action( 'pizzaro_footer_v1', 'pz_footer_custom_content', 9 );
function pz_footer_custom_content() {
    ?>  
    <div class="custom-sale-label">
        <a href="https://filips.ch/index.php/product/mittagsmenue/">
            <div class="custom-sale-label-title">Mittagsmenü</div>
            <div class="custom-sale-label-desc">1 Pizza nach Wahl <br>1 Gemischter Salat<br>1 Getränk Für</div>
            <div class="custom-sale-label-price">19.90</div>
        </a>
    </div>
    <div class="custom-footer-text" style="margin-bottom: 20px;">ALLE PREISE SIND INKLUSIVE  MwSt.</div>
    <?php
}
