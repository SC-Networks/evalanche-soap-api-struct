# EVALANCHE SOAP API STRUCT

[![Monthly Downloads](https://poser.pugx.org/scn/evalanche-soap-api-struct/d/monthly)](https://packagist.org/packages/scn/evalanche-soap-api-struct)
[![License](https://poser.pugx.org/scn/evalanche-soap-api-struct/license)](LICENSE)
[![Build Status](https://travis-ci.org/SC-Networks/evalanche-soap-api-struct.svg?branch=master)](https://travis-ci.org/SC-Networks/evalanche-soap-api-struct)

## Models
### Account
##### Account
Class Account<br>
 ```
Account(
    array(AccountingTypeInterface) <accountingTypes>
    Scn\EvalancheSoapStruct\Struct\Account\DiscountInterface <discount>
)
```
##### AccountingItem
Class AccountingItem<br>
 ```
AccountingItem(
    string <description>
    int <mandatorId>
    string <accountingDate>
    int <chargeCount>
)
```
##### AccountingType
Class AccountingType<br>
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
Class Discount<br>
 ```
Discount(
    string <description>
    float <percent>
    float <price>
)
```
### Blacklist
##### BlackList
Class BlackList<br>
 ```
BlackList(
    int <mandatorId>
    array <items>
)
```
##### BlackListItem
Class BlackListItem<br>
 ```
BlackListItem(
    string <email>
    string <description>
)
```
### Container
##### ContainerAttribute
Class ContainerAttribute<br>
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
Class ContainerAttributeGroup<br>
 ```
ContainerAttributeGroup(
    int <id>
    string <name>
    int <sortOrder>
)
```
##### ContainerAttributeOption
Class ContainerAttributeOption<br>
 ```
ContainerAttributeOption(
    int <id>
    string <name>
    string <label>
    int <order>
)
```
##### ContainerAttributeRoleType
Class ContainerAttributeRoleType<br>
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
Class HashMap<br>
 ```
HashMap(
    array(HashMapItemInterface) <items>
)
```
##### HashMapItem
Class HashMapItem<br>
 ```
HashMapItem(
    string <key>
    string <value>
)
```
##### JobHandle
Class JobHandle<br>
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
Class JobResult<br>
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
Class MassUpdateResult<br>
 ```
MassUpdateResult(
    Scn\EvalancheSoapStruct\Struct\Generic\HashMapInterface <updated>
    Scn\EvalancheSoapStruct\Struct\Generic\HashMapInterface <created>
    array(string) <ignored>
    array(string) <error>
)
```
##### ResourceInformation
Class ResourceInformation<br>
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
Type Ids of an object class<br>
 ```
ResourceTypeInformation(
    int <id>
    string <description>
)
```
##### ServiceStatus
Class ServiceStatus<br>
 ```
ServiceStatus(
    string <status>
    string <randomMessage>
)
```
### Mailing
##### MailingArticle
Class MailingArticle<br>
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
Class MailingClick<br>
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
Class MailingConfiguration<br>
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
Class MailingDetail<br>
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
Class MailingImpression<br>
 ```
MailingImpression(
    int <id>
    int <profileId>
    int <timestamp>
)
```
##### MailingStatus
Class MailingStatus<br>
 ```
MailingStatus(
    int <profileId>
    int <newsletterId>
    int <lastStatusChange>
    int <status>
    string <previewUrl>
    array(HashMapInterface) <profileData>
)
```
##### MailingSubject
Class MailingSubject<br>
 ```
MailingSubject(
    int <targetGroupId>
    string <subject>
)
```
### Mandator
##### Mandator
Class Mandator<br>
 ```
Mandator(
    int <id>
    string <name>
    string <domain>
)
```
### Pool
##### PoolAttribute
Class PoolAttribute<br>
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
Class PoolAttributeOption<br>
 ```
PoolAttributeOption(
    int <id>
    string <value>
)
```
### Profile
##### ProfileActivityScore
Class ProfileActivityScore<br>
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
Class ProfileBounceStatus<br>
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
Class ProfileGroupScore<br>
 ```
ProfileGroupScore(
    int <profileId>
    int <groupId>
    string <groupName>
    int <activityScore>
    int <profileScore>
)
```
### Scoring
##### ScoringGroupDetail
Class ScoringGroupDetail<br>
 ```
ScoringGroupDetail(
    int <id>
    string <name>
    int <mandatorId>
)
```
### SmartLink
##### SmartLink
Class SmartLink<br>
 ```
SmartLink(
    int <id>
    string <name>
    string <trackingUrl>
)
```
### TargetGroup
##### TargetGroupDetail
Class TargetGroupDetail<br>
 ```
TargetGroupDetail(
    string <name>
    int <profileCount>
)
```
##### TargetGroupMemberShip
Class TargetGroupMemberShip<br>
 ```
TargetGroupMemberShip(
    int <profileId>
    int <targetGroupId>
)
```
### User
##### User
Class User<br>
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
Class WorkflowDetail<br>
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
