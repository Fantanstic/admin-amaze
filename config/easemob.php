<?php

return [
    'EASEMOB_DOMAIN' => env('easemob_domain', 'https://a1.easemob.com'),          //域名
    'ORG_NAME'       => env('easemob_org_name', '1115161121178446'),        //公司名称
    'APP_NAME'       => env('easemob_app_name', 'iamnaughty'),        //应用名称
    'CLIENT_ID'       => env('easemob_client_id', 'YXA6Uzt7QK-0Eea-4RmFbpCscQ'),
    'CLIENT_SECRET'   => env('easemob_client_secret', 'YXA6U7SkYXM8VFTS0B_6-Ft5CVFTJPw'),
    'TOKEN_PATH'     => env('token_path','easemob.token'),               //token储存的位置，默认不用修改
];
