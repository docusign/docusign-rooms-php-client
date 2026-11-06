# The Official DocuSign PHP Client 

[![Build status][travis-image]][travis-url]

## Requirements

- A PHP release patched for PHP2Shell (CVE-2026-109618 / CVE-2026-109619). The supported versions are:
  - PHP 8.2.35 or any later 8.2 release
  - PHP 8.3.36 or any later 8.3 release
  - PHP 8.4.27 or any later 8.4 release
  - PHP 8.5.12 or later
- Free [Developer Sandbox](https://go.docusign.com/sandbox/productshot/?elqCampaignId=16531)

## Compatibility

- PHP `~8.2.35 || ~8.3.36 || ~8.4.27 || >=8.5.12`. PHP 7.4, 8.0 and 8.1 are not supported. See the [PHP security advisory](https://www.php.net/archive/2026.php#2026-10-21-5).
- If your Linux distribution has backported the fix but reports an older version number, install with `composer install --ignore-platform-req=php`, and only after confirming that your PHP build includes the fix.

## Note

This open-source SDK is provided for cases where you would like to make additional changes that the SDK does not provide out-of-the-box. If you simply want to use the SDK with any of the examples shown in the [Developer Center](https://developers.docusign.com/rooms-rest-api/code-examples), follow the installation instructions below.

## Installation

### Composer:

1. In your **PHP console** , type:  
   **Composer require docusign/rooms-client;**
2. To use the package automatically, add to Composer's **Autoload** file:  
   **require_once('vendor/autoload.php');**

### Manual install:

<ol>
   <li>Download or clone this repository.</li>
   <li>Bind the PHP SDK to your server or place it in a static location.
       <ol style="list-style-type: lower-alpha simple">
           <li>To bind to your server, edit the <em>init.php</em> file. Add:<br>
               <code>require_once('/path/to/docusign-rooms-client/autoload.php');</code></li>
           <li>To bind to single pages: In your PHP file that will utilize the PHP SDK, add:<br>
                <code>`require_once('/path/to/docusign-rooms-client/autoload.php');</code></li>
       </ol>
   </li>
</ol>

## Dependencies

This client has the following external dependencies:

- [PHP cURL extension](https://www.php.net/manual/en/intro.curl.php)
- [PHP JSON extension](https://php.net/manual/en/book.json.php)
- [PHP mbstring extension](https://www.php.net/manual/en/book.mbstring.php)
- [firebase/php-jwt](https://github.com/firebase/php-jwt) (^7.0), used for JWT Grant authentication. JWT Grant requires an RSA private key of at least 2048 bits.

## Code Examples

### Launchers

DocuSign provides a sample application referred to as a [Launcher](https://github.com/docusign/eg-03-php-auth-code-grant). The Launcher contains a set of 18 common use cases and associated source files. These examples use DocuSign's [Authorization Code Grant](https://developers.docusign.com/rooms-rest-api/guides/authentication/oauth2-code-grant) flow.

## Proof-of-concept applications

If your goal is to create a proof-of-concept application, DocuSign provides a set of [Quick Start](https://github.com/docusign/qs-php) examples. The Quick Startexamples are meant to be used with DocuSign's [OAuth Token Generator](https://developers.docusign.com/oauth-token-generator), which will allow you to generate tokens for the Demo/Sandbox environment only. These tokens last for eight hours and will enable you to build your proof-of-concept application without the need to fully implement an OAuth solution.

## OAuth Implementations

For details regarding which type of OAuth grant will work best for your DocuSign integration, see the [REST API Authentication Overview](https://developers.docusign.com/rooms-rest-api/guides/authentication) guide located on the [DocuSign Developer Center](https://developers.docusign.com/rooms-rest-api/guides/authentication).

For security purposes, DocuSign recommends using the [Authorization Code Grant](https://developers.docusign.com/rooms-rest-api/guides/authentication/oauth2-code-grant) flow.

There are other use-case scenarios, such as **single-page applications** (SPA) that use **Cross-Origin Resource Sharing** (CORS), or where there may not be a user to interact with your Service Account. For these use cases, DocuSign also supports [JWT](https://developers.docusign.com/rooms-rest-api/guides/authentication/oauth2-jsonwebtoken) and [Implicit](https://developers.docusign.com/rooms-rest-api/guides/authentication/oauth2-implicit) grants. For code examples, see the links below:

- [JWT (JSON Web Token)](https://github.com/docusign/eg-03-php-auth-code-grant)
- Implicit Grant (coming soon)

## Support

Log issues against this client through GitHub. We also have an [active developer community on Stack Overflow](https://stackoverflow.com/questions/tagged/docusignapi).

## License

The DocuSign PHP Client is licensed under the [MIT License](https://github.com/docusign/docusign-php-client/blob/master/LICENSE).

[travis-image]: https://img.shields.io/travis/docusign/docusign-php-client.svg?style=flat
[travis-url]: https://travis-ci.org/docusign/docusign-php-client
