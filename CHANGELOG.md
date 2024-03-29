# Changelog

## [2.0.0] - 2023-11-07
### ADDED
- Struct-extension related to allowed article templates in MailingSlotItem #69

## [1.16.0] - 2023-02-08
### ADDED
- Struct for ArticleIndividualization

## [1.15.0] - 2022-12-16
### ADDED
- Struct for ArticleDetail
- Structs for ContainerDetail

## [1.14.0] - 2022-09-09
### Added
- New MailingConfiguration properties `grantTrackingUrl`, `revokeTrackingUrl`,
  `revokeConfirmationUrl`, `revokeConfirmationActive`

### Fixed
- Correct `divers` salutation usage in MailingTemplateConfiguration

## [1.13.1] - 2022-08-11
### Changed
- Deprecate the following methods of `FormStatistic`: `getTypeId`,
  `getFolderId`, `getUrl`, `getMandatorId`. Those methods did not work anyway
  and are not supposed to be implemented in this struct.

### Fixed
- Let `FormStatistic`: `getTypeId`,  `getFolderId`, `getUrl`, `getMandatorId`
  return valid default values

## [1.13.0] - 2022-07-04
### Added
- new Salutation

## [1.12.1] - 2021-08-16
### Fixed
- Add missing struct interface to smart link configuration interfaces

## [1.12.0] - 2021-08-12
### Added
- Structs to support smart link configurations

## [1.11.0] - 2021-06-24
### Added
- Structs to support form configurations

## [1.10.0] - 2021-06-22
### Added
- Structs to support upcoming workflow methods

## [1.9.0] - 2021-06-07
### Added
- ContainerType to MailingTemplateConfiguration

## [1.8.0] - 2020-10-16
### Added
- Struct for CouponList profile coupon

## [1.7.0] - 2020-09-15
### Added
- Structs for MailingSlotConfigs

## [1.6.0] - 2020-09-14
### Added
- Struct for MailingTemplateSources

## [1.5.0] - 2020-09-11
### Added
- Struct for MailingTemplateConfiguration

## [1.4.1] - 2020-08-07
### Changed
- Correct issues in the Marketplace models

## [1.4.0] - 2020-03-25
### Added
- ParentId for Folder Model

## [1.3.0] - 2019-09-20
### Added
- Marketplace Language Model
- Marketplace Category Model
- Marketplace Product Model

## [1.2.1] - 2019-02-13
### Fixed
- Fix Readme formatting issues

## [1.2.0] - 2019-02-13
### Added
- Added StructFactory

## [1.1.0] - 2019-01-16
### Added
- Added ProfileTrackingHistory model

## [1.0.0] - 2018-10-01
### Changed
- Official release

## [0.1.5] - 2018-09-24
### Added
- Added Changelog

## [0.1.4] - 2018-09-24
### Changed
- Add more documentation

## [0.1.3] - 2018-09-06
### Changed
- Rename CategoryInformation model to FolderInformation

## [0.1.2] - 2018-08-24
### Changed
- Naming Changes for some parameters

## [0.1.1] - 2018-08-24
### Changed
- Fix testcase quirks #1

## [0.1.0] - 2018-08-24
### Added
- Initial Development Release
