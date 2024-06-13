<?php
// This file was auto-generated from sdk-root/src/data/pca-connector-scep/2018-05-10/docs-2.json
return [ 'version' => '2.0', 'service' => '<note> <p>Connector for SCEP (Preview) is in preview release for Amazon Web Services Private Certificate Authority and is subject to change.</p> </note> <p>Connector for SCEP (Preview) creates a connector between Amazon Web Services Private CA and your SCEP-enabled clients and devices. For more information, see <a href="https://docs.aws.amazon.com/privateca/latest/userguide/scep-connector.html">Connector for SCEP</a> in the <i>Amazon Web Services Private CA User Guide</i>.</p>', 'operations' => [ 'CreateChallenge' => '<p>For general-purpose connectors. Creates a <i>challenge password</i> for the specified connector. The SCEP protocol uses a challenge password to authenticate a request before issuing a certificate from a certificate authority (CA). Your SCEP clients include the challenge password as part of their certificate request to Connector for SCEP. To retrieve the connector Amazon Resource Names (ARNs) for the connectors in your account, call <a href="https://docs.aws.amazon.com/C4SCEP_API/pca-connector-scep/latest/APIReference/API_ListConnectors.html">ListConnectors</a>.</p> <p>To create additional challenge passwords for the connector, call <code>CreateChallenge</code> again. We recommend frequently rotating your challenge passwords.</p>', 'CreateConnector' => '<p>Creates a SCEP connector. A SCEP connector links Amazon Web Services Private Certificate Authority to your SCEP-compatible devices and mobile device management (MDM) systems. Before you create a connector, you must complete a set of prerequisites, including creation of a private certificate authority (CA) to use with this connector. For more information, see <a href="https://docs.aws.amazon.com/privateca/latest/userguide/scep-connector.htmlconnector-for-scep-prerequisites.html">Connector for SCEP prerequisites</a>.</p>', 'DeleteChallenge' => '<p>Deletes the specified <a href="https://docs.aws.amazon.com/C4SCEP_API/pca-connector-scep/latest/APIReference/API_Challenge.html">Challenge</a>.</p>', 'DeleteConnector' => '<p>Deletes the specified <a href="https://docs.aws.amazon.com/C4SCEP_API/pca-connector-scep/latest/APIReference/API_Connector.html">Connector</a>. This operation also deletes any challenges associated with the connector.</p>', 'GetChallengeMetadata' => '<p>Retrieves the metadata for the specified <a href="https://docs.aws.amazon.com/C4SCEP_API/pca-connector-scep/latest/APIReference/API_Challenge.html">Challenge</a>.</p>', 'GetChallengePassword' => '<p>Retrieves the challenge password for the specified <a href="https://docs.aws.amazon.com/C4SCEP_API/pca-connector-scep/latest/APIReference/API_Challenge.html">Challenge</a>.</p>', 'GetConnector' => '<p>Retrieves details about the specified <a href="https://docs.aws.amazon.com/C4SCEP_API/pca-connector-scep/latest/APIReference/API_Connector.html">Connector</a>. Calling this action returns important details about the connector, such as the public SCEP URL where your clients can request certificates.</p>', 'ListChallengeMetadata' => '<p>Retrieves the challenge metadata for the specified ARN.</p>', 'ListConnectors' => '<p>Lists the connectors belonging to your Amazon Web Services account.</p>', 'ListTagsForResource' => '<p>Retrieves the tags associated with the specified resource. Tags are key-value pairs that you can use to categorize and manage your resources, for purposes like billing. For example, you might set the tag key to "customer" and the value to the customer name or ID. You can specify one or more tags to add to each Amazon Web Services resource, up to 50 tags for a resource.</p>', 'TagResource' => '<p>Adds one or more tags to your resource.</p>', 'UntagResource' => '<p>Removes one or more tags from your resource.</p>', ], 'shapes' => [ 'AccessDeniedException' => [ 'base' => '<p>You can receive this error if you attempt to perform an operation and you don\'t have the required permissions. This can be caused by insufficient permissions in policies attached to your Amazon Web Services Identity and Access Management (IAM) principal. It can also happen because of restrictions in place from an Amazon Web Services Organizations service control policy (SCP) that affects your Amazon Web Services account.</p>', 'refs' => [], ], 'AzureApplicationId' => [ 'base' => NULL, 'refs' => [ 'IntuneConfiguration$AzureApplicationId' => '<p>The directory (tenant) ID from your Microsoft Entra ID app registration.</p>', ], ], 'AzureDomain' => [ 'base' => NULL, 'refs' => [ 'IntuneConfiguration$Domain' => '<p>The primary domain from your Microsoft Entra ID app registration.</p>', ], ], 'BadRequestException' => [ 'base' => '<p>The request is malformed or contains an error such as an invalid parameter value or a missing required parameter.</p>', 'refs' => [], ], 'CertificateAuthorityArn' => [ 'base' => NULL, 'refs' => [ 'Connector$CertificateAuthorityArn' => '<p>The Amazon Resource Name (ARN) of the certificate authority associated with the connector.</p>', 'ConnectorSummary$CertificateAuthorityArn' => '<p>The Amazon Resource Name (ARN) of the connector\'s associated certificate authority.</p>', 'CreateConnectorRequest$CertificateAuthorityArn' => '<p>The Amazon Resource Name (ARN) of the Amazon Web Services Private Certificate Authority certificate authority to use with this connector. Due to security vulnerabilities present in the SCEP protocol, we recommend using a private CA that\'s dedicated for use with the connector.</p> <p>To retrieve the private CAs associated with your account, you can call <a href="https://docs.aws.amazon.com/privateca/latest/APIReference/API_ListCertificateAuthorities.html">ListCertificateAuthorities</a> using the Amazon Web Services Private CA API.</p>', ], ], 'Challenge' => [ 'base' => '<p>For Connector for SCEP for general-purpose. An object containing information about the specified connector\'s SCEP challenge passwords.</p>', 'refs' => [ 'CreateChallengeResponse$Challenge' => '<p>Returns the challenge details for the specified connector.</p>', ], ], 'ChallengeArn' => [ 'base' => NULL, 'refs' => [ 'Challenge$Arn' => '<p>The Amazon Resource Name (ARN) of the challenge.</p>', 'ChallengeMetadata$Arn' => '<p>The Amazon Resource Name (ARN) of the challenge.</p>', 'ChallengeMetadataSummary$Arn' => '<p>The Amazon Resource Name (ARN) of the challenge.</p>', 'DeleteChallengeRequest$ChallengeArn' => '<p>The Amazon Resource Name (ARN) of the challenge password to delete.</p>', 'GetChallengeMetadataRequest$ChallengeArn' => '<p>The Amazon Resource Name (ARN) of the challenge.</p>', 'GetChallengePasswordRequest$ChallengeArn' => '<p>The Amazon Resource Name (ARN) of the challenge.</p>', ], ], 'ChallengeMetadata' => [ 'base' => '<p>Contains details about the connector\'s challenge.</p>', 'refs' => [ 'GetChallengeMetadataResponse$ChallengeMetadata' => '<p>The metadata for the challenge.</p>', ], ], 'ChallengeMetadataList' => [ 'base' => NULL, 'refs' => [ 'ListChallengeMetadataResponse$Challenges' => '<p>The challenge metadata for the challenges belonging to your Amazon Web Services account.</p>', ], ], 'ChallengeMetadataSummary' => [ 'base' => '<p>Details about the specified challenge, returned by the <a href="https://docs.aws.amazon.com/C4SCEP_API/pca-connector-scep/latest/APIReference/API_GetChallengeMetadata.html">GetChallengeMetadata</a> action.</p>', 'refs' => [ 'ChallengeMetadataList$member' => NULL, ], ], 'ClientToken' => [ 'base' => NULL, 'refs' => [ 'CreateChallengeRequest$ClientToken' => '<p>Custom string that can be used to distinguish between calls to the <a href="https://docs.aws.amazon.com/C4SCEP_API/pca-connector-scep/latest/APIReference/API_CreateChallenge.html">CreateChallenge</a> action. Client tokens for <code>CreateChallenge</code> time out after five minutes. Therefore, if you call <code>CreateChallenge</code> multiple times with the same client token within five minutes, Connector for SCEP recognizes that you are requesting only one challenge and will only respond with one. If you change the client token for each call, Connector for SCEP recognizes that you are requesting multiple challenge passwords.</p>', 'CreateConnectorRequest$ClientToken' => '<p>Custom string that can be used to distinguish between calls to the <a href="https://docs.aws.amazon.com/C4SCEP_API/pca-connector-scep/latest/APIReference/API_CreateChallenge.html">CreateChallenge</a> action. Client tokens for <code>CreateChallenge</code> time out after five minutes. Therefore, if you call <code>CreateChallenge</code> multiple times with the same client token within five minutes, Connector for SCEP recognizes that you are requesting only one challenge and will only respond with one. If you change the client token for each call, Connector for SCEP recognizes that you are requesting multiple challenge passwords.</p>', ], ], 'ConflictException' => [ 'base' => '<p>This request can\'t be completed for one of the following reasons because the requested resource was being concurrently modified by another request.</p>', 'refs' => [], ], 'Connector' => [ 'base' => '<p>Connector for SCEP is a service that links Amazon Web Services Private Certificate Authority to your SCEP-enabled devices. The connector brokers the exchange of certificates from Amazon Web Services Private CA to your SCEP-enabled devices and mobile device management systems. The connector is a complex type that contains the connector\'s configuration settings.</p>', 'refs' => [ 'GetConnectorResponse$Connector' => '<p>The properties of the connector.</p>', ], ], 'ConnectorArn' => [ 'base' => NULL, 'refs' => [ 'Challenge$ConnectorArn' => '<p>The Amazon Resource Name (ARN) of the connector.</p>', 'ChallengeMetadata$ConnectorArn' => '<p>The Amazon Resource Name (ARN) of the connector.</p>', 'ChallengeMetadataSummary$ConnectorArn' => '<p>The Amazon Resource Name (ARN) of the connector.</p>', 'Connector$Arn' => '<p>The Amazon Resource Name (ARN) of the connector.</p>', 'ConnectorSummary$Arn' => '<p>The Amazon Resource Name (ARN) of the connector.</p>', 'CreateChallengeRequest$ConnectorArn' => '<p>The Amazon Resource Name (ARN) of the connector that you want to create a challenge for.</p>', 'CreateConnectorResponse$ConnectorArn' => '<p>Returns the Amazon Resource Name (ARN) of the connector.</p>', 'DeleteConnectorRequest$ConnectorArn' => '<p>The Amazon Resource Name (ARN) of the connector to delete.</p>', 'GetConnectorRequest$ConnectorArn' => '<p>The Amazon Resource Name (ARN) of the connector.</p>', 'ListChallengeMetadataRequest$ConnectorArn' => '<p>The Amazon Resource Name (ARN) of the connector.</p>', ], ], 'ConnectorList' => [ 'base' => NULL, 'refs' => [ 'ListConnectorsResponse$Connectors' => '<p>The connectors belonging to your Amazon Web Services account.</p>', ], ], 'ConnectorStatus' => [ 'base' => NULL, 'refs' => [ 'Connector$Status' => '<p>The connector\'s status.</p>', 'ConnectorSummary$Status' => '<p>The connector\'s status. Status can be creating, active, deleting, or failed.</p>', ], ], 'ConnectorStatusReason' => [ 'base' => NULL, 'refs' => [ 'Connector$StatusReason' => '<p>Information about why connector creation failed, if status is <code>FAILED</code>.</p>', 'ConnectorSummary$StatusReason' => '<p>Information about why connector creation failed, if status is <code>FAILED</code>.</p>', ], ], 'ConnectorSummary' => [ 'base' => '<p>Lists the Amazon Web Services Private CA SCEP connectors belonging to your Amazon Web Services account.</p>', 'refs' => [ 'ConnectorList$member' => NULL, ], ], 'ConnectorType' => [ 'base' => NULL, 'refs' => [ 'Connector$Type' => '<p>The connector type.</p>', 'ConnectorSummary$Type' => '<p>The connector type.</p>', ], ], 'CreateChallengeRequest' => [ 'base' => NULL, 'refs' => [], ], 'CreateChallengeResponse' => [ 'base' => NULL, 'refs' => [], ], 'CreateConnectorRequest' => [ 'base' => NULL, 'refs' => [], ], 'CreateConnectorResponse' => [ 'base' => NULL, 'refs' => [], ], 'DeleteChallengeRequest' => [ 'base' => NULL, 'refs' => [], ], 'DeleteConnectorRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetChallengeMetadataRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetChallengeMetadataResponse' => [ 'base' => NULL, 'refs' => [], ], 'GetChallengePasswordRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetChallengePasswordResponse' => [ 'base' => NULL, 'refs' => [], ], 'GetConnectorRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetConnectorResponse' => [ 'base' => NULL, 'refs' => [], ], 'InternalServerException' => [ 'base' => '<p>The request processing has failed because of an unknown error, exception or failure with an internal server.</p>', 'refs' => [], ], 'IntuneConfiguration' => [ 'base' => '<p>Contains configuration details for use with Microsoft Intune. For information about using Connector for SCEP for Microsoft Intune, see <a href="https://docs.aws.amazon.com/privateca/latest/userguide/scep-connector.htmlconnector-for-scep-intune.html">Using Connector for SCEP for Microsoft Intune</a>.</p> <p>When you use Connector for SCEP for Microsoft Intune, certain functionalities are enabled by accessing Microsoft Intune through the Microsoft API. Your use of the Connector for SCEP and accompanying Amazon Web Services services doesn\'t remove your need to have a valid license for your use of the Microsoft Intune service. You should also review the <a href="https://learn.microsoft.com/en-us/mem/intune/apps/app-protection-policy">Microsoft Intune® App Protection Policies</a>.</p>', 'refs' => [ 'MobileDeviceManagement$Intune' => '<p>Configuration settings for use with Microsoft Intune. For information about using Connector for SCEP for Microsoft Intune, see <a href="https://docs.aws.amazon.com/privateca/latest/userguide/scep-connector.htmlconnector-for-scep-intune.html">Using Connector for SCEP for Microsoft Intune</a>.</p>', ], ], 'ListChallengeMetadataRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListChallengeMetadataResponse' => [ 'base' => NULL, 'refs' => [], ], 'ListConnectorsRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListConnectorsResponse' => [ 'base' => NULL, 'refs' => [], ], 'ListTagsForResourceRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListTagsForResourceResponse' => [ 'base' => NULL, 'refs' => [], ], 'MaxResults' => [ 'base' => NULL, 'refs' => [ 'ListChallengeMetadataRequest$MaxResults' => '<p>The maximum number of objects that you want Connector for SCEP to return for this request. If more objects are available, in the response, Connector for SCEP provides a <code>NextToken</code> value that you can use in a subsequent call to get the next batch of objects.</p>', 'ListConnectorsRequest$MaxResults' => '<p>The maximum number of objects that you want Connector for SCEP to return for this request. If more objects are available, in the response, Connector for SCEP provides a <code>NextToken</code> value that you can use in a subsequent call to get the next batch of objects.</p>', ], ], 'MobileDeviceManagement' => [ 'base' => '<p>If you don\'t supply a value, by default Connector for SCEP creates a connector for general-purpose use. A general-purpose connector is designed to work with clients or endpoints that support the SCEP protocol, except Connector for SCEP for Microsoft Intune. For information about considerations and limitations with using Connector for SCEP, see <a href="https://docs.aws.amazon.com/privateca/latest/userguide/scep-connector.htmlc4scep-considerations-limitations.html">Considerations and Limitations</a>.</p> <p>If you provide an <code>IntuneConfiguration</code>, Connector for SCEP creates a connector for use with Microsoft Intune, and you manage the challenge passwords using Microsoft Intune. For more information, see <a href="https://docs.aws.amazon.com/privateca/latest/userguide/scep-connector.htmlconnector-for-scep-intune.html">Using Connector for SCEP for Microsoft Intune</a>.</p>', 'refs' => [ 'Connector$MobileDeviceManagement' => '<p>Contains settings relevant to the mobile device management system that you chose for the connector. If you didn\'t configure <code>MobileDeviceManagement</code>, then the connector is for general-purpose use and this object is empty.</p>', 'ConnectorSummary$MobileDeviceManagement' => '<p>Contains settings relevant to the mobile device management system that you chose for the connector. If you didn\'t configure <code>MobileDeviceManagement</code>, then the connector is for general-purpose use and this object is empty.</p>', 'CreateConnectorRequest$MobileDeviceManagement' => '<p>If you don\'t supply a value, by default Connector for SCEP creates a connector for general-purpose use. A general-purpose connector is designed to work with clients or endpoints that support the SCEP protocol, except Connector for SCEP for Microsoft Intune. With connectors for general-purpose use, you manage SCEP challenge passwords using Connector for SCEP. For information about considerations and limitations with using Connector for SCEP, see <a href="https://docs.aws.amazon.com/privateca/latest/userguide/scep-connector.htmlc4scep-considerations-limitations.html">Considerations and Limitations</a>.</p> <p>If you provide an <code>IntuneConfiguration</code>, Connector for SCEP creates a connector for use with Microsoft Intune, and you manage the challenge passwords using Microsoft Intune. For more information, see <a href="https://docs.aws.amazon.com/privateca/latest/userguide/scep-connector.htmlconnector-for-scep-intune.html">Using Connector for SCEP for Microsoft Intune</a>.</p>', ], ], 'NextToken' => [ 'base' => NULL, 'refs' => [ 'ListChallengeMetadataRequest$NextToken' => '<p>When you request a list of objects with a <code>MaxResults</code> setting, if the number of objects that are still available for retrieval exceeds the maximum you requested, Connector for SCEP returns a <code>NextToken</code> value in the response. To retrieve the next batch of objects, use the token returned from the prior request in your next request.</p>', 'ListChallengeMetadataResponse$NextToken' => '<p>When you request a list of objects with a <code>MaxResults</code> setting, if the number of objects that are still available for retrieval exceeds the maximum you requested, Connector for SCEP returns a <code>NextToken</code> value in the response. To retrieve the next batch of objects, use the token returned from the prior request in your next request.</p>', 'ListConnectorsRequest$NextToken' => '<p>When you request a list of objects with a <code>MaxResults</code> setting, if the number of objects that are still available for retrieval exceeds the maximum you requested, Connector for SCEP returns a <code>NextToken</code> value in the response. To retrieve the next batch of objects, use the token returned from the prior request in your next request.</p>', 'ListConnectorsResponse$NextToken' => '<p>When you request a list of objects with a <code>MaxResults</code> setting, if the number of objects that are still available for retrieval exceeds the maximum you requested, Connector for SCEP returns a <code>NextToken</code> value in the response. To retrieve the next batch of objects, use the token returned from the prior request in your next request.</p>', ], ], 'OpenIdConfiguration' => [ 'base' => '<p>Contains OpenID Connect (OIDC) parameters for use with Microsoft Intune. For more information about using Connector for SCEP for Microsoft Intune, see <a href="https://docs.aws.amazon.com/privateca/latest/userguide/scep-connector.htmlconnector-for-scep-intune.html">Using Connector for SCEP for Microsoft Intune</a>.</p>', 'refs' => [ 'Connector$OpenIdConfiguration' => '<p>Contains OpenID Connect (OIDC) parameters for use with Connector for SCEP for Microsoft Intune. For more information about using Connector for SCEP for Microsoft Intune, see <a href="https://docs.aws.amazon.com/privateca/latest/userguide/scep-connector.htmlconnector-for-scep-intune.html">Using Connector for SCEP for Microsoft Intune</a>.</p>', 'ConnectorSummary$OpenIdConfiguration' => '<p>Contains OpenID Connect (OIDC) parameters for use with Microsoft Intune.</p>', ], ], 'ResourceNotFoundException' => [ 'base' => '<p>The operation tried to access a nonexistent resource. The resource might be incorrectly specified, or it might have a status other than <code>ACTIVE</code>.</p>', 'refs' => [], ], 'SensitiveString' => [ 'base' => NULL, 'refs' => [ 'Challenge$Password' => '<p>The SCEP challenge password, in UUID format.</p>', 'GetChallengePasswordResponse$Password' => '<p>The SCEP challenge password.</p>', ], ], 'ServiceQuotaExceededException' => [ 'base' => '<p>The request would cause a service quota to be exceeded.</p>', 'refs' => [], ], 'String' => [ 'base' => NULL, 'refs' => [ 'AccessDeniedException$Message' => NULL, 'BadRequestException$Message' => NULL, 'ConflictException$Message' => NULL, 'ConflictException$ResourceId' => '<p>The identifier of the Amazon Web Services resource.</p>', 'ConflictException$ResourceType' => '<p>The resource type, which can be either <code>Connector</code> or <code>Challenge</code>.</p>', 'Connector$Endpoint' => '<p>The connector\'s HTTPS public SCEP URL.</p>', 'ConnectorSummary$Endpoint' => '<p>The connector\'s HTTPS public SCEP URL.</p>', 'InternalServerException$Message' => NULL, 'ListTagsForResourceRequest$ResourceArn' => '<p>The Amazon Resource Name (ARN) of the resource.</p>', 'OpenIdConfiguration$Issuer' => '<p>The issuer value to copy into your Microsoft Entra app registration\'s OIDC.</p>', 'OpenIdConfiguration$Subject' => '<p>The subject value to copy into your Microsoft Entra app registration\'s OIDC.</p>', 'OpenIdConfiguration$Audience' => '<p>The audience value to copy into your Microsoft Entra app registration\'s OIDC.</p>', 'ResourceNotFoundException$Message' => NULL, 'ResourceNotFoundException$ResourceId' => '<p>The identifier of the Amazon Web Services resource.</p>', 'ResourceNotFoundException$ResourceType' => '<p>The resource type, which can be either <code>Connector</code> or <code>Challenge</code>.</p>', 'ServiceQuotaExceededException$Message' => NULL, 'ServiceQuotaExceededException$ResourceType' => '<p>The resource type, which can be either <code>Connector</code> or <code>Challenge</code>.</p>', 'ServiceQuotaExceededException$ServiceCode' => '<p>Identifies the originating service.</p>', 'ServiceQuotaExceededException$QuotaCode' => '<p>The quota identifier.</p>', 'TagKeyList$member' => NULL, 'TagResourceRequest$ResourceArn' => '<p>The Amazon Resource Name (ARN) of the resource.</p>', 'Tags$key' => NULL, 'Tags$value' => NULL, 'ThrottlingException$Message' => NULL, 'UntagResourceRequest$ResourceArn' => '<p>The Amazon Resource Name (ARN) of the resource.</p>', 'ValidationException$Message' => NULL, ], ], 'TagKeyList' => [ 'base' => NULL, 'refs' => [ 'UntagResourceRequest$TagKeys' => '<p>Specifies a list of tag keys that you want to remove from the specified resources.</p>', ], ], 'TagResourceRequest' => [ 'base' => NULL, 'refs' => [], ], 'Tags' => [ 'base' => NULL, 'refs' => [ 'CreateChallengeRequest$Tags' => '<p>The key-value pairs to associate with the resource.</p>', 'CreateConnectorRequest$Tags' => '<p>The key-value pairs to associate with the resource.</p>', 'ListTagsForResourceResponse$Tags' => '<p>The key-value pairs to associate with the resource.</p>', 'TagResourceRequest$Tags' => '<p>The key-value pairs to associate with the resource.</p>', ], ], 'ThrottlingException' => [ 'base' => '<p>The limit on the number of requests per second was exceeded.</p>', 'refs' => [], ], 'Timestamp' => [ 'base' => NULL, 'refs' => [ 'Challenge$CreatedAt' => '<p>The date and time that the challenge was created.</p>', 'Challenge$UpdatedAt' => '<p>The date and time that the challenge was updated.</p>', 'ChallengeMetadata$CreatedAt' => '<p>The date and time that the connector was created.</p>', 'ChallengeMetadata$UpdatedAt' => '<p>The date and time that the connector was updated.</p>', 'ChallengeMetadataSummary$CreatedAt' => '<p>The date and time that the challenge was created.</p>', 'ChallengeMetadataSummary$UpdatedAt' => '<p>The date and time that the challenge was updated.</p>', 'Connector$CreatedAt' => '<p>The date and time that the connector was created.</p>', 'Connector$UpdatedAt' => '<p>The date and time that the connector was updated.</p>', 'ConnectorSummary$CreatedAt' => '<p>The date and time that the challenge was created.</p>', 'ConnectorSummary$UpdatedAt' => '<p>The date and time that the challenge was updated.</p>', ], ], 'UntagResourceRequest' => [ 'base' => NULL, 'refs' => [], ], 'ValidationException' => [ 'base' => '<p>An input validation error occurred. For example, invalid characters in a name tag, or an invalid pagination token.</p>', 'refs' => [], ], 'ValidationExceptionReason' => [ 'base' => NULL, 'refs' => [ 'ValidationException$Reason' => '<p>The reason for the validation error, if available. The service doesn\'t return a reason for every validation exception.</p>', ], ], ],];
