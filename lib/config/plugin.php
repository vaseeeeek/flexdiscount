<?php

/*
 * @author Gaponov Igor <gapon2401@gmail.com>
 */
return array(
    'name' => /*_wp*/('Flexdiscount'),
    'description' => /*_wp*/('All types of discounts. Discount constructor'),
    'img' => 'img/flexdiscount.png',
    'vendor' => '969712',
    'version' => '4.42.0',
    'frontend' => true,
    'handlers' => [
        'backend_menu' => 'backendMenu',
        'backend_settings_discounts' => 'backendSettingsDiscounts',
        'backend_product_sku_settings' => 'backendProductSkuSettings',
        'backend_product_edit' => 'backendProductEdit',
        'backend_order' => 'backendOrder',
        'backend_orders' => 'backendOrders',
        'backend_order_edit' => 'backendOrderEdit',
        'checkout_after_shipping' => 'checkoutAfterShipping',
        'checkout_after_payment' => 'checkoutAfterPayment',
        'checkout_render_details' => 'checkoutRenderDetails',
        'checkout_before_shipping' => 'checkoutBeforeShipping',
        'checkout_before_confirm' => 'checkoutBeforeConfirm',
        'checkout_prepared_confirm' => 'checkoutPreparedConfirm',
        'checkout_render_payment' => 'checkoutRenderPayment',
        'checkout_render_shipping' => 'checkoutRenderShipping',
        'frontend_cart' => 'frontendCart',
        'frontend_checkout' => 'frontendCheckout',
        'frontend_head' => 'frontendHead',
        'frontend_footer' => 'frontendFooter',
        'frontend_product' => 'frontendProduct',
        'frontend_products' => 'frontendProducts',
        'frontend_my_nav' => 'frontendMyNav',
        'frontend_order_cart_vars' => 'frontendOrderCartVars',
        'order_calculate_discount' => 'orderCalculateDiscount',
        'order_action.create' => 'orderActionCreate',
        'order_action.pay' => 'orderActionApplyAffiliate',
        'order_action.complete' => 'orderActionApplyAffiliate',
        'order_action.restore' => 'orderActionApplyAffiliate',
        'order_action.delete' => 'orderActionCancelAffiliate',
        'order_action.refund' => 'orderActionCancelAffiliate',
        'order_action.edit' => 'orderActionEdit',
        'product_presave' => 'productPreSave',
        'routing' => 'routing',
        'rights.config' => 'rightsConfig',
        'promo_rule_types' => 'promoRuleTypes',
        'backend_marketing_sidebar' => 'backendMarketingSidebar',
        'promo_rule_editor' => 'promoRuleEditor',
        'backend_marketing_promo' => 'backendMarketingPromo',
        'promo_rule_validate' => 'promoRuleValidate',
        'promo_workflow_run' => 'promoWorkflowRun'
    ]
);
