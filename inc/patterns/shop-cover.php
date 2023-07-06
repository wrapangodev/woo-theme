<?php

$img_dir = COZYNEST_URI . 'assets/img';

return array(
	'name'          => 'shop-cover',
	'title'         => 'Shop Cover',
	'content'       => '<!-- wp:cover {"overlayColor":"lite","minHeight":450,"isDark":false} -->
	<div class="wp-block-cover is-light" style="min-height:450px"><span aria-hidden="true" class="wp-block-cover__background has-lite-background-color has-background-dim-100 has-background-dim"></span>
		<div class="wp-block-cover__inner-container">
			<!-- wp:group {"style":{"spacing":{"blockGap":"40px","padding":{"top":"40px","bottom":"40px"}}},"layout":{"inherit":true}} -->
			<div class="wp-block-group" style="padding-top:40px;padding-bottom:40px">
				<!-- wp:columns {"style":{"spacing":{"blockGap":"24px"}}} -->
				<div class="wp-block-columns">
					<!-- wp:column {"verticalAlignment":"center","width":"35%","style":{"spacing":{"blockGap":"25px"}}} -->
					<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:35%">
						<!-- wp:heading {"level":1} -->
						<h1>The Shop</h1>
						<!-- /wp:heading -->

						<!-- wp:paragraph {"style":{"typography":{"fontSize":"1rem"}}} -->
						<p style="font-size:1rem">Suspendisse ornare nibh non felis dapibus, quis fringilla nisi auctor.
							Nullam sit amet congue nibh. Maecenas.</p>
						<!-- /wp:paragraph -->

						<!-- wp:spacer {"height":"25px"} -->
						<div style="height:25px" aria-hidden="true" class="wp-block-spacer"></div>
						<!-- /wp:spacer -->

						<!-- wp:group {"style":{"spacing":{"blockGap":"15px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
						<div class="wp-block-group">
							<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600","letterSpacing":"0.08em"}},"fontSize":"small"} -->
							<p class="has-small-font-size"
								style="font-style:normal;font-weight:600;text-transform:uppercase;letter-spacing:0.08em"><a
									href="#">Dresses</a></p>
							<!-- /wp:paragraph -->

							<!-- wp:paragraph -->
							<p>.</p>
							<!-- /wp:paragraph -->

							<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600","letterSpacing":"0.08em"}},"fontSize":"small"} -->
							<p class="has-small-font-size"
								style="font-style:normal;font-weight:600;text-transform:uppercase;letter-spacing:0.08em"><a
									href="#">Sleeveless</a></p>
							<!-- /wp:paragraph -->

							<!-- wp:paragraph -->
							<p>.</p>
							<!-- /wp:paragraph -->

							<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600","letterSpacing":"0.08em"}},"fontSize":"small"} -->
							<p class="has-small-font-size"
								style="font-style:normal;font-weight:600;text-transform:uppercase;letter-spacing:0.08em"><a
									href="#">Suspenders</a></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:column -->

					<!-- wp:column {"width":"15%"} -->
					<div class="wp-block-column" style="flex-basis:15%"></div>
					<!-- /wp:column -->

					<!-- wp:column {"width":"50%"} -->
					<div class="wp-block-column" style="flex-basis:50%">
						<!-- wp:image {"id":294,"width":648,"height":486,"sizeSlug":"full","linkDestination":"none"} -->
						<figure class="wp-block-image size-full is-resized"><img src="' . esc_url( $img_dir ) . 'cover-bannershop.jpg" alt="" class="wp-image-294" width="648" height="486" /></figure>
						<!-- /wp:image -->
					</div>
					<!-- /wp:column -->
				</div>
				<!-- /wp:columns -->
			</div>
			<!-- /wp:group -->
		</div>
	</div>
	<!-- /wp:cover -->',
	'categories'    => array( 'featured' ),
	'viewportWidth' => 1680,
);
