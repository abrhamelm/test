<?php
/**
 * Admin Overview Report
 */
 
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

global $WCMp;

?>
<div id="poststuff" class="woocommerce-reports-wide">
    <div class="postbox">
        <h3 class="stats_range">
            <ul>
                <?php
                    foreach ( $ranges as $range => $name ) {
                        echo '<li class="' . ( $current_range == $range ? 'active' : '' ) . '"><a href="' . esc_url( remove_query_arg( array( 'start_date', 'end_date' ), add_query_arg( 'range', $range ) ) ) . '">' . $name . '</a></li>';
                    }
                ?>
                <li class="custom <?php echo $current_range == 'custom' ? 'active' : ''; ?>">
                    <?php _e( 'Custom', 'dc-woocommerce-multi-vendor' ); ?>
                    <form method="GET">
                        <div>
                            <?php
                                // Maintain query string
                                foreach ( $_GET as $key => $value ) {
                                    if ( is_array( $value ) ) {
                                        foreach ( $value as $v ) {
                                            echo '<input type="hidden" name="' . esc_attr( sanitize_text_field( $key ) ) . '[]" value="' . esc_attr( sanitize_text_field( $v ) ) . '" />';
                                        }
                                    } else {
                                        echo '<input type="hidden" name="' . esc_attr( sanitize_text_field( $key ) ) . '" value="' . esc_attr( sanitize_text_field( $value ) ) . '" />';
                                    }
                                }
                            ?>
                            <input type="hidden" name="range" value="custom" />
                            <input type="text" size="9" placeholder="yyyy-mm-dd" value="<?php if ( ! empty( $_GET['start_date'] ) ) echo esc_attr( $_GET['start_date'] ); ?>" name="start_date" class="range_datepicker from" id="from_product" />
                            <input type="text" size="9" placeholder="yyyy-mm-dd" value="<?php if ( ! empty( $_GET['end_date'] ) ) echo esc_attr( $_GET['end_date'] ); ?>" name="end_date" class="range_datepicker to" id="to_product" />
                            <input type="submit" class="button" value="<?php esc_attr_e( 'Go', 'dc-woocommerce-multi-vendor' ); ?>" />
                        </div>
                    </form>
                </li>
            </ul>
        </h3>
    </div>
    <div class="postbox sort_chart box_data">
        <div class="wcmp_product_admin_overview">
            <div class="col-md-12">
    
                <div class="panel panel-default panel-pading">
                    <form name="wcmp_vendor_dashboard_stat_report" method="POST" class="stat-date-range form-inline">
                        <div class="wcmp_form1 ">
                            <div class="panel-body">
                                <div class="wcmp_ass_holder_box">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="wcmp_displaybox2 text-center">
                                                <h4><a href="#"><?php _e('Net Sales', 'dc-woocommerce-multi-vendor'); ?></a></h4>
                                                <h3><?php echo wc_price($sales); ?></h3>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="wcmp_displaybox2 text-center">
                                                <h4><a href ="<?php echo admin_url('edit.php?post_type=dc_commission'); ?>"><?php _e('My Earnings', 'dc-woocommerce-multi-vendor'); ?></a></h4>
                                                <h3><?php echo wc_price($admin_earning); ?></h3>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="wcmp_displaybox2 text-center">
                                                <h4><a href ="<?php echo admin_url('admin.php?page=vendors'); ?>"><?php _e('Signup Vendors', 'dc-woocommerce-multi-vendor'); ?></a></h4>
                                                <h3><?php echo $vendors; ?></h3>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="wcmp_displaybox2 text-center">
                                                <h4><a href ="<?php echo admin_url('admin.php?page=wcmp-to-do'); ?>"><?php _e('Pending Vendors', 'dc-woocommerce-multi-vendor'); ?></a></h4>
                                                <h3><?php echo $pending_vendors; ?></h3>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="wcmp_displaybox2 text-center">
                                                <h4><a href ="<?php echo admin_url('admin.php?page=wcmp-to-do'); ?>"><?php _e('Awaiting Products', 'dc-woocommerce-multi-vendor'); ?></a></h4>
                                                <h3><?php echo $products; ?></h3>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="wcmp_displaybox2 text-center">
                                                <h4><a href ="<?php echo admin_url('admin.php?page=wcmp-to-do'); ?>"><?php _e('Awaiting Withdrawals', 'dc-woocommerce-multi-vendor'); ?></a></h4>
                                                <h3><?php echo wc_price($transactions); ?></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
