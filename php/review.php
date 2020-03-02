<?php
$url = '{
    "reviews": [
        {
            "reviewId": "gp:AOqpTOF7bz5d5Ayl_JKXfgZoM6vWdyotacP4tjOf3bLPjurTtasHgn4XVdnRtWNgio8whIq3zIlD0BKllZM9Pg",
            "authorName": "Nur Azzahra",
            "comments": [
                {
                    "userComment": {
                        "text": "\tBelum bisa login nih, tampilan udah bagus. Lanjutkannnnn",
                        "lastModified": {
                            "seconds": "1582791383",
                            "nanos": 208000000
                        },
                        "starRating": 5,
                        "reviewerLanguage": "en_ID",
                        "device": "CPH1729",
                        "androidOsVersion": 25,
                        "appVersionCode": 1,
                        "appVersionName": "1.0",
                        "thumbsUpCount": 0,
                        "thumbsDownCount": 0,
                        "deviceMetadata": {
                            "productName": "CPH1729 (CPH1729)",
                            "manufacturer": "Oppo",
                            "deviceClass": "phone",
                            "screenWidthPx": 720,
                            "screenHeightPx": 1440,
                            "nativePlatform": "armeabi-v7a,armeabi,arm64-v8a",
                            "screenDensityDpi": 320,
                            "glEsVersion": 196610,
                            "cpuModel": "MT6763",
                            "cpuMake": "Mediatek",
                            "ramMb": 3072
                        }
                    }
                }
            ]
        },
        {
            "reviewId": "gp:AOqpTOFMZ3i2eszMGimlVWqrDwNLpum_d_yuYIw305hx135nuEzYdqodUWhWCZXWhfGmvT44fyD9vdK0tCr4zA",
            "authorName": "Muhammad Fiqih",
            "comments": [
                {
                    "userComment": {
                        "text": "\t👍👍👍👍👍",
                        "lastModified": {
                            "seconds": "1582791183",
                            "nanos": 774000000
                        },
                        "starRating": 5,
                        "reviewerLanguage": "id_ID",
                        "device": "whyred",
                        "androidOsVersion": 28,
                        "appVersionCode": 1,
                        "appVersionName": "1.0",
                        "thumbsUpCount": 0,
                        "thumbsDownCount": 0,
                        "deviceMetadata": {
                            "productName": "whyred (Redmi Note 5 Pro)",
                            "manufacturer": "Xiaomi",
                            "deviceClass": "phone",
                            "screenWidthPx": 1080,
                            "screenHeightPx": 1980,
                            "nativePlatform": "armeabi-v7a,armeabi,arm64-v8a",
                            "screenDensityDpi": 480,
                            "glEsVersion": 196610,
                            "cpuModel": "SDM636",
                            "cpuMake": "Qualcomm",
                            "ramMb": 4096
                        }
                    }
                }
            ]
        },
        {
            "reviewId": "gp:AOqpTOF8tIWbsC94MNVhj41K9lCcfZCUOwGftNfl-yHDi2z4w550X9chrnQYiorx2O13EsJhqPBftlTF5BLICQ",
            "authorName": "Azerus !%",
            "comments": [
                {
                    "userComment": {
                        "text": "\tkerennn",
                        "lastModified": {
                            "seconds": "1582528255",
                            "nanos": 364000000
                        },
                        "starRating": 5,
                        "reviewerLanguage": "en_ID",
                        "device": "RMX1801",
                        "androidOsVersion": 28,
                        "thumbsUpCount": 0,
                        "thumbsDownCount": 0,
                        "deviceMetadata": {
                            "productName": "RMX1801 (realme 2 Pro)",
                            "manufacturer": "Realme",
                            "deviceClass": "phone",
                            "screenWidthPx": 1080,
                            "screenHeightPx": 1920,
                            "nativePlatform": "armeabi-v7a,armeabi,arm64-v8a",
                            "screenDensityDpi": 480,
                            "glEsVersion": 196610,
                            "cpuModel": "SDM660",
                            "cpuMake": "Qualcomm",
                            "ramMb": 6144
                        }
                    }
                },
                {
                    "developerComment": {
                        "text": "Thanks for your feedback!",
                        "lastModified": {
                            "seconds": "1582529144",
                            "nanos": 310000000
                        }
                    }
                }
            ]
        },
        {
            "reviewId": "gp:AOqpTOGU_mPQye-IuoBWtBJz8ISken5ukqdscFKwJMuaujtLmlezYGb6UKjekNzLPLwwc8V5KohnFX-qaJyCqA",
            "authorName": "Abidin Ali",
            "comments": [
                {
                    "userComment": {
                        "text": "\tNice",
                        "lastModified": {
                            "seconds": "1582257702",
                            "nanos": 461000000
                        },
                        "starRating": 5,
                        "reviewerLanguage": "en_ID",
                        "device": "daisy_sprout",
                        "androidOsVersion": 28,
                        "thumbsUpCount": 0,
                        "thumbsDownCount": 0,
                        "deviceMetadata": {
                            "productName": "daisy_sprout (Mi A2 Lite)",
                            "manufacturer": "Xiaomi",
                            "deviceClass": "phone",
                            "screenWidthPx": 1080,
                            "screenHeightPx": 2280,
                            "nativePlatform": "armeabi-v7a,armeabi,arm64-v8a",
                            "screenDensityDpi": 480,
                            "glEsVersion": 196610,
                            "cpuModel": "MSM8953",
                            "cpuMake": "Qualcomm",
                            "ramMb": 3072
                        }
                    }
                },
                {
                    "developerComment": {
                        "text": "Thanks for your feedback. (From Onebox CRM)",
                        "lastModified": {
                            "seconds": "1582258964",
                            "nanos": 708000000
                        }
                    }
                }
            ]
        }
    ]
}';

$review = json_decode($url);