<?php
/**
 * Created by PhpStorm.
 * User: dan
 * Date: 20/04/2018
 * Time: 11:23
 */ ?>

<!--<h2>--><?php //esc_attr_e( '2 Columns Layout: static (px)', 'WpAdminStyle' ); ?><!--</h2>-->

<div class="wrap">

    <div id="icon-options-general" class="icon32"></div>
    <!--    <h1>--><?php //esc_attr_e( 'ICAAL Contact Form V2 Settings', 'WpAdminStyle' ); ?><!--</h1>-->

    <div id="poststuff">

        <div id="post-body" class="metabox-holder columns-2">

            <!-- main content -->
            <div id="post-body-content">

                <div class="meta-box-sortables ui-sortable">

                    <div class="postbox">

                        <div class="handlediv" title="Click to toggle"><br></div>
                        <!-- Toggle -->

                        <h2 class="hndle">
                            <span><?php esc_attr_e( 'ICAAL Contact Form Settings', 'WpAdminStyle' ); ?></span>
                        </h2>

                        <div class="inside">

                            <form name="icaal_contact_settings_form" method="post" action="">

                                <input type="hidden" name="icaal_contact_form_hidden" value="Y"/>

                                <table class="widefat">

                                    <tr>
                                        <td class="row-title"><label
                                                    for="icaal_contact_api_key_1"><?php esc_attr_e(
													'API Key 1', 'WpAdminStyle'
												); ?></label>
                                        <td>

                                        <td>
                                            <input type="text"
                                                   value="<?php echo( isset($api_key_name_1) ? $api_key_name_1 : '' ); ?>"
                                                   name="icaal_contact_api_key_name_1"
                                                   id="icaal_contact_api_key_name_1"
                                                   class="regular-text" placeholder="API Name"/>
                                            <input type="text"
                                                   value="<?php echo( isset($api_key_1) ? $api_key_1 : '' ); ?>"
                                                   name="icaal_contact_api_key_1"
                                                   id="icaal_contact_api_key_1"
                                                   class="regular-text" placeholder="API Key"/>
                                        </td>
                                    </tr>

                                    <tr class="alternate">
                                        <td class="row-title"><label
                                                    for="icaal_contact_api_key_2"><?php esc_attr_e(
													'API Key 2', 'WpAdminStyle'
												); ?></label>
                                        <td>

                                        <td>
                                            <input type="text"
                                                   value="<?php echo( isset($api_key_name_2) ? $api_key_name_2 : '' ); ?>"
                                                   name="icaal_contact_api_key_name_2"
                                                   id="icaal_contact_api_key_name_2"
                                                   class="regular-text" placeholder="API Name"/>
                                            <input type="text"
                                                   value="<?php echo( isset($api_key_2) ? $api_key_2 : '' ); ?>"
                                                   name="icaal_contact_api_key_2"
                                                   id="icaal_contact_api_key_2"
                                                   class="regular-text" placeholder="API Key"/>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="row-title"><label
                                                    for="icaal_contact_api_key_3"><?php esc_attr_e(
													'API Key 3', 'WpAdminStyle'
												); ?></label>
                                        <td>

                                        <td>
                                            <input type="text"
                                                   value="<?php echo( isset($api_key_name_3) ? $api_key_name_3 : '' ); ?>"
                                                   name="icaal_contact_api_key_name_3"
                                                   id="icaal_contact_api_key_name_3"
                                                   class="regular-text" placeholder="API Name"/>
                                            <input type="text"
                                                   value="<?php echo( isset($api_key_3) ? $api_key_3 : '' ); ?>"
                                                   name="icaal_contact_api_key_3"
                                                   id="icaal_contact_api_key_3"
                                                   class="regular-text" placeholder="API Key"/>
                                        </td>
                                    </tr>

                                    <tr class="alternate">
                                        <td class="row-title"><label
                                                    for="icaal_contact_api_key_4"><?php esc_attr_e(
													'API Key 4', 'WpAdminStyle'
												); ?></label>
                                        <td>

                                        <td>
                                            <input type="text"
                                                   value="<?php echo( isset($api_key_name_4) ? $api_key_name_4 : '' ); ?>"
                                                   name="icaal_contact_api_key_name_4"
                                                   id="icaal_contact_api_key_name_4"
                                                   class="regular-text" placeholder="API Name"/>
                                            <input type="text"
                                                   value="<?php echo( isset($api_key_4) ? $api_key_4 : '' ); ?>"
                                                   name="icaal_contact_api_key_4"
                                                   id="icaal_contact_api_key_4"
                                                   class="regular-text" placeholder="API Key"/>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="row-title"><label
                                                    for="icaal_contact_api_key_5"><?php esc_attr_e(
													'API Key 5', 'WpAdminStyle'
												); ?></label>
                                        <td>

                                        <td>
                                            <input type="text"
                                                   value="<?php echo( isset($api_key_name_5) ? $api_key_name_5 : '' ); ?>"
                                                   name="icaal_contact_api_key_name_5"
                                                   id="icaal_contact_api_key_name_5"
                                                   class="regular-text" placeholder="API Name"/>
                                            <input type="text"
                                                   value="<?php echo( isset($api_key_5) ? $api_key_5 : '' ); ?>"
                                                   name="icaal_contact_api_key_5"
                                                   id="icaal_contact_api_key_5"
                                                   class="regular-text" placeholder="API Key"/>
                                        </td>
                                    </tr>

                                    <tr class="alternate">
                                        <td class="row-title"><label
                                                    for="icaal_contact_api_key_6"><?php esc_attr_e(
													'API Key 6', 'WpAdminStyle'
												); ?></label>
                                        <td>

                                        <td>
                                            <input type="text"
                                                   value="<?php echo( isset($api_key_name_6) ? $api_key_name_6 : '' ); ?>"
                                                   name="icaal_contact_api_key_name_6"
                                                   id="icaal_contact_api_key_name_6"
                                                   class="regular-text" placeholder="API Name"/>
                                            <input type="text"
                                                   value="<?php echo( isset($api_key_6) ? $api_key_6 : '' ); ?>"
                                                   name="icaal_contact_api_key_6"
                                                   id="icaal_contact_api_key_6"
                                                   class="regular-text" placeholder="API Key"/>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="row-title"><label
                                                    for="icaal_contact_api_key_7"><?php esc_attr_e(
													'API Key 7', 'WpAdminStyle'
												); ?></label>
                                        <td>

                                        <td>
                                            <input type="text"
                                                   value="<?php echo( isset($api_key_name_7) ? $api_key_name_7 : '' ); ?>"
                                                   name="icaal_contact_api_key_name_7"
                                                   id="icaal_contact_api_key_name_7"
                                                   class="regular-text" placeholder="API Name"/>
                                            <input type="text"
                                                   value="<?php echo( isset($api_key_7) ? $api_key_7 : '' ); ?>"
                                                   name="icaal_contact_api_key_7"
                                                   id="icaal_contact_api_key_7"
                                                   class="regular-text" placeholder="API Key"/>
                                        </td>
                                    </tr>

                                    <tr class="alternate">
                                        <td class="row-title"><label
                                                    for="icaal_contact_api_key_8"><?php esc_attr_e(
													'API Key 8', 'WpAdminStyle'
												); ?></label>
                                        <td>

                                        <td>
                                            <input type="text"
                                                   value="<?php echo( isset($api_key_name_8) ? $api_key_name_8 : '' ); ?>"
                                                   name="icaal_contact_api_key_name_8"
                                                   id="icaal_contact_api_key_name_8"
                                                   class="regular-text" placeholder="API Name"/>
                                            <input type="text"
                                                   value="<?php echo( isset($api_key_8) ? $api_key_8 : '' ); ?>"
                                                   name="icaal_contact_api_key_8"
                                                   id="icaal_contact_api_key_8"
                                                   class="regular-text" placeholder="API Key"/>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="row-title"><label
                                                    for="icaal_contact_api_key_9"><?php esc_attr_e(
													'API Key 9', 'WpAdminStyle'
												); ?></label>
                                        <td>

                                        <td>
                                            <input type="text"
                                                   value="<?php echo( isset($api_key_name_9) ? $api_key_name_9 : '' ); ?>"
                                                   name="icaal_contact_api_key_name_9"
                                                   id="icaal_contact_api_key_name_9"
                                                   class="regular-text" placeholder="API Name"/>
                                            <input type="text"
                                                   value="<?php echo( isset($api_key_9) ? $api_key_9 : '' ); ?>"
                                                   name="icaal_contact_api_key_9"
                                                   id="icaal_contact_api_key_9"
                                                   class="regular-text" placeholder="API Key"/>
                                        </td>
                                    </tr>

                                    <tr class="alternate">
                                        <td class="row-title"><label
                                                    for="icaal_contact_api_key_10"><?php esc_attr_e(
													'API Key 10', 'WpAdminStyle'
												); ?></label>
                                        <td>

                                        <td>
                                            <input type="text"
                                                   value="<?php echo( isset($api_key_name_10) ? $api_key_name_10 : '' ); ?>"
                                                   name="icaal_contact_api_key_name_10"
                                                   id="icaal_contact_api_key_name_10"
                                                   class="regular-text" placeholder="API Name"/>
                                            <input type="text"
                                                   value="<?php echo( isset($api_key_10) ? $api_key_10 : '' ); ?>"
                                                   name="icaal_contact_api_key_10"
                                                   id="icaal_contact_api_key_10"
                                                   class="regular-text" placeholder="API Key"/>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="row-title"><label
                                                    for="icaal_contact_form_custom_html"><?php esc_attr_e(
					                                'Custom Appendable Response Message HTML', 'WpAdminStyle'
				                                ); ?></label>
                                        <td>

                                        <td>
                                            <textarea id="icaal_contact_form_custom_html"
                                                      name="icaal_contact_form_custom_html" cols="80" rows="10"
                                                      class="large-text"><?php echo( isset($custom_html) ? str_replace( '\\', '', $custom_html ) : '' ); ?></textarea>
                                        </td>
                                    </tr>

                                </table>

                                <input class="button-primary mt-1" type="submit" name="icaal_contact_settings_submit"
                                       value="<?php esc_attr_e( 'Submit' ); ?>"/>

                            </form>

                        </div>
                        <!-- .inside -->

                    </div>
                    <!-- .postbox -->

                </div>
                <!-- .meta-box-sortables .ui-sortable -->

            </div>
            <!-- post-body-content -->

        </div>
        <!-- #post-body .metabox-holder .columns-2 -->

        <br class="clear">
    </div>
    <!-- #poststuff -->

</div> <!-- .wrap -->
