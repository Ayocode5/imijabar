<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmailTemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('email_templates')->insert([
            [
                'id' => 1,
                'et_subject' => 'Contact Form - your website', 
                'et_content' => '<p>You have received a message from a visitor. Detailed information is here:</p><p>Visitor Name: [[visitor_name]]</p><p>Visitor Email: [[visitor_email]]</p><p>Visitor Phone: [[visitor_phone]]</p><p>Visitor Message:&nbsp;</p><p>[[visitor_message]]</p>', 
                'et_name' => 'Contact Page Message',
            ],
            [
                'id' => 2,
                'et_subject' => 'New Comment Posted', 
                'et_content' => '<p>You have received a new comment from a person. His detail is here:</p><p><strong>Person Name:</strong>&nbsp;[[person_name]]</p><p><strong>Person Email:&nbsp;</strong>[[person_email]]</p><p><strong>Person Message:</strong></p><p>[[person_message]]</p><p>Go to this link to see this comment<span style=\"font-weight: bolder;\">:&nbsp;</span><a href="[[comment_see_url]]" target=\"_blank\">See Comment</a></p>', 
                'et_name' => 'Comment Message to Admin',
            ],
            [
                'id' => 3,
                'et_subject' => 'Verify Subscription', 
                'et_content' => '<p>Dear Sir,</p><p>You have requested to be a subscriber in our website. Please click on the following link to confirm the subscription:</p><p><a href=[[verification_link]] target=\"_blank\">Verification Link</a></p><p>Thank you so much!<br>Marketing Team</p>', 
                'et_name' => 'Subscriber Message for Verification',
            ],
            [
                'id' => 4,
                'et_subject' => 'A News has been added', 
                'et_content' => '<p>Dear Subscriber,</p><p>A news has been published. To see the news, please go to the following link:</p><p><a href="[[post_link]]" target=\"_blank\">Click here to see the post</a></p><p>Thank you!</p>', 
                'et_name' => 'News Post Message to Active Subscribers',
            ],
            [
                'id' => 5,
                'et_subject' => 'Reset Password', 
                'et_content' => '<p>To reset your password, please click on the following link:</p><p><a href=[[reset_link]] target=\"_blank\">Reset Password</a><br></p>', 
                'et_name' => 'Reset Password Message to Admin',
            ],
            [
                'id' => 6,
                'et_subject' => 'Confirm Registration', 
                'et_content' => '<p>To activate your account and confirm the registration, please click on the verify link below:</p><p><a href=[[verification_link]] target=\"_blank\">Verification Link</a></p>', 
                'et_name' => 'Registration Email to Customer',
            ],
            [
                'id' => 7,
                'et_subject' => 'Reset Password', 
                'et_content' => '<p>To reset your password, please click on the following link:</p><p><a href=[[reset_link]] target=\"_blank\">Reset Password Link</a></p>', 
                'et_name' => 'Reset Password Message to Customer',
            ],
            [
                'id' => 8,
                'et_subject' => 'Order Completed', 
                'et_content' => '<p>Dear [[customer_name]],</p><p>Your order has been submitted successfully and we received the payment from you. After you process and ship the order, you will get all the products after a certain time period.&nbsp;</p><p><b>Payment Information:</b></p><p>Order Number: [[order_number]]</p><p>[[payment_method]]</p><p>Payment Date &amp; Time: [[payment_date_time]]</p><p>Transaction Id: [[transaction_id]]</p><p>Shipping Cost: [[shipping_cost]]</p><p>Coupon Code: [[coupon_code]]</p><p>Coupon Discount: [[coupon_discount]]</p><p>Paid Amount: [[paid_amount]]</p><p>Payment Status: [[payment_status]]</p><p>----------------------------------------</p><p><b>Your billing details:</b></p><p>Billing Name: [[billing_name]]</p><p>Billing Email: [[billing_email]]</p><p>Billing Phone: [[billing_phone]]</p><p>Billing Country: [[billing_country]]</p><p>Billing Address: [[billing_address]]</p><p>Billing State: [[billing_state]]</p><p>Billing City: [[billing_city]]</p><p>Billing Zip: [[billing_zip]]</p><p>----------------------------------------</p><p><b>Your shipping details:</b></p><p>Shipping Name: [[shipping_name]]</p><p>Shipping Email: [[shipping_email]]</p><p>Shipping Phone: [[shipping_phone]]</p><p>Shipping Country: [[shipping_country]]</p><p>Shipping Address: [[shipping_address]]</p><p>Shipping State: [[shipping_state]]</p><p>Shipping City: [[shipping_city]]</p><p>Shipping Zip: [[shipping_zip]]</p><p>----------------------------------------</p><p><b>Products You Purchased:&nbsp;</b></p><p>[[product_detail]]</p><p>Thank you! The ABC Team</p>', 
                'et_name' => 'Order Completed Email to Customer',
            ],

        ]);
    }
}
