<?php
// This file was auto-generated from sdk-root/src/data/support-app/2021-08-20/docs-2.json
return [ 'version' => '2.0', 'service' => '<p><fullname>Amazon Web Services Support App in Slack</fullname> <p>You can use the Amazon Web Services Support App in Slack API to manage your support cases in Slack for your Amazon Web Services account. After you configure your Slack workspace and channel with the Amazon Web Services Support App, you can perform the following tasks directly in your Slack channel:</p> <ul> <li> <p>Create, search, update, and resolve your support cases</p> </li> <li> <p>Request service quota increases for your account</p> </li> <li> <p>Invite Amazon Web Services Support agents to your channel so that you can chat directly about your support cases</p> </li> </ul> <p>For more information about how to perform these actions in Slack, see the following documentation in the <i>Amazon Web Services Support User Guide</i>:</p> <ul> <li> <p> <a href="https://docs.aws.amazon.com/awssupport/latest/user/aws-support-app-for-slack.html">Amazon Web Services Support App in Slack</a> </p> </li> <li> <p> <a href="https://docs.aws.amazon.com/awssupport/latest/user/joining-a-live-chat-session.html">Joining a live chat session with Amazon Web Services Support</a> </p> </li> <li> <p> <a href="https://docs.aws.amazon.com/awssupport/latest/user/service-quota-increase.html">Requesting service quota increases</a> </p> </li> <li> <p> <a href="https://docs.aws.amazon.com/awssupport/latest/user/support-app-commands.html">Amazon Web Services Support App commands in Slack</a> </p> </li> </ul> <p>You can also use the Amazon Web Services Management Console instead of the Amazon Web Services Support App API to manage your Slack configurations. For more information, see <a href="https://docs.aws.amazon.com/awssupport/latest/user/authorize-slack-workspace.html">Authorize a Slack workspace to enable the Amazon Web Services Support App</a>.</p> <note> <ul> <li> <p>You must have a Business or Enterprise Support plan to use the Amazon Web Services Support App API. </p> </li> <li> <p>For more information about the Amazon Web Services Support App endpoints, see the <a href="https://docs.aws.amazon.com/general/latest/gr/awssupport.html#awssupport_app_region">Amazon Web Services Support App in Slack endpoints</a> in the <i>Amazon Web Services General Reference</i>.</p> </li> </ul> </note></p>', 'operations' => [ 'CreateSlackChannelConfiguration' => '<p>Creates a Slack channel configuration for your Amazon Web Services account.</p> <note> <ul> <li> <p>You can add up to 5 Slack workspaces for your account.</p> </li> <li> <p>You can add up to 20 Slack channels for your account.</p> </li> </ul> </note> <p>A Slack channel can have up to 100 Amazon Web Services accounts. This means that only 100 accounts can add the same Slack channel to the Amazon Web Services Support App. We recommend that you only add the accounts that you need to manage support cases for your organization. This can reduce the notifications about case updates that you receive in the Slack channel.</p> <note> <p>We recommend that you choose a private Slack channel so that only members in that channel have read and write access to your support cases. Anyone in your Slack channel can create, update, or resolve support cases for your account. Users require an invitation to join private channels. </p> </note>', 'DeleteAccountAlias' => '<p>Deletes an alias for an Amazon Web Services account ID. The alias appears in the Amazon Web Services Support App page of the Amazon Web Services Support Center. The alias also appears in Slack messages from the Amazon Web Services Support App.</p>', 'DeleteSlackChannelConfiguration' => '<p>Deletes a Slack channel configuration from your Amazon Web Services account. This operation doesn\'t delete your Slack channel.</p>', 'DeleteSlackWorkspaceConfiguration' => '<p>Deletes a Slack workspace configuration from your Amazon Web Services account. This operation doesn\'t delete your Slack workspace.</p>', 'GetAccountAlias' => '<p>Retrieves the alias from an Amazon Web Services account ID. The alias appears in the Amazon Web Services Support App page of the Amazon Web Services Support Center. The alias also appears in Slack messages from the Amazon Web Services Support App.</p>', 'ListSlackChannelConfigurations' => '<p>Lists the Slack channel configurations for an Amazon Web Services account.</p>', 'ListSlackWorkspaceConfigurations' => '<p>Lists the Slack workspace configurations for an Amazon Web Services account.</p>', 'PutAccountAlias' => '<p>Creates or updates an individual alias for each Amazon Web Services account ID. The alias appears in the Amazon Web Services Support App page of the Amazon Web Services Support Center. The alias also appears in Slack messages from the Amazon Web Services Support App.</p>', 'RegisterSlackWorkspaceForOrganization' => '<p>Registers a Slack workspace for your Amazon Web Services account. To call this API, your account must be part of an organization in Organizations.</p> <p>If you\'re the <i>management account</i> and you want to register Slack workspaces for your organization, you must complete the following tasks:</p> <ol> <li> <p>Sign in to the <a href="https://console.aws.amazon.com/support/app">Amazon Web Services Support Center</a> and authorize the Slack workspaces where you want your organization to have access to. See <a href="https://docs.aws.amazon.com/awssupport/latest/user/authorize-slack-workspace.html">Authorize a Slack workspace</a> in the <i>Amazon Web Services Support User Guide</i>.</p> </li> <li> <p>Call the <code>RegisterSlackWorkspaceForOrganization</code> API to authorize each Slack workspace for the organization.</p> </li> </ol> <p>After the management account authorizes the Slack workspace, member accounts can call this API to authorize the same Slack workspace for their individual accounts. Member accounts don\'t need to authorize the Slack workspace manually through the <a href="https://console.aws.amazon.com/support/app">Amazon Web Services Support Center</a>.</p> <p>To use the Amazon Web Services Support App, each account must then complete the following tasks:</p> <ul> <li> <p>Create an Identity and Access Management (IAM) role with the required permission. For more information, see <a href="https://docs.aws.amazon.com/awssupport/latest/user/support-app-permissions.html">Managing access to the Amazon Web Services Support App</a>.</p> </li> <li> <p>Configure a Slack channel to use the Amazon Web Services Support App for support cases for that account. For more information, see <a href="https://docs.aws.amazon.com/awssupport/latest/user/add-your-slack-channel.html">Configuring a Slack channel</a>.</p> </li> </ul>', 'UpdateSlackChannelConfiguration' => '<p>Updates the configuration for a Slack channel, such as case update notifications.</p>', ], 'shapes' => [ 'AccessDeniedException' => [ 'base' => '<p>You don\'t have sufficient permission to perform this action.</p>', 'refs' => [], ], 'AccountType' => [ 'base' => NULL, 'refs' => [ 'RegisterSlackWorkspaceForOrganizationResult$accountType' => '<p>Whether the Amazon Web Services account is a management or member account that\'s part of an organization in Organizations.</p>', ], ], 'ConflictException' => [ 'base' => '<p>Your request has a conflict. For example, you might receive this error if you try the following:</p> <ul> <li> <p>Add, update, or delete a Slack channel configuration before you add a Slack workspace to your Amazon Web Services account.</p> </li> <li> <p>Add a Slack channel configuration that already exists in your Amazon Web Services account.</p> </li> <li> <p>Delete a Slack channel configuration for a live chat channel.</p> </li> <li> <p>Delete a Slack workspace from your Amazon Web Services account that has an active live chat channel.</p> </li> <li> <p>Call the <code>RegisterSlackWorkspaceForOrganization</code> API from an Amazon Web Services account that doesn\'t belong to an organization.</p> </li> <li> <p>Call the <code>RegisterSlackWorkspaceForOrganization</code> API from a member account, but the management account hasn\'t registered that workspace yet for the organization.</p> </li> </ul>', 'refs' => [], ], 'CreateSlackChannelConfigurationRequest' => [ 'base' => NULL, 'refs' => [], ], 'CreateSlackChannelConfigurationResult' => [ 'base' => NULL, 'refs' => [], ], 'DeleteAccountAliasRequest' => [ 'base' => NULL, 'refs' => [], ], 'DeleteAccountAliasResult' => [ 'base' => NULL, 'refs' => [], ], 'DeleteSlackChannelConfigurationRequest' => [ 'base' => NULL, 'refs' => [], ], 'DeleteSlackChannelConfigurationResult' => [ 'base' => NULL, 'refs' => [], ], 'DeleteSlackWorkspaceConfigurationRequest' => [ 'base' => NULL, 'refs' => [], ], 'DeleteSlackWorkspaceConfigurationResult' => [ 'base' => NULL, 'refs' => [], ], 'GetAccountAliasRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetAccountAliasResult' => [ 'base' => NULL, 'refs' => [], ], 'InternalServerException' => [ 'base' => '<p>We can’t process your request right now because of a server issue. Try again later.</p>', 'refs' => [], ], 'ListSlackChannelConfigurationsRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListSlackChannelConfigurationsResult' => [ 'base' => NULL, 'refs' => [], ], 'ListSlackWorkspaceConfigurationsRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListSlackWorkspaceConfigurationsResult' => [ 'base' => NULL, 'refs' => [], ], 'NotificationSeverityLevel' => [ 'base' => NULL, 'refs' => [ 'CreateSlackChannelConfigurationRequest$notifyOnCaseSeverity' => '<p>The case severity for a support case that you want to receive notifications.</p> <p>If you specify <code>high</code> or <code>all</code>, you must specify <code>true</code> for at least one of the following parameters:</p> <ul> <li> <p> <code>notifyOnAddCorrespondenceToCase</code> </p> </li> <li> <p> <code>notifyOnCreateOrReopenCase</code> </p> </li> <li> <p> <code>notifyOnResolveCase</code> </p> </li> </ul> <p>If you specify <code>none</code>, the following parameters must be null or <code>false</code>:</p> <ul> <li> <p> <code>notifyOnAddCorrespondenceToCase</code> </p> </li> <li> <p> <code>notifyOnCreateOrReopenCase</code> </p> </li> <li> <p> <code>notifyOnResolveCase</code> </p> </li> </ul> <note> <p>If you don\'t specify these parameters in your request, they default to <code>false</code>.</p> </note>', 'SlackChannelConfiguration$notifyOnCaseSeverity' => '<p>The case severity for a support case that you want to receive notifications.</p>', 'UpdateSlackChannelConfigurationRequest$notifyOnCaseSeverity' => '<p>The case severity for a support case that you want to receive notifications.</p> <p>If you specify <code>high</code> or <code>all</code>, at least one of the following parameters must be <code>true</code>:</p> <ul> <li> <p> <code>notifyOnAddCorrespondenceToCase</code> </p> </li> <li> <p> <code>notifyOnCreateOrReopenCase</code> </p> </li> <li> <p> <code>notifyOnResolveCase</code> </p> </li> </ul> <p>If you specify <code>none</code>, any of the following parameters that you specify in your request must be <code>false</code>:</p> <ul> <li> <p> <code>notifyOnAddCorrespondenceToCase</code> </p> </li> <li> <p> <code>notifyOnCreateOrReopenCase</code> </p> </li> <li> <p> <code>notifyOnResolveCase</code> </p> </li> </ul> <note> <p>If you don\'t specify these parameters in your request, the Amazon Web Services Support App uses the current values by default.</p> </note>', 'UpdateSlackChannelConfigurationResult$notifyOnCaseSeverity' => '<p>The case severity for a support case that you want to receive notifications.</p>', ], ], 'PutAccountAliasRequest' => [ 'base' => NULL, 'refs' => [], ], 'PutAccountAliasResult' => [ 'base' => NULL, 'refs' => [], ], 'RegisterSlackWorkspaceForOrganizationRequest' => [ 'base' => NULL, 'refs' => [], ], 'RegisterSlackWorkspaceForOrganizationResult' => [ 'base' => NULL, 'refs' => [], ], 'ResourceNotFoundException' => [ 'base' => '<p>The specified resource is missing or doesn\'t exist, such as an account alias, Slack channel configuration, or Slack workspace configuration.</p>', 'refs' => [], ], 'ServiceQuotaExceededException' => [ 'base' => '<p>Your Service Quotas request exceeds the quota for the service. For example, your Service Quotas request to Amazon Web Services Support App might exceed the maximum number of workspaces or channels per account, or the maximum number of accounts per Slack channel.</p>', 'refs' => [], ], 'SlackChannelConfiguration' => [ 'base' => '<p>The configuration for a Slack channel that you added for your Amazon Web Services account.</p>', 'refs' => [ 'slackChannelConfigurationList$member' => NULL, ], ], 'SlackWorkspaceConfiguration' => [ 'base' => '<p>The configuration for a Slack workspace that you added to an Amazon Web Services account.</p>', 'refs' => [ 'SlackWorkspaceConfigurationList$member' => NULL, ], ], 'SlackWorkspaceConfigurationList' => [ 'base' => NULL, 'refs' => [ 'ListSlackWorkspaceConfigurationsResult$slackWorkspaceConfigurations' => '<p>The configurations for a Slack workspace.</p>', ], ], 'UpdateSlackChannelConfigurationRequest' => [ 'base' => NULL, 'refs' => [], ], 'UpdateSlackChannelConfigurationResult' => [ 'base' => NULL, 'refs' => [], ], 'ValidationException' => [ 'base' => '<p>Your request input doesn\'t meet the constraints that the Amazon Web Services Support App specifies.</p>', 'refs' => [], ], 'awsAccountAlias' => [ 'base' => NULL, 'refs' => [ 'GetAccountAliasResult$accountAlias' => '<p>An alias or short name for an Amazon Web Services account.</p>', 'PutAccountAliasRequest$accountAlias' => '<p>An alias or short name for an Amazon Web Services account.</p>', ], ], 'booleanValue' => [ 'base' => NULL, 'refs' => [ 'CreateSlackChannelConfigurationRequest$notifyOnAddCorrespondenceToCase' => '<p>Whether you want to get notified when a support case has a new correspondence.</p>', 'CreateSlackChannelConfigurationRequest$notifyOnCreateOrReopenCase' => '<p>Whether you want to get notified when a support case is created or reopened.</p>', 'CreateSlackChannelConfigurationRequest$notifyOnResolveCase' => '<p>Whether you want to get notified when a support case is resolved.</p>', 'SlackChannelConfiguration$notifyOnAddCorrespondenceToCase' => '<p>Whether you want to get notified when a support case has a new correspondence.</p>', 'SlackChannelConfiguration$notifyOnCreateOrReopenCase' => '<p>Whether you want to get notified when a support case is created or reopened.</p>', 'SlackChannelConfiguration$notifyOnResolveCase' => '<p>Whether you want to get notified when a support case is resolved.</p>', 'SlackWorkspaceConfiguration$allowOrganizationMemberAccount' => '<p>Whether to allow member accounts to authorize Slack workspaces. Member accounts must be part of an organization in Organizations.</p>', 'UpdateSlackChannelConfigurationRequest$notifyOnAddCorrespondenceToCase' => '<p>Whether you want to get notified when a support case has a new correspondence.</p>', 'UpdateSlackChannelConfigurationRequest$notifyOnCreateOrReopenCase' => '<p>Whether you want to get notified when a support case is created or reopened.</p>', 'UpdateSlackChannelConfigurationRequest$notifyOnResolveCase' => '<p>Whether you want to get notified when a support case is resolved.</p>', 'UpdateSlackChannelConfigurationResult$notifyOnAddCorrespondenceToCase' => '<p>Whether you want to get notified when a support case has a new correspondence.</p>', 'UpdateSlackChannelConfigurationResult$notifyOnCreateOrReopenCase' => '<p>Whether you want to get notified when a support case is created or reopened.</p>', 'UpdateSlackChannelConfigurationResult$notifyOnResolveCase' => '<p>Whether you want to get notified when a support case is resolved.</p>', ], ], 'channelId' => [ 'base' => NULL, 'refs' => [ 'CreateSlackChannelConfigurationRequest$channelId' => '<p>The channel ID in Slack. This ID identifies a channel within a Slack workspace.</p>', 'DeleteSlackChannelConfigurationRequest$channelId' => '<p>The channel ID in Slack. This ID identifies a channel within a Slack workspace.</p>', 'SlackChannelConfiguration$channelId' => '<p>The channel ID in Slack. This ID identifies a channel within a Slack workspace.</p>', 'UpdateSlackChannelConfigurationRequest$channelId' => '<p>The channel ID in Slack. This ID identifies a channel within a Slack workspace.</p>', 'UpdateSlackChannelConfigurationResult$channelId' => '<p>The channel ID in Slack. This ID identifies a channel within a Slack workspace.</p>', ], ], 'channelName' => [ 'base' => NULL, 'refs' => [ 'CreateSlackChannelConfigurationRequest$channelName' => '<p>The name of the Slack channel that you configure for the Amazon Web Services Support App.</p>', 'SlackChannelConfiguration$channelName' => '<p>The name of the Slack channel that you configured with the Amazon Web Services Support App for your Amazon Web Services account.</p>', 'UpdateSlackChannelConfigurationRequest$channelName' => '<p>The Slack channel name that you want to update.</p>', 'UpdateSlackChannelConfigurationResult$channelName' => '<p>The name of the Slack channel that you configure for the Amazon Web Services Support App.</p>', ], ], 'errorMessage' => [ 'base' => NULL, 'refs' => [ 'AccessDeniedException$message' => NULL, 'ConflictException$message' => NULL, 'InternalServerException$message' => NULL, 'ResourceNotFoundException$message' => NULL, 'ServiceQuotaExceededException$message' => NULL, 'ValidationException$message' => NULL, ], ], 'paginationToken' => [ 'base' => NULL, 'refs' => [ 'ListSlackChannelConfigurationsRequest$nextToken' => '<p>If the results of a search are large, the API only returns a portion of the results and includes a <code>nextToken</code> pagination token in the response. To retrieve the next batch of results, reissue the search request and include the returned token. When the API returns the last set of results, the response doesn\'t include a pagination token value.</p>', 'ListSlackChannelConfigurationsResult$nextToken' => '<p>The point where pagination should resume when the response returns only partial results.</p>', 'ListSlackWorkspaceConfigurationsRequest$nextToken' => '<p>If the results of a search are large, the API only returns a portion of the results and includes a <code>nextToken</code> pagination token in the response. To retrieve the next batch of results, reissue the search request and include the returned token. When the API returns the last set of results, the response doesn\'t include a pagination token value.</p>', 'ListSlackWorkspaceConfigurationsResult$nextToken' => '<p>The point where pagination should resume when the response returns only partial results.</p>', ], ], 'roleArn' => [ 'base' => NULL, 'refs' => [ 'CreateSlackChannelConfigurationRequest$channelRoleArn' => '<p>The Amazon Resource Name (ARN) of an IAM role that you want to use to perform operations on Amazon Web Services. For more information, see <a href="https://docs.aws.amazon.com/awssupport/latest/user/support-app-permissions.html">Managing access to the Amazon Web Services Support App</a> in the <i>Amazon Web Services Support User Guide</i>.</p>', 'SlackChannelConfiguration$channelRoleArn' => '<p>The Amazon Resource Name (ARN) of an IAM role that you want to use to perform operations on Amazon Web Services. For more information, see <a href="https://docs.aws.amazon.com/awssupport/latest/user/support-app-permissions.html">Managing access to the Amazon Web Services Support App</a> in the <i>Amazon Web Services Support User Guide</i>.</p>', 'UpdateSlackChannelConfigurationRequest$channelRoleArn' => '<p>The Amazon Resource Name (ARN) of an IAM role that you want to use to perform operations on Amazon Web Services. For more information, see <a href="https://docs.aws.amazon.com/awssupport/latest/user/support-app-permissions.html">Managing access to the Amazon Web Services Support App</a> in the <i>Amazon Web Services Support User Guide</i>.</p>', 'UpdateSlackChannelConfigurationResult$channelRoleArn' => '<p>The Amazon Resource Name (ARN) of an IAM role that you want to use to perform operations on Amazon Web Services. For more information, see <a href="https://docs.aws.amazon.com/awssupport/latest/user/support-app-permissions.html">Managing access to the Amazon Web Services Support App</a> in the <i>Amazon Web Services Support User Guide</i>.</p>', ], ], 'slackChannelConfigurationList' => [ 'base' => NULL, 'refs' => [ 'ListSlackChannelConfigurationsResult$slackChannelConfigurations' => '<p>The configurations for a Slack channel.</p>', ], ], 'teamId' => [ 'base' => NULL, 'refs' => [ 'CreateSlackChannelConfigurationRequest$teamId' => '<p>The team ID in Slack. This ID uniquely identifies a Slack workspace, such as <code>T012ABCDEFG</code>.</p>', 'DeleteSlackChannelConfigurationRequest$teamId' => '<p>The team ID in Slack. This ID uniquely identifies a Slack workspace, such as <code>T012ABCDEFG</code>.</p>', 'DeleteSlackWorkspaceConfigurationRequest$teamId' => '<p>The team ID in Slack. This ID uniquely identifies a Slack workspace, such as <code>T012ABCDEFG</code>.</p>', 'RegisterSlackWorkspaceForOrganizationRequest$teamId' => '<p>The team ID in Slack. This ID uniquely identifies a Slack workspace, such as <code>T012ABCDEFG</code>. Specify the Slack workspace that you want to use for your organization.</p>', 'RegisterSlackWorkspaceForOrganizationResult$teamId' => '<p>The team ID in Slack. This ID uniquely identifies a Slack workspace, such as <code>T012ABCDEFG</code>.</p>', 'SlackChannelConfiguration$teamId' => '<p>The team ID in Slack. This ID uniquely identifies a Slack workspace, such as <code>T012ABCDEFG</code>.</p>', 'SlackWorkspaceConfiguration$teamId' => '<p>The team ID in Slack. This ID uniquely identifies a Slack workspace, such as <code>T012ABCDEFG</code>.</p>', 'UpdateSlackChannelConfigurationRequest$teamId' => '<p>The team ID in Slack. This ID uniquely identifies a Slack workspace, such as <code>T012ABCDEFG</code>.</p>', 'UpdateSlackChannelConfigurationResult$teamId' => '<p>The team ID in Slack. This ID uniquely identifies a Slack workspace, such as <code>T012ABCDEFG</code>.</p>', ], ], 'teamName' => [ 'base' => NULL, 'refs' => [ 'RegisterSlackWorkspaceForOrganizationResult$teamName' => '<p>The name of the Slack workspace.</p>', 'SlackWorkspaceConfiguration$teamName' => '<p>The name of the Slack workspace.</p>', ], ], ],];
