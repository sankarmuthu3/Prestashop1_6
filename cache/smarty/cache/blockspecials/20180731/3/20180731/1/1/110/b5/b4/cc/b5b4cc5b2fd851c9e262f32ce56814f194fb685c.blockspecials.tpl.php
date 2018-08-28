<?php /*%%SmartyHeaderCode:126305b6038035e4436-94890023%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5b4cc5b2fd851c9e262f32ce56814f194fb685c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\default-bootstrap\\modules\\blockspecials\\blockspecials.tpl',
      1 => 1530102712,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '126305b6038035e4436-94890023',
  'variables' => 
  array (
    'link' => 0,
    'special' => 0,
    'PS_CATALOG_MODE' => 0,
    'priceDisplay' => 0,
    'specific_prices' => 0,
    'priceWithoutReduction_tax_excl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b603803855431_25660904',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b603803855431_25660904')) {function content_5b603803855431_25660904($_smarty_tpl) {?>
<!-- MODULE Block specials -->
<div id="special_block_right" class="block">
	<p class="title_block">
        <a href="http://localhost:88/prestashop/prices-drop" title="Specials">
            Specials
        </a>
    </p>
	<div class="block_content products-block">
    		<ul>
        	<li class="clearfix">
            	<a class="products-block-image" href="http://localhost:88/prestashop/summer-dresses/7-printed-chiffon-dress.html">
                    <img 
                    class="replace-2x img-responsive" 
                    src="http://localhost:88/prestashop/20-small_default/printed-chiffon-dress.jpg" 
                    alt="" 
                    title="Printed Chiffon Dress" />
                </a>
                <div class="product-content">
                	<h5>
                        <a class="product-name" href="http://localhost:88/prestashop/summer-dresses/7-printed-chiffon-dress.html" title="Printed Chiffon Dress">
                            Printed Chiffon Dress
                        </a>
                    </h5>
                                        	<p class="product-description">
                            Printed chiffon knee length dress...
                        </p>
                                        <div class="price-box">
                    	                        	<span class="price special-price">
                                                                    ₹ 18.45                            </span>
                                                                                                                                 <span class="price-percent-reduction">-20%</span>
                                                                                         <span class="old-price">
                                                                    ₹ 23.06                            </span>
                            
                                            </div>
                </div>
            </li>
		</ul>
		<div>
			<a 
            class="btn btn-default button button-small" 
            href="http://localhost:88/prestashop/prices-drop" 
            title="All specials">
                <span>All specials<i class="icon-chevron-right right"></i></span>
            </a>
		</div>
    	</div>
</div>
<!-- /MODULE Block specials -->
<?php }} ?>
