<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             680106bf3ae9c             |
    |_______________________________________|
*/
 namespace Pmpr\Module\WoocommerceVariation; use Pmpr\Common\Foundation\Container\ModuleInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; class WoocommerceVariation extends ModuleInitiator { public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __('Woocommerce Variation', PR__MDL__WOOCOMMERCE_VARIATION); }, Constants::wuowaiyouwecckaw => false]); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('after_setup_theme', [$this, 'kgkmwucmkcqaksmo']); $this->waqewsckuayqguos('before_enqueue_frontend_assets', [$this, 'enqueue']); } public function kgkmwucmkcqaksmo() { if ($this->caokeucsksukesyo()->wikusamwomuogoau()->ggocakcisguuokai() && $this->uwkmaywceaaaigwo()->aqasygcsqysmmyke()->kmymkocwcawgeccm()) { Product::symcgieuakksimmu(); } } public function enqueue() { if ($this->caokeucsksukesyo()->wikusamwomuogoau()->ggocakcisguuokai() && $this->uwkmaywceaaaigwo()->aqasygcsqysmmyke()->kmymkocwcawgeccm()) { $meakksicouekcgoe = $this->caokeucsksukesyo()->usugyumcgeaaowsi(); $meakksicouekcgoe->yawoscugkyysowie($meakksicouekcgoe->owygwqwawqoiusis($this, 'variation', 'front.js')->simswskycwagoeqy()); } } }
