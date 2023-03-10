    <?php echo Modules::run(get_theme()."/header"); ?>
    
    <section class="banner"  id="home">
      <div class="container">
        <div class="animatation-box-1">
          <img class="animated icon1" src="<?php echo BASE; ?>themes/pergo/assets/images/icon_red_circle.png">
          <img class="animated icon2" src="<?php echo BASE; ?>themes/pergo/assets/images/icon_yellow_tri.png">
          <img class="animated icon3" src="<?php echo BASE; ?>themes/pergo/assets/images/icon_yellow_circle.png">
        </div>
        <div class="row">
          <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
            <div class="contents">
              <h2 class="head-title">
                <?php echo lang("get_your_social_accounts_followers_and_likes_at_one_place_instantly"); ?>
              </h2>
              <p>
                <?php echo lang("save_time_managing_your_social_account_in_one_place_our_service_help_you_build_your_business_get_your_social_media_content_around_the_world_and_become_famous_it_offers_you_all_the_services_you_will_need_for_youtube_facebook_twitter__instagram"); ?>
              </p>

              <?php
                if (isset($first_category_url)) {
              ?>
              <div class="head-button m-t-40">
                <a href="<?php echo cn($first_category_url); ?>" class="btn btn-pill btn-outline-primary sign-up btn-lg"><?php echo lang("compare_plans"); ?></a>
              </div>
              <?php } ?>

            </div>
          </div>          
          <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12 box-image">
            <div class="animation-2">
              <img class="intro-img" src="<?php echo BASE; ?>themes/pergo/assets/images/header_top.png" alt="header-phone">
              <img class="animated icon-1" src="<?php echo BASE; ?>themes/pergo/assets/images/icon_emoji_smile.png" alt="Emoji Smile">
              <img class="animated icon-2" src="<?php echo BASE; ?>themes/pergo/assets/images/icon_white_like.png" alt="Like icon">
              <img class="animated icon-3" src="<?php echo BASE; ?>themes/pergo/assets/images/icon_red_heart.png" alt="Red Heart Fill">
              <img class="animated icon-4" src="<?php echo BASE; ?>themes/pergo/assets/images/purple-like.png" alt="Like Icon">
              <img class="animated icon-5" src="<?php echo BASE; ?>themes/pergo/assets/images/icon_instagram.png" alt="Instagram icon">
              <img class="animated icon-6" src="<?php echo BASE; ?>themes/pergo/assets/images/icon_facebook_circle.png" alt="Facebook Icon">
              <img class="animated icon-7" src="<?php echo BASE; ?>themes/pergo/assets/images/icon_twitter.png" alt="Twitter">
              <img class="animated icon-10" src="<?php echo BASE; ?>themes/pergo/assets/images/icon_white_heart.png" alt="White Heart Unfill">

            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section class="core-services">
    </section>

    <section class="about-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12" data-aos="fade-left" data-aos-easing="ease-in" data-aos-delay="200">
            <div class="intro-img">
              <img class="img-fluid" src="<?php echo BASE; ?>themes/pergo/assets/images/best_service.png" alt="Best Service">
            </div>
          </div>

          <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12" data-aos="fade-right" data-aos-easing="ease-in" data-aos-delay="200">
            <div class="contents">
              <h2 class="head-title">
                <?php echo lang("why_our_services_is_the_best"); ?>
              </h2>
              <p>
                <?php echo lang("why_our_services_is_the_best_desc"); ?>
              </p> 
            </div>
          </div>          
        </div>
      </div>
    </section>

    <section class="our-services text-center" id="features">
      <div class="container">
        <div class="row" >
          <div class="col-md-12 mx-auto" data-aos="fade-down" data-aos-easing="ease-in" data-aos-delay="200">
            <div class="contents">
              <div class="head-title">
                <?php echo lang("services_we_offer"); ?>
              </div>
              <div class="border-line">
              </div>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-right" data-aos-easing="ease-in" data-aos-delay="400">
            <div class="feature-item">
              <div class="animation-box">
                <i class="fe fe-clock icon"></i>
              </div>
              <h3><?php echo lang("fast_delivery"); ?></h3>
              <p class="text-muted"><?php echo lang("youll_see_results_immediately_likes_will_be_dropping_in_as_soon_as_you_place_an_order"); ?>
              </p>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-right" data-aos-easing="ease-in" data-aos-delay="600">
            <div class="feature-item">
              <div class="animation-box">
                <i class="fe fe-phone-call icon"></i>
              </div>
              <h3><?php echo lang("247_support"); ?></h3>
              <p class="text-muted"><?php echo lang("technical_support_for_all_our_services_247_to_help_you_if_you_have_some_query_drop_an_email_to_our_support_team_we_are_delighted_to_assist_you"); ?></p>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-right" data-aos-easing="ease-in" data-aos-delay="800">
            <div class="feature-item">
              <div class="animation-box">
                <i class="fe fe-star icon"></i>
              </div>
              
              <h3><?php echo lang("high_quality_services"); ?></h3>
              <p class="text-muted"><?php echo lang("get_the_best_high_quality_services_and_in_less_time_here_satisfaction_of_our_customers_is_most_important_to_us_gain_desired_outputs_by_choosing_our_services_available_at_an_affordable_prices"); ?></p>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-right" data-aos-easing="ease-in" data-aos-delay="1000">
            <div class="feature-item">
              <div class="animation-box">
                <i class="fe fe-save icon"></i>
              </div>
              <h3><?php echo lang("privacy__safety"); ?></h3>
              <p class="text-muted"><?php echo lang("we_never_ask_your_password_or_any_private_information_we_recommend_you_to_protect_your_password_and_dont_give_it_to_anybody_for_your_safety"); ?></p>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-right" data-aos-easing="ease-in" data-aos-delay="1200">
            <div class="feature-item">
              <div class="animation-box">
                <i class="fe fe-pocket icon"></i>
              </div>
              <h3><?php echo lang("our_guarantee"); ?></h3>
              <p class="text-muted"><?php echo lang("satisfaction_is_our_number_one_priority_if_you_are_not_happy_you_will_receive_a_100_money_back_this_is_why_we_stand_high_and_remain_the_best_place_to_buy_all_our_serivces"); ?></p>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-right" data-aos-easing="ease-in" data-aos-delay="1400">
            <div class="feature-item">
              <div class="animation-box">
                <i class="fe fe-credit-card icon"></i>
              </div>
              <h3><?php echo lang("secure_payments"); ?></h3>
              <p class="text-muted"><?php echo lang("we_have_a_popular_methods_as_paypal_and_many_more_can_be_enabled_upon_request"); ?></p>
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

    <section class="reviews text-center">
      <div class="container">
        <div class="row " data-aos="fade-down" data-aos-easing="ease-in" data-aos-delay="200">
          <div class="col-md-12 mx-auto">
            <div class="contents">
              <div class="head-title">
                <?php echo lang("what_people_say_about_us"); ?>
              </div>
              <span class="text-muted"><?php echo lang("our_service_has_an_extensive_customer_roster_built_on_years_worth_of_trust_read_what_our_buyers_think_about_our_range_of_service"); ?></span>
              <div class="border-line">
                <hr>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card item">
              <div class="person-info">
                <h3 class="name"><?php echo lang("client_one"); ?></h3>
                <span class="text-muted"><?php echo lang("client_one_jobname"); ?></span>
              </div>
              <div class="card-body">
                <p class="desc">
                  <?php echo lang('client_one_comment'); ?>
                </p>
                <div class="star-icon">
                  <span><i class="fa fa-star"></i></span>
                  <span><i class="fa fa-star"></i></span>
                  <span><i class="fa fa-star"></i></span>
                  <span><i class="fa fa-star"></i></span>
                  <span><i class="fa fa-star"></i></span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card item">
              <div class="person-info">
                <h3 class="name"><?php echo lang('client_two'); ?></h3>
                <span class="text-muted"><?php echo lang('client_two_jobname'); ?></span>
              </div>
              <div class="card-body">
                <p class="desc">
                  <?php echo lang('client_two_comment'); ?>
                </p>
                <div class="star-icon">
                  <span><i class="fa fa-star"></i></span>
                  <span><i class="fa fa-star"></i></span>
                  <span><i class="fa fa-star"></i></span>
                  <span><i class="fa fa-star"></i></span>
                  <span><i class="fa fa-star"></i></span>
                </div>
              </div>
            </div>
          </div>          
          <div class="col-md-4">
            <div class="card item">
              <div class="person-info">
                <h3 class="name"><?php echo lang('client_three'); ?></h3>
                <span class="text-muted"><?php echo lang('client_three_jobname'); ?></span>
              </div>
              <div class="card-body">
                <p class="desc">
                  <?php echo lang('client_three_comment'); ?>
                  
                </p>
                <div class="star-icon">
                  <span><i class="fa fa-star"></i></span>
                  <span><i class="fa fa-star"></i></span>
                  <span><i class="fa fa-star"></i></span>
                  <span><i class="fa fa-star"></i></span>
                  <span><i class="fa fa-star"></i></span>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <div class="modal-infor">
      <div class="modal" id="notification">
        <div class="modal-dialog">
          <div class="modal-content">

            <div class="modal-header">
              <h4 class="modal-title"><i class="fe fe-bell"></i> <?php echo lang("Notification"); ?></h4>
              <button type="button" class="close" data-dismiss="modal"></button>
            </div>

            <div class="modal-body">
              <?php echo html_entity_decode(get_option('notification_popup_content'), ENT_QUOTES); ?>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal"><?php echo lang("Close"); ?></button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php echo Modules::run(get_theme()."/footer"); ?>