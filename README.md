# ebay-api
uses ebay API to access to search capabilities on the eBay platform

## install bundle
### Step 1: Download EbayApiBundle using composer

###### Add EbayApiBundle in your composer.json:

    `{
        "require": {
            "require medyes/ebay-api": "~0.1" 
        }
    }`

##Configuration
### app/config/config.yml
myw_ebay_api:

    auth_token: %token_api_ebay%
    sandbox:
        dev_id: xxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx
        app_name: xxxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxx
        cert_name: xxxxxxxx-xxxx-xxxx-xxx-xxxxxxxxxxxx
    production:
        dev_id: xxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx
        app_name: xxxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxx
        cert_name: xxxxxxxx-xxxx-xxxx-xxx-xxxxxxxxxxxx

### parameter.yml

token_api_ebay: xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
