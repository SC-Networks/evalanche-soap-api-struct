# EVALANCHE SOAP API STRUCT

[![Monthly Downloads](https://poser.pugx.org/scn/evalanche-soap-api-struct/d/monthly)](https://packagist.org/packages/scn/evalanche-soap-api-struct)
[![License](https://poser.pugx.org/scn/evalanche-soap-api-struct/license)](LICENSE)
[![Build Status](https://travis-ci.org/SC-Networks/evalanche-soap-api-struct.svg?branch=master)](https://travis-ci.org/SC-Networks/evalanche-soap-api-struct)

## Models
### Account
##### Account
Represents one account.<br>
  Contains information about the given discount, as well as a list of AccountingTypes.<br>
 ```
Account(
    array(AccountingTypeInterface) <accountingTypes>
    Scn\EvalancheSoapStruct\Struct\Account\DiscountInterface <discount>
)
```
##### AccountingItem
Represents an Accountingitem.<br>
  Contains information about the concerned mandator id, date and amount of charges.<br>
 ```
AccountingItem(
    string <description>
    int <mandatorId>
    string <accountingDate>
    int <chargeCount>
)
```
##### AccountingType
Represents a specific type of accountings.<br>
  Contains information of the type id, amount, price and currency,<br>
  as well as a list of AccountingItems.<br>
 ```
AccountingType(
    int <typeId>
    int <amount>
    float <price>
    string <currency>
    array(AccountingItemInterface) <accountingItems>
)
```
##### Discount
Represents one discount.<br>
  Contains information about price and discount in percent.<br>
 ```
Discount(
    string <description>
    float <percent>
    float <price>
)
```
### Blacklist
##### BlackList
Represents a list of BlackListItems for one specific mandator.<br>
 ```
BlackList(
    int <mandatorId>
    array <items>
)
```
##### BlackListItem
Represents one blacklisted e-mail address with description<br>
 ```
BlackListItem(
    string <email>
    string <description>
)
```
### Container
##### ContainerAttribute
Represents one attribute of a container.<br>
  Contains information about name, label, type, mandatoriness, visibility, etc.<br>
 ```
ContainerAttribute(
    int <id>
    string <name>
    string <label>
    int <typeId>
    int <groupId>
    string <helpText>
    string <inputHelpText>
    bool <mandatory>
    bool <visible>
    string <replacementVariable>
    bool <allowOptions>
)
```
##### ContainerAttributeGroup
Represents a group for ContainerAttributes.<br>
 ```
ContainerAttributeGroup(
    int <id>
    string <name>
    int <sortOrder>
)
```
##### ContainerAttributeOption
Represents one option for ContainerAttributes.<br>
 ```
ContainerAttributeOption(
    int <id>
    string <name>
    string <label>
    int <order>
)
```
##### ContainerAttributeRoleType
Represents a role type for ContainerAttributes<br>
 ```
ContainerAttributeRoleType(
    int <id>
    string <name>
)
```
### Generic
##### FolderInformation
Standard folder of an object class<br>
 ```
FolderInformation(
    int <id>
    string <name>
)
```
##### HashMap
List of HashMapItems<br>
 ```
HashMap(
    array(HashMapItemInterface) <items>
)
```
##### HashMapItem
Holds an alphanumeric value by an alphanumeric key<br>
 ```
HashMapItem(
    string <key>
    string <value>
)
```
##### JobHandle
Representates a background job.<br>
  Contains information about state, method, resource and amount of chunks in the result.<br>
 ```
JobHandle(
    string <id>
    int <status>
    string <statusDescription>
    string <namespace>
    string <method>
    int <resourceId>
    int <resultChunks>
)
```
##### JobResult
Represents the result of a background job.<br>
  Contains information about state, method, result and the amount of result items.<br>
 ```
JobResult(
    string <id>
    int <status>
    string <statusDescription>
    string <namespace>
    string <method>
    int <resourceId>
    int <resultChunks>
    array(HashMapInterface) <result>
    int <chunksLeft>
    int <resultSize>
)
```
##### MassUpdateResult
Result of a mass profile update.<br>
  \<updated> and \<created> are HashMaps:<br>
  Key: id of the updated or created profile, value: value of the field "key_attribute_name"<br>
 ```
MassUpdateResult(
    Scn\EvalancheSoapStruct\Struct\Generic\HashMapInterface <updated>
    Scn\EvalancheSoapStruct\Struct\Generic\HashMapInterface <created>
    array(string) <ignored>
    array(string) <error>
)
```
##### ResourceInformation
Evalanche object like mailing, image, template, etc.<br>
 ```
ResourceInformation(
    int <id>
    string <name>
    string <url>
    int <typeId>
    int <folderId>
    int <mandatorId>
)
```
##### ResourceTypeInformation
Id and description of an Evalanche object's type<br>
 ```
ResourceTypeInformation(
    int <id>
    string <description>
)
```
##### ServiceStatus
Availability of a particular service<br>
 ```
ServiceStatus(
    string <status>
    string <randomMessage>
)
```
### Mailing
##### MailingArticle
Reference to an article in a mailing<br>
 ```
MailingArticle(
    int <id>
    int <articleId>
    int <targetGroupId>
    int <htmlPresetId>
    int <textPresetId>
    int <landingpagePresetId>
    int <pdfPresetId>
    int <mobilePresetId>
    int <sortPos>
    int <slot>
)
```
##### MailingClick
Represents one click on a link.<br>
  Contains information about the link type (link to landing page, pdf version, etc.), link id, time and profile.<br>
 ```
MailingClick(
    int <id>
    int <profileId>
    int <timestamp>
    int <linkId>
    int <linkTypeId>
    int <parentId>
)
```
##### MailingConfiguration
Contains information about the configuration of a specific mailing<br>
  like campaign id, individual salutations, reply address, input fields, etc.<br>
 ```
MailingConfiguration(
    string <externalTrackingCode>
    string <campaignId>
    string <externalXmlUrl>
    string <salutationFemale>
    string <salutationMale>
    string <salutationCompany>
    string <salutationFamily>
    string <salutationOther>
    string <senderEmail>
    string <senderName>
    string <replyName>
    string <replyEmail>
    string <grantUrl>
    string <revokeUrl>
    string <inputfield0>
    string <inputfield1>
    string <inputfield2>
    string <inputfield3>
    string <inputfield4>
    string <inputfield5>
    string <inputfield6>
    string <inputfield7>
    string <inputfield8>
    string <inputfield9>
    string <textarea0>
    string <textarea1>
    string <textarea2>
    string <textarea3>
    string <textarea4>
    string <textarea5>
    string <textarea6>
    string <textarea7>
    string <textarea8>
    string <textarea9>
    string <htmlarea0>
    string <htmlarea1>
    string <htmlarea2>
    string <htmlarea3>
    string <htmlarea4>
    string <htmlarea5>
    string <htmlarea6>
    string <htmlarea7>
    string <htmlarea8>
    string <htmlarea9>
)
```
##### MailingDetail
Contains detailed informations about a specific mailing<br>
  like timestamp, amount of recipients, subject, sendout time, etc.<br>
 ```
MailingDetail(
    int <id>
    string <name>
    string <url>
    int <typeId>
    int <folderId>
    int <mandatorId>
    int <timestamp>
    int <recipients>
    bool <sent>
    string <previewUrl>
    string <reportUrl>
    string <adminUrl>
    string <subject>
    int <targetGroupId>
    int <sendStartTime>
    int <sendEndTime>
)
```
##### MailingImpression
Represents an impression (opening) of a specific mailing.<br>
  Contains information about the profile which performed the action, as well as the timestamp.<br>
 ```
MailingImpression(
    int <id>
    int <profileId>
    int <timestamp>
)
```
##### MailingStatus
Contains profile data and sendout state for a specific mailing and a specific profile.<br>
 ```
MailingStatus(
    int <profileId>
    int <newsletterId>
    int <lastStatusChange>
    int <status>
    string <previewUrl>
    array <profileData>
)
```
##### MailingSubject
Represents a combination of a specific TargetGroup id and a specific subject text.<br>
 ```
MailingSubject(
    int <targetGroupId>
    string <subject>
)
```
### Mandator
##### Mandator
Represents an Evalanche Mandator with id, name and domain.<br>
 ```
Mandator(
    int <id>
    string <name>
    string <domain>
)
```
### Pool
##### PoolAttribute
Represents a PoolAttribute.<br>
  Contains information about type, name, label and options.<br>
 ```
PoolAttribute(
    int <id>
    int <typeId>
    string <name>
    string <label>
    array(PoolAttributeOptionInterface) <options>
    bool <hasOptions>
    bool <addOptions>
)
```
##### PoolAttributeOption
Represents one option of a PoolAttribute.<br>
  Contains id and value.<br>
 ```
PoolAttributeOption(
    int <id>
    string <value>
)
```
### Profile
##### ProfileActivityScore
Provides a profile activity score. Contains information about the Scoring Group Id, Scoring Type Id, Time and Score.<br>
 ```
ProfileActivityScore(
    int <id>
    int <scoringGroupId>
    int <scoringTypeId>
    int <timestamp>
    int <score>
    int <resourceId>
)
```
##### ProfileBounceStatus
Represents a profile bounce status element.<br>
  Contains information about the mailing id, time, status, and profile information.<br>
 ```
ProfileBounceStatus(
    int <profileId>
    int <mailingId>
    int <status>
    int <timestamp>
    Scn\EvalancheSoapStruct\Struct\Generic\HashMapInterface <profileData>
)
```
##### ProfileGroupScore
Represents a profile group score element.<br>
  Contains information about the group id, name, activity score and profile score.<br>
 ```
ProfileGroupScore(
    int <profileId>
    int <groupId>
    string <groupName>
    int <activityScore>
    int <profileScore>
)
```
##### ProfileTrackingHistory
Represents a profile tracking history element.<br>
  Contains information about tracking id, resource id, resource name, resource type id, sub resource id,<br>
  sub resource name, sub resource type id, sub url, profile id, type id, timestamp and referrer domain.<br>
 ```
ProfileTrackingHistory(
    int <id>
    int <resourceId>
    string <resourceName>
    int <resourceTypeId>
    int <subResourceId>
    string <subResourceName>
    int <subResourceTypeId>
    string <subUrl>
    int <profileId>
    int <type>
    int <timestamp>
    string <referrerDomain>
)
```
### Scoring
##### ScoringGroupDetail
Represents a scoring group detail element.<br>
  Contains information about its Id, name, and the client.<br>
 ```
ScoringGroupDetail(
    int <id>
    string <name>
    int <mandatorId>
)
```
### SmartLink
##### SmartLink
Represents a smart link element.<br>
  Contains information about its id, name and tracking url.<br>
 ```
SmartLink(
    int <id>
    string <name>
    string <trackingUrl>
)
```
### Statistic
##### ArticleStatistic
Represents a article statistic. Contains information his name, as well as statistics about articles of all<br>
  output formats, Landinpage click statistics, PDF and Print click statistics,<br>
  Voice click statistics, Share to Social click statistics.<br>
 ```
ArticleStatistic(
    int <id>
    int <referenceId>
    string <name>
    Scn\EvalancheSoapStruct\Struct\Statistic\FormatStatisticItemInterface <overall>
    Scn\EvalancheSoapStruct\Struct\Statistic\FormatStatisticItemInterface <landingPage>
    Scn\EvalancheSoapStruct\Struct\Statistic\FormatStatisticItemInterface <print>
    Scn\EvalancheSoapStruct\Struct\Statistic\FormatStatisticItemInterface <voice>
    Scn\EvalancheSoapStruct\Struct\Statistic\FormatStatisticItemInterface <socialSharing>
    array(LinkStatisticItemInterface) <links>
)
```
##### ArticleStatisticItem
Represents a statistic about an article element.<br>
  Contains information about the name, the number of all clicks and the number of unique clicks.<br>
 ```
ArticleStatisticItem(
    int <id>
    string <name>
    int <clickCount>
    int <uniqueClickCount>
)
```
##### BrowserStatisticItem
Displays statistics about a browser.<br>
  Contains information about the version, as well as the number of its usage.<br>
 ```
BrowserStatisticItem(
    string <description>
    string <version>
    int <count>
)
```
##### ClientStatistic
Represents a client statistic.<br>
  Contains Information about Mail Client Statistic Items, Browser Statistic Items and Device Statistic Items.<br>
 ```
ClientStatistic(
    array(MailClientStatisticItemInterface) <clients>
    array(MailClientStatisticItemInterface) <browsers>
    array(MailClientStatisticItemInterface) <devices>
)
```
##### DeviceStatisticItem
Represents a statistic of the devices used.<br>
  Contains information about the description of the devices and the Count.<br>
 ```
DeviceStatisticItem(
    string <description>
    int <count>
)
```
##### FormStatistic
Displays statistics about a form element.<br>
  Contains information about its id, name, url, number of representations, number of successful transmissions,<br>
  number of errors e.g. due to duplicates, validations.<br>
 ```
FormStatistic(
    int <id>
    string <name>
    string <url>
    int <typeId>
    int <folderId>
    int <mandatorId>
    bool <isAlias>
    int <impressions>
    int <succeeded>
    int <identityErrorCount>
    int <duplicationErrorCount>
    int <validationErrorCount>
    int <mandatoryErrorCount>
)
```
##### FormatStatisticItem
Represents a generic format statistic element. Contains information about the number of clicks,<br>
  the number of unique clicks, click rate as well as relative click rate,<br>
  multiple click rate as well as relative multiple click rate.<br>
 ```
FormatStatisticItem(
    int <clickCount>
    int <uniqueClickCount>
    float <clickRate>
    float <clickRateRelative>
    float <multipleClickRate>
    float <multipleClickRateRelative>
)
```
##### LinkStatisticItem
Represents a statistic about links.<br>
  Contains information about the id, url and name as well as the number of all clicks and the number of unique clicks.<br>
 ```
LinkStatisticItem(
    int <id>
    string <url>
    string <name>
    int <clickCount>
    int <uniqueClickCount>
)
```
##### MailClientStatisticItem
Represents a statistic about the used mail clients.<br>
  Contains information about the description of the mail client as well as the number.<br>
 ```
MailClientStatisticItem(
    string <description>
    int <count>
)
```
##### MailingStatistic
Represents a statistic about a Mailing.<br>
  Contains Information about Profile- Count, Duplicate- Count, Blacklists Count, Hard and Softbounces, Impressions.<br>
  Also includes MediaStatisticItems, ArticleStatisticItems, and LinkStatisticItems.<br>
 ```
MailingStatistic(
    int <addresses>
    int <recipients>
    int <duplicateCount>
    int <blackListedCount>
    int <robinsonListedCount>
    int <hardBounceCount>
    int <softBounceCount>
    int <unSubscribeCount>
    int <impressionCount>
    int <uniqueImpressionCount>
    int <clickCount>
    int <uniqueClickCount>
    array(MediaStatisticItemInterface) <media>
    array(MediaStatisticItemInterface) <articles>
    array(MediaStatisticItemInterface) <links>
)
```
##### MediaStatisticItem
Represents a statistic about a media element.<br>
  Contains information about its name, the number of all clicks and the number of unique clicks.<br>
 ```
MediaStatisticItem(
    string <name>
    int <clickCount>
    int <uniqueClickCount>
)
```
### TargetGroup
##### TargetGroupDetail
Represents a target group detail information.<br>
  Contains information about the target group name as well as the number of profiles contained.<br>
 ```
TargetGroupDetail(
    string <name>
    int <profileCount>
)
```
##### TargetGroupMemberShip
Represents the assignment of profiles in TargetGroup.<br>
  Contains information about the assignment of a profile to a TargetGroup.<br>
 ```
TargetGroupMemberShip(
    int <profileId>
    int <targetGroupId>
)
```
### User
##### User
Represents a user in Evalanche.<br>
  Contains basic information about the user's name, e-mail, mandator assignment,<br>
  current status, roles, and any security policies used.<br>
 ```
User(
    int <id>
    int <mandatorId>
    string <username>
    string <email>
    int <salutation>
    string <firstName>
    string <name>
    string <description>
    int <securityGuidelineId>
    array(int) <roleIds>
    bool <disabled>
    string <password>
)
```
### Workflow
##### WorkflowDetail
Represents a workflow, in Evalanche called a campaign.<br>
  Contains information about its id, name, description, start and end times, number of profiles, and current status.<br>
 ```
WorkflowDetail(
    int <id>
    string <name>
    int <dateStart>
    int <dateEnd>
    string <externalId>
    int <folderId>
    string <description>
    int <state>
    int <profileCount>
)
```
