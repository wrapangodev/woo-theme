<?php

return array(
	'name' => 'four-columns-products',
	'title' => 'Four Columns Products',
	'content' => '<!-- wp:spacer {"height":"8vh"} -->
<div style="height:8vh" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"layout":{"inherit":true}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":3} -->
<h3 class="has-text-align-center">Bestselling products</h3>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"25px"} -->
<div style="height:25px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:woocommerce/product-best-sellers {"columns":4,"rows":1} /--></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"8vh"} -->
<div style="height:8vh" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->',
'categories'    => array( 'featured', 'query' ),
'viewportWidth' => 1680
);
