<?php

return [

    /*
     * The view id of which you want to display data.
     */
    'view_id' => env('ANALYTICS_VIEW_ID'),

    /*
     * Path to the client secret json file. Take a look at the README of this package
     * to learn how to get this file. You can also pass the credentials as an array
     * instead of a file path.
     */
    // 'service_account_credentials_json' => storage_path('app/analytics/service-account-credentials.json'),
    'service_account_credentials_json' => [
        'type' => 'service_account',
        'project_id' => 'syntax-solution-352307',
        'private_key_id' => '07ef308e9631b9977197117db69a90b406254212', 
        'private_key' => "-----BEGIN PRIVATE KEY-----\nMIIEvQIBADANBgkqhkiG9w0BAQEFAASCBKcwggSjAgEAAoIBAQC1ieIatR6jDxRX\nixnNQ0h78/vJB4f8Wd42DsXa5oWeLHYGQBtgawTUsf5N1V2Fw6qEKv7VpzYzHp7n\nGgyjphAbttpFcUbWeo+iu+58XchUeTbrsWdxczbg4u8MZpbgFVYJXubMAXJUrKkq\nx+Xs/1lSjsqEKqmFeN4zGGSONePYHlF7odiZRQDFS7FwqblZrYvW0nOTg0CniHco\naFCbuuACmiAQF/7RjVdjU03IOEJz+Nj6RN9ZJjxFPN+DRsgTTkCoxW3OpFDBpkHf\njvZommGa+tuN1mUqK9AzBAOvudXErZG6WONN6umcZz+t71Bc+3M9X41VtcC3vmt3\nneQrSa6jAgMBAAECggEAHHb2QQHNP/wJUIC7FvhJ0UW8YRUROXxN32QJmf0zTk3i\nY7CBmmitZTxTh5jBBUxc3ERxmMaTNQjEGbB38uEC/ZV6PBE67j5hbz7QcieyVax7\n9BDpC1zpafGrUeJ0Hca6qtV6ktpXNvervs2BO9v+AXfqQTb/RbJiBNj6S2Ify68R\ntDU9ZUDF1li8soHZU7dNPnSh/QHg7YcShqEy2AWcNAhe1ZvbdgezcdqSF7Y6qBih\nnAOqplnkXZ5h/yQRYCUfMzrh7KIhWDpOBjfOEAMy+tmH1U0QZgFowSfz51b9+IeO\nk8Hphm+QZQFRv6TJR9EZDw3tmAIxQG7uNhmLCcnd4QKBgQDZa1erzHCRhnsiuPjn\nFbmd8dxc0N4YpY6lXGr/oxxxGzKZIj/QX5LX7o7ybfQXxPD++clLL7H8zAo8C98+\npuS+0+5nmjDFlNaE5jUbOY4LlV5MzSpMj8+fyn2KhmywqA5U9it/DgyoNWljB1G/\ncbD1jR31SPXpajN4mlFd0zk4VwKBgQDVwJios8OESxtrD9E2LNGGtpPSwiZ0DiIT\nn3P2W/VSdnyuV05wXcU/ir1IdkKDaeQ78QFXhlBn8YGSFuRijggQ62iVady5dBHZ\ndfeYOUfaGzkKWOoisNX96/IRixXOhzWIBNZ3ExktdUxqui7ukyQ0JKwacWafiIfk\nsENtpcS8lQKBgBPCUaFnXwOauS4aqWQ28TuNc31r7gNHaINWttKsvDT7R8nq9um1\nBd9h6tPVck2GtHA3uzd+CirzUCrM2WkUOc2t7Qi1VqFeOXCyizkCLgqXdI5+Rs3W\ndAQNnwMr3EzhuQu3o5RUbooK8JzzWVaQuohWXtaf3tlrsWnQfHyOabDZAoGBAKAO\nscFRqov7ebJ3i59XfCW1vYdJ3mV018t90OWfAloXY1FhCtlVPghQqWADPdcNidvg\nobKaXscWroFoJugtlpikzhFjzeYIpf0COr5/1e/aBqJa5ifH5tVWwlKkpVWbJViO\n1tEfOfEyLmCUvePjxm5NL5o1ZDT9lVSHMFaAlIrpAoGAIZjCvUSxW6Tp0frAZ6Dl\n1xeD1YSRPtTpm6hWf1lhKS5DHAFRw83S+AxNmoUc7OOiJa82phgQIWenZ+EK+UpJ\nOGMJOQq1LB0YfR4N1f53NHk8pGSw5uOyX1gNiPFdUtJhVzcea/LyxxFMyJBv2U+z\njF8yrFvkBnDnI9IujZYcqw8=\n-----END PRIVATE KEY-----\n",
        'client_email' => "syntaxsolution@syntax-solution-352307.iam.gserviceaccount.com",
        'client_id' => "118399978886960030789",
        'auth_uri' => "https://accounts.google.com/o/oauth2/auth",
        'token_uri' => "https://oauth2.googleapis.com/token",
        'auth_provider_x509_cert_url' =>"https://www.googleapis.com/oauth2/v1/certs",
        'client_x509_cert_url' =>"https://www.googleapis.com/robot/v1/metadata/x509/syntaxsolution%40syntax-solution-352307.iam.gserviceaccount.com"
    ],

    /*
     * The amount of minutes the Google API responses will be cached.
     * If you set this to zero, the responses won't be cached at all.
     */
    'cache_lifetime_in_minutes' => 60 * 24,

    /*
     * Here you may configure the "store" that the underlying Google_Client will
     * use to store it's data.  You may also add extra parameters that will
     * be passed on setCacheConfig (see docs for google-api-php-client).
     *
     * Optional parameters: "lifetime", "prefix"
     */
    'cache' => [
        'store' => 'file',
    ],
];
