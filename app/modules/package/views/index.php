    <!-- get Header top menu -->
    <?php
      $data_link = (object)array(
        'link'  => cn(strip_tags($category->url_slug)),
        'name'  => strip_tags($category->name)
      );
    ?>
    <?php echo Modules::run("blocks/user_header_top", $data_link); ?>    
    

    <section class="package-content text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="pk-header">
              <?php
                $replace_text = '<strong>'.strip_tags($category->name).'</strong>';
              ?>
              <div class="title">
                <h1 class="title-name"><?php echo sprintf(lang('Buy_X_package'), $replace_text);?></h1>
              </div>
              <span class="text-muted"><?php echo lang('select_a_package_that_you_like_and_submit_order_now_button'); ?></span>
            </div>

            <div class="owl-carousel pk-lists">
              <?php
                $setting_number  = get_setting_number_format();
                $currency_symbol = get_option('currency_symbol', '$');
                if (!empty($services)) {
                  foreach ($services as $key => $row) {
              ?>
              <form action="<?php echo cn('checkout'); ?>" method="POST">
              <div class="item">
                <div class="card">
                  <div class="text-center">
                    <div class="name">
                      <div class="number"><?php echo strip_tags($row->quantity); ?></div>
                      <span><?php echo strip_tags($row->name); ?></span>
                    </div>
                    <div class="price">
                      <sub class="symbol"><?php echo strip_tags($currency_symbol); ?></sub>
                      <span class="big"><?php echo currency_format($row->price, $setting_number->decimal_places, $setting_number->decimal_separator, $setting_number->thousand_separator); ?></span>
                    </div>
                    <ul class="features list-unstyled leading-loose">
                      <li><i class="fe fe-star text-icon" aria-hidden="true"></i> <?php echo lang('high_quality');?></li>
                      <li><i class="fe fe-unlock text-icon" aria-hidden="true"></i> <?php echo lang('no_password_needed');?></li>
                      <li><i class="fe fe-thumbs-up text-icon" aria-hidden="true"></i> <?php echo lang('drop_protection');?></li>
                      <li><i class="fe fe-shield text-icon" aria-hidden="true"></i> <?php echo lang('safe_and_easy');?></li>
                      <li><i class="fe fe-pie-chart text-icon" aria-hidden="true"></i> <?php echo lang('instant_delivery_guaranteed');?></li>
                      <li><i class="fe fe-message-circle text-icon" aria-hidden="true"></i> <?php echo lang('2_47_support');?></li>
                      <li class="text-success"><i class="fe fe-check " aria-hidden="true"></i> <?php echo lang('secure_payments');?></li>
                    </ul>
                    <div class="text-center order_button">
                      <div class="">
                        <input type="hidden" name="<?php echo strip_tags($this->security->get_csrf_token_name());?>" value="<?php echo strip_tags($this->security->get_csrf_hash());?>">
                        <input type="hidden" name="item_id" value="<?php echo strip_tags($row->id); ?>">
                        <span class="btn btn-dark"><i class="fe fe-shopping-cart"></i></span>
                        <?php 
                          if ($row->status) {
                        ?> 
                        <button class="btn btn-color" type="submit">
                          <?php echo lang('order_now'); ?>
                        </button>
                        <?php }else{ ?>
                         <span class="btn btn-disabled">
                          <?php echo lang('Disabled'); ?>
                        </span> 
                        <?php }?>
                      </div>
                    </div>
                  </div>
                </div>
              </div> 
              </form>
              <?php }}?>

            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="how-it-works text-center">
      <div class="container">
        <div class="row " data-aos="fade-down" data-aos-easing="ease-in" data-aos-delay="200">
          <div class="col-md-12 mx-auto">
            <div class="header-top">
              <div class="title">
                <?php echo lang("how_to_buy_a_package"); ?>
              </div>
              <span class=""><?php echo lang("buying_social_media_packages_from_our_servies_is_simple_and_fast_just_follow_these_steps"); ?> </span>
            </div>
            <div class="col-md-12">
              <div class="row step-lists">

                <div class="col-sm-6 col-lg-4 step text-left">
                  <div class="header-name">
                    <h3><?php echo lang("choose_package"); ?></h3>
                    <p class="desc"><?php echo lang("its_easy_to_get_started_with_us_choose_from_our_wide_range_of_packages_that_cater_your_requirements"); ?></p>
                  </div>
                  <div class="bg-number">1</div>
                </div>

                <div class="col-sm-6 col-lg-4 step text-left">
                  <div class="header-name">
                    <h3><?php echo lang("enter_details"); ?></h3>
                    <p class="desc"><?php echo lang("provide_us_details_about_what_you_need_to_boost_now_we_dont_require_your_password"); ?></p>
                  </div>
                  <div class="bg-number">2</div>
                </div>

                <div class="col-sm-6 col-lg-4 step text-left">
                  <div class="header-name">
                    <h3><?php echo lang("wait_for_results"); ?></h3>
                    <p class="desc"><?php echo lang("you_can_pay_via_card_or_any_other_available_method_we_will_create_and_proceed_with_an_order_and_inform_you_once_done"); ?></p>
                  </div>
                  <div class="bg-number">3</div>
                </div>

              </div>
            </div>
          </div>
          
        </div>
      </div>
    </section>

    <script type="text/javascript">
      $(document).ready(function(){
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                    nav:true
                },
                600:{
                    items:1,
                    nav:false
                },
                1000:{
                    items:4,
                    nav:true,
                    loop:false
                }
            }
        })
      });
    </script>
