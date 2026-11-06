# DocuSign Rooms PHP Client Changelog
See [DocuSign Support Center](https://support.docusign.com/en/releasenotes/) for Product Release Notes.

## [v3.0.0] - Rooms API v2-1.1.1 - 2026-11-02
### Breaking
- **A PHP release patched for PHP2Shell is required.** The minimum PHP version is raised from 7.4 to `"php": "~8.2.35 || ~8.3.36 || ~8.4.27 || >=8.5.12"`:
  - 8.2.35 or any later 8.2 release
  - 8.3.36 or any later 8.3 release
  - 8.4.27 or any later 8.4 release
  - 8.5.12 or later

  Composer refuses to install the SDK on PHP 7.4, 8.0 and 8.1 (end-of-life), and on releases affected by CVE-2026-109618 / CVE-2026-109619. See the [PHP security advisory](https://www.php.net/archive/2026.php#2026-10-21-5). If your Linux distribution has backported the fix but reports an older version number, install with `composer install --ignore-platform-req=php`, and only after confirming that your PHP build includes the fix.
- **JWT library changed to `firebase/php-jwt` (^7.0)**, replacing `adhocore/jwt` (^1.1). The signatures of `requestJWTUserToken()` and `requestJWTApplicationToken()` are unchanged.
- **JWT Grant now requires an RSA private key of at least 2048 bits.** A shorter key throws `DomainException: Provided key is too short` before any request is sent. To check your key size, run `openssl rsa -in private.key -noout -text | head -1`.
- **Response header names are now lowercased.** The header arrays returned by the `*WithHttpInfo` methods and by `ApiException::getResponseHeaders()` use lowercase keys (for example `content-type` and `content-disposition`). Code that reads a header with its original casing, such as `$headers['Content-Type']`, must use the lowercase key instead.

### Fixed
- Removed the deprecated `utf8_decode()` call from the Basic authorization header in `generateAccessToken()` and `refreshAccessToken()`. On PHP 8.2 and later it raised a deprecation warning on every call. The header value is unchanged.

### Changed
- Updated the README requirements and dependency list.
- Updated the SDK release version.

### Known issues
- 10 legacy classes (`Account`, `ClassicAdminToInvite`, `ClassicAgentToInvite`, `ClassicManagerToInvite`, `Link`, `NullableFieldData`, `NullablePermissions`, `OAuthToken`, `Organization` and `UserInfo`) raise PHP deprecation warnings when loaded. Functionality is not affected. This will be fixed in a future release.
  - From PHP 8.1, they implement `ArrayAccess` without return types.
  - From PHP 8.4, their constructors declare `array $data = null` instead of an explicit nullable type.

## [v2.1.3] - Rooms API v2-1.1.1 - 2026-06-16
### Changed
- Added support for version v2.1-26.1.1.00 of the DocuSign ESignature API.
- Updated the SDK release version.

## [v2.1.2] - Rooms API v2-1.1.1 - 2025-10-16
### Changed
- Added explicit nullable type hints (?Type) to parameters that accept null, improving type safety and consistency.
- Updated the SDK release version.

## [v2.1.1] - Rooms API v2-1.1.1 - 2024-04-22
### Changed
- Adjusted the minimum required firebase/php-jwt package version to 6.0.
- Updated the SDK release version.

## [v2.1.1-rc1] - Rooms API v2-1.1.1 - 2024-03-20
### Changed
- Adjusted the minimum required `firebase/php-jwt` package version to 6.0.

## [v2.1.0] - Rooms API v2-1.1.1 - 2023-03-03
### Changed
- Added support for version v2-1.1.1 of the DocuSign Rooms API.
- Updated the SDK release version.

## [v2.1.0-rc] - Rooms API v2-1.1.0 - 2023-02-10
### Changed
- Added support for version v2-1.1.0 of the DocuSign Rooms API.
- Updated the SDK release version.

## [2.0.0] - Rooms API v2-1.0.9 - 2021-10-04
### Changed
- Added support for version v2-1.0.9 of the DocuSign Rooms API.
- Updated the SDK release version.


## [v2.0.0-rc] - Rooms API v2-1.0.8 - 2021-03-25
### Changed
- Added support for version v2-1.0.8 of the DocuSign Rooms API.
- Updated the SDK release version.

### Breaking
*   As SDK is upgraded to PHP version 7.4, older versions of PHP will not be supported.


## [v1.0.0] - Rooms API v2-1.0.7 - 2020-10-15
### Changed
- First GA version of Rooms API.
