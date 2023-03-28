<?php
// This file was auto-generated from sdk-root/src/data/route53-recovery-control-config/2020-11-02/docs-2.json
return [ 'version' => '2.0', 'service' => '<p>Recovery Control Configuration API Reference for Amazon Route 53 Application Recovery Controller</p>', 'operations' => [ 'CreateCluster' => '<p>Create a new cluster. A cluster is a set of redundant Regional endpoints against which you can run API calls to update or get the state of one or more routing controls. Each cluster has a name, status, Amazon Resource Name (ARN), and an array of the five cluster endpoints (one for each supported Amazon Web Services Region) that you can use with API calls to the cluster data plane.</p>', 'CreateControlPanel' => '<p>Creates a new control panel. A control panel represents a group of routing controls that can be changed together in a single transaction. You can use a control panel to centrally view the operational status of applications across your organization, and trigger multi-app failovers in a single transaction, for example, to fail over an Availability Zone or Amazon Web Services Region.</p>', 'CreateRoutingControl' => '<p>Creates a new routing control.</p> <p>A routing control has one of two states: ON and OFF. You can map the routing control state to the state of an Amazon Route 53 health check, which can be used to control traffic routing.</p> <p>To get or update the routing control state, see the Recovery Cluster (data plane) API actions for Amazon Route 53 Application Recovery Controller.</p>', 'CreateSafetyRule' => '<p>Creates a safety rule in a control panel. Safety rules let you add safeguards around changing routing control states, and for enabling and disabling routing controls, to help prevent unexpected outcomes.</p> <p>There are two types of safety rules: assertion rules and gating rules.</p> <p>Assertion rule: An assertion rule enforces that, when you change a routing control state, that a certain criteria is met. For example, the criteria might be that at least one routing control state is On after the transaction so that traffic continues to flow to at least one cell for the application. This ensures that you avoid a fail-open scenario.</p> <p>Gating rule: A gating rule lets you configure a gating routing control as an overall "on/off" switch for a group of routing controls. Or, you can configure more complex gating scenarios, for example by configuring multiple gating routing controls.</p> <p>For more information, see <a href="https://docs.aws.amazon.com/r53recovery/latest/dg/routing-control.safety-rules.html">Safety rules</a> in the Amazon Route 53 Application Recovery Controller Developer Guide.</p>', 'DeleteCluster' => '<p>Delete a cluster.</p>', 'DeleteControlPanel' => '<p>Deletes a control panel.</p>', 'DeleteRoutingControl' => '<p>Deletes a routing control.</p>', 'DeleteSafetyRule' => '<p>Deletes a safety rule.</p>/&gt;', 'DescribeCluster' => '<p>Display the details about a cluster. The response includes the cluster name, endpoints, status, and Amazon Resource Name (ARN).</p>', 'DescribeControlPanel' => '<p>Displays details about a control panel.</p>', 'DescribeRoutingControl' => '<p>Displays details about a routing control. A routing control has one of two states: ON and OFF. You can map the routing control state to the state of an Amazon Route 53 health check, which can be used to control routing.</p> <p>To get or update the routing control state, see the Recovery Cluster (data plane) API actions for Amazon Route 53 Application Recovery Controller.</p>', 'DescribeSafetyRule' => '<p>Returns information about a safety rule.</p>', 'ListAssociatedRoute53HealthChecks' => '<p>Returns an array of all Amazon Route 53 health checks associated with a specific routing control.</p>', 'ListClusters' => '<p>Returns an array of all the clusters in an account.</p>', 'ListControlPanels' => '<p>Returns an array of control panels in an account or in a cluster.</p>', 'ListRoutingControls' => '<p>Returns an array of routing controls for a control panel. A routing control is an Amazon Route 53 Application Recovery Controller construct that has one of two states: ON and OFF. You can map the routing control state to the state of an Amazon Route 53 health check, which can be used to control routing.</p>', 'ListSafetyRules' => '<p>List the safety rules (the assertion rules and gating rules) that you\'ve defined for the routing controls in a control panel.</p>', 'ListTagsForResource' => '<p>Lists the tags for a resource.</p>', 'TagResource' => '<p>Adds a tag to a resource.</p>', 'UntagResource' => '<p>Removes a tag from a resource.</p>', 'UpdateControlPanel' => '<p>Updates a control panel. The only update you can make to a control panel is to change the name of the control panel.</p>', 'UpdateRoutingControl' => '<p>Updates a routing control. You can only update the name of the routing control. To get or update the routing control state, see the Recovery Cluster (data plane) API actions for Amazon Route 53 Application Recovery Controller.</p>', 'UpdateSafetyRule' => '<p>Update a safety rule (an assertion rule or gating rule). You can only update the name and the waiting period for a safety rule. To make other updates, delete the safety rule and create a new one.</p>', ], 'shapes' => [ 'AccessDeniedException' => [ 'base' => '<p>403 response - You do not have sufficient access to perform this action.</p>', 'refs' => [], ], 'AssertionRule' => [ 'base' => '<p>An assertion rule enforces that, when you change a routing control state, that the criteria that you set in the rule configuration is met. Otherwise, the change to the routing control is not accepted. For example, the criteria might be that at least one routing control state is On after the transaction so that traffic continues to flow to at least one cell for the application. This ensures that you avoid a fail-open scenario.</p>', 'refs' => [ 'CreateSafetyRuleResponse$AssertionRule' => '<p>The assertion rule created.</p>', 'DescribeSafetyRuleResponse$AssertionRule' => '<p>The assertion rule in the response.</p>', 'Rule$ASSERTION' => '<p>An assertion rule enforces that, when a routing control state is changed, the criteria set by the rule configuration is met. Otherwise, the change to the routing control state is not accepted. For example, the criteria might be that at least one routing control state is On after the transaction so that traffic continues to flow to at least one cell for the application. This ensures that you avoid a fail-open scenario.</p>', 'UpdateSafetyRuleResponse$AssertionRule' => '<p>The assertion rule updated.</p>', ], ], 'AssertionRuleUpdate' => [ 'base' => '<p>An update to an assertion rule. You can update the name or the evaluation period (wait period). If you don\'t specify one of the items to update, the item is unchanged.</p>', 'refs' => [ 'UpdateSafetyRuleRequest$AssertionRuleUpdate' => '<p>The assertion rule to update.</p>', ], ], 'Cluster' => [ 'base' => '<p>A set of five redundant Regional endpoints against which you can execute API calls to update or get the state of routing controls. You can host multiple control panels and routing controls on one cluster.</p>', 'refs' => [ 'CreateClusterResponse$Cluster' => '<p>The cluster that was created.</p>', 'DescribeClusterResponse$Cluster' => '<p>The cluster for the DescribeCluster request.</p>', '__listOfCluster$member' => NULL, ], ], 'ClusterEndpoint' => [ 'base' => '<p>A cluster endpoint. Specify an endpoint when you want to set or retrieve a routing control state in the cluster.</p>', 'refs' => [ '__listOfClusterEndpoint$member' => NULL, ], ], 'ConflictException' => [ 'base' => '<p>409 response - ConflictException. You might be using a predefined variable.</p>', 'refs' => [], ], 'ControlPanel' => [ 'base' => '<p>A control panel represents a group of routing controls that can be changed together in a single transaction.</p>', 'refs' => [ 'CreateControlPanelResponse$ControlPanel' => '<p>Information about a control panel.</p>', 'DescribeControlPanelResponse$ControlPanel' => '<p>Information about the control panel.</p>', 'UpdateControlPanelResponse$ControlPanel' => '<p>The control panel to update.</p>', '__listOfControlPanel$member' => NULL, ], ], 'CreateClusterRequest' => [ 'base' => '<p>The properties of a request to create a cluster.</p>', 'refs' => [], ], 'CreateClusterResponse' => [ 'base' => '<p>The result of a successful CreateCluster request.</p>', 'refs' => [], ], 'CreateControlPanelRequest' => [ 'base' => '<p>A request to create a control panel.</p>', 'refs' => [], ], 'CreateControlPanelResponse' => [ 'base' => '<p>The result of a successful CreateControlPanel request.</p>', 'refs' => [], ], 'CreateRoutingControlRequest' => [ 'base' => '<p>A request to create a routing control. If you don\'t specify ControlPanelArn, Amazon Route 53 Application Recovery Controller creates the routing control in DefaultControlPanel.</p>', 'refs' => [], ], 'CreateRoutingControlResponse' => [ 'base' => '<p>The result of a successful CreateRoutingControl request.</p>', 'refs' => [], ], 'CreateSafetyRuleRequest' => [ 'base' => '<p>Request to create a safety rule. You can create either an assertion rule or a gating rule with a CreateSafetyRuleRequest call.</p>', 'refs' => [], ], 'CreateSafetyRuleResponse' => [ 'base' => '<p>The result of a successful CreateSafetyRule request.</p>', 'refs' => [], ], 'DeleteClusterResponse' => [ 'base' => '<p>A successful DeleteCluster request returns no response.</p>', 'refs' => [], ], 'DeleteControlPanelResponse' => [ 'base' => '<p>A successful DeleteControlPanel request returns no response.</p>', 'refs' => [], ], 'DeleteRoutingControlResponse' => [ 'base' => '<p>A successful DeleteRoutingControl request returns no response.</p>', 'refs' => [], ], 'DeleteSafetyRuleResponse' => [ 'base' => '<p>There is an empty response when you delete a safety rule.</p>/&gt;', 'refs' => [], ], 'DescribeClusterResponse' => [ 'base' => '<p>The result of a successful DescribeCluster request.</p>', 'refs' => [], ], 'DescribeControlPanelResponse' => [ 'base' => '<p>The result of a successful DescribeControlPanel request.</p>', 'refs' => [], ], 'DescribeRoutingControlResponse' => [ 'base' => '<p>The result of a successful DescribeRoutingControl request.</p>', 'refs' => [], ], 'DescribeSafetyRuleResponse' => [ 'base' => '<p>The response when you send a DescribeSafetyRuleResponse request.</p>', 'refs' => [], ], 'GatingRule' => [ 'base' => '<p>A gating rule verifies that a gating routing control or set of gating routing controls, evaluates as true, based on a rule configuration that you specify, which allows a set of routing control state changes to complete.</p> <p>For example, if you specify one gating routing control and you set the Type in the rule configuration to OR, that indicates that you must set the gating routing control to On for the rule to evaluate as true; that is, for the gating control "switch" to be "On". When you do that, then you can update the routing control states for the target routing controls that you specify in the gating rule.</p>', 'refs' => [ 'CreateSafetyRuleResponse$GatingRule' => '<p>The gating rule created.</p>', 'DescribeSafetyRuleResponse$GatingRule' => '<p>The gating rule in the response.</p>', 'Rule$GATING' => '<p>A gating rule verifies that a gating routing control or set of gating routing controls, evaluates as true, based on a rule configuration that you specify, which allows a set of routing control state changes to complete.</p> <p>For example, if you specify one gating routing control and you set the Type in the rule configuration to OR, that indicates that you must set the gating routing control to On for the rule to evaluate as true; that is, for the gating control "switch" to be "On". When you do that, then you can update the routing control states for the target routing controls that you specify in the gating rule.</p>', 'UpdateSafetyRuleResponse$GatingRule' => '<p>The gating rule updated.</p>', ], ], 'GatingRuleUpdate' => [ 'base' => '<p>Update to a gating rule. You can update the name or the evaluation period (wait period). If you don\'t specify one of the items to update, the item is unchanged.</p>', 'refs' => [ 'UpdateSafetyRuleRequest$GatingRuleUpdate' => '<p>The gating rule to update.</p>', ], ], 'InternalServerException' => [ 'base' => '<p>500 response - InternalServiceError. Temporary service error. Retry the request.</p>', 'refs' => [], ], 'ListAssociatedRoute53HealthChecksResponse' => [ 'base' => '<p>The result of a successful ListAssociatedRoute53HealthChecks request.</p>', 'refs' => [], ], 'ListClustersResponse' => [ 'base' => '<p>The result of a successful ListClusters request.</p>', 'refs' => [], ], 'ListControlPanelsResponse' => [ 'base' => '<p>The result of a successful ListControlPanel request.</p>', 'refs' => [], ], 'ListRoutingControlsResponse' => [ 'base' => '<p>The result of a successful ListRoutingControl request.</p>', 'refs' => [], ], 'ListSafetyRulesResponse' => [ 'base' => '<p>The response to a ListSafetyRulesRequest.</p>', 'refs' => [], ], 'ListTagsForResourceResponse' => [ 'base' => '<p>The result of a successful ListTagsForResource request.</p>', 'refs' => [], ], 'NewAssertionRule' => [ 'base' => '<p>A new assertion rule for a control panel.</p>', 'refs' => [ 'CreateSafetyRuleRequest$AssertionRule' => '<p>The assertion rule requested.</p>', ], ], 'NewGatingRule' => [ 'base' => '<p>A new gating rule for a control panel.</p>', 'refs' => [ 'CreateSafetyRuleRequest$GatingRule' => '<p>The gating rule requested.</p>', ], ], 'ResourceNotFoundException' => [ 'base' => '<p>404 response - MalformedQueryString. The query string contains a syntax error or resource not found.</p>', 'refs' => [], ], 'RoutingControl' => [ 'base' => '<p>A routing control has one of two states: ON and OFF. You can map the routing control state to the state of an Amazon Route 53 health check, which can be used to control traffic routing.</p>', 'refs' => [ 'CreateRoutingControlResponse$RoutingControl' => '<p>The routing control that is created.</p>', 'DescribeRoutingControlResponse$RoutingControl' => '<p>Information about the routing control.</p>', 'UpdateRoutingControlResponse$RoutingControl' => '<p>The routing control that was updated.</p>', '__listOfRoutingControl$member' => NULL, ], ], 'Rule' => [ 'base' => '<p>A safety rule. A safety rule can be an assertion rule or a gating rule.</p>', 'refs' => [ '__listOfRule$member' => NULL, ], ], 'RuleConfig' => [ 'base' => '<p>The rule configuration for an assertion rule. That is, the criteria that you set for specific assertion controls (routing controls) that specify how many control states must be ON after a transaction completes.</p>', 'refs' => [ 'AssertionRule$RuleConfig' => '<p>The criteria that you set for specific assertion routing controls (AssertedControls) that designate how many routing control states must be ON as the result of a transaction. For example, if you have three assertion routing controls, you might specify ATLEAST 2 for your rule configuration. This means that at least two assertion routing control states must be ON, so that at least two Amazon Web Services Regions have traffic flowing to them.</p>', 'GatingRule$RuleConfig' => '<p>The criteria that you set for gating routing controls that designate how many of the routing control states must be ON to allow you to update target routing control states.</p>', 'NewAssertionRule$RuleConfig' => '<p>The criteria that you set for specific assertion controls (routing controls) that designate how many control states must be ON as the result of a transaction. For example, if you have three assertion controls, you might specify ATLEAST 2 for your rule configuration. This means that at least two assertion controls must be ON, so that at least two Amazon Web Services Regions have traffic flowing to them.</p>', 'NewGatingRule$RuleConfig' => '<p>The criteria that you set for specific gating controls (routing controls) that designate how many control states must be ON to allow you to change (set or unset) the target control states.</p>', ], ], 'RuleType' => [ 'base' => '<p>An enumerated type that determines how the evaluated rules are processed. RuleType can be one of the following:</p> <p>ATLEAST - At least N routing controls must be set. You specify N as the Threshold in the rule configuration.</p> <p>AND - All routing controls must be set. This is a shortcut for "At least N," where N is the total number of controls in the rule.</p> <p>OR - Any control must be set. This is a shortcut for "At least N," where N is 1.</p>', 'refs' => [ 'RuleConfig$Type' => '<p>A rule can be one of the following: ATLEAST, AND, or OR.</p>', ], ], 'ServiceQuotaExceededException' => [ 'base' => '<p>402 response - You attempted to create more resources than the service allows based on service quotas.</p>', 'refs' => [], ], 'Status' => [ 'base' => '<p>The deployment status of a resource. Status can be one of the following:</p> <p>PENDING: Amazon Route 53 Application Recovery Controller is creating the resource.</p> <p>DEPLOYED: The resource is deployed and ready to use.</p> <p>PENDING_DELETION: Amazon Route 53 Application Recovery Controller is deleting the resource.</p>', 'refs' => [ 'AssertionRule$Status' => '<p>The deployment status of an assertion rule. Status can be one of the following: PENDING, DEPLOYED, PENDING_DELETION.</p>', 'Cluster$Status' => '<p>Deployment status of a resource. Status can be one of the following: PENDING, DEPLOYED, PENDING_DELETION.</p>', 'ControlPanel$Status' => '<p>The deployment status of control panel. Status can be one of the following: PENDING, DEPLOYED, PENDING_DELETION.</p>', 'GatingRule$Status' => '<p>The deployment status of a gating rule. Status can be one of the following: PENDING, DEPLOYED, PENDING_DELETION.</p>', 'RoutingControl$Status' => '<p>The deployment status of a routing control. Status can be one of the following: PENDING, DEPLOYED, PENDING_DELETION.</p>', ], ], 'TagResourceRequest' => [ 'base' => '<p>Request to tag a resource.</p>', 'refs' => [], ], 'TagResourceResponse' => [ 'base' => '<p>The result of a successful TagResource request.</p>', 'refs' => [], ], 'ThrottlingException' => [ 'base' => '<p>429 response - LimitExceededException or TooManyRequestsException.</p>', 'refs' => [], ], 'UntagResourceResponse' => [ 'base' => '<p>The result of a successful UntagResource request.</p>', 'refs' => [], ], 'UpdateControlPanelRequest' => [ 'base' => '<p>Updates an existing control panel.</p>', 'refs' => [], ], 'UpdateControlPanelResponse' => [ 'base' => '<p>The result of a successful UpdateControlPanel request.</p>', 'refs' => [], ], 'UpdateRoutingControlRequest' => [ 'base' => '<p>A request to update a routing control.</p>', 'refs' => [], ], 'UpdateRoutingControlResponse' => [ 'base' => '<p>The result of a successful UpdateRoutingControl request.</p>', 'refs' => [], ], 'UpdateSafetyRuleRequest' => [ 'base' => '<p>Request to update a safety rule. A safety rule can be an assertion rule or a gating rule.</p>', 'refs' => [], ], 'UpdateSafetyRuleResponse' => [ 'base' => '<p>The result of a successful UpdateSafetyRule request.</p>', 'refs' => [], ], 'ValidationException' => [ 'base' => '<p>400 response - Multiple causes. For example, you might have a malformed query string and input parameter might be out of range, or you might have used parameters together incorrectly.</p>', 'refs' => [], ], '__boolean' => [ 'base' => NULL, 'refs' => [ 'ControlPanel$DefaultControlPanel' => '<p>A flag that Amazon Route 53 Application Recovery Controller sets to true to designate the default control panel for a cluster. When you create a cluster, Amazon Route 53 Application Recovery Controller creates a control panel, and sets this flag for that control panel. If you create a control panel yourself, this flag is set to false.</p>', 'RuleConfig$Inverted' => '<p>Logical negation of the rule. If the rule would usually evaluate true, it\'s evaluated as false, and vice versa.</p>', ], ], '__integer' => [ 'base' => NULL, 'refs' => [ 'AssertionRule$WaitPeriodMs' => '<p>An evaluation period, in milliseconds (ms), during which any request against the target routing controls will fail. This helps prevent "flapping" of state. The wait period is 5000 ms by default, but you can choose a custom value.</p>', 'AssertionRuleUpdate$WaitPeriodMs' => '<p>An evaluation period, in milliseconds (ms), during which any request against the target routing controls will fail. This helps prevent "flapping" of state. The wait period is 5000 ms by default, but you can choose a custom value.</p>', 'ControlPanel$RoutingControlCount' => '<p>The number of routing controls in the control panel.</p>', 'GatingRule$WaitPeriodMs' => '<p>An evaluation period, in milliseconds (ms), during which any request against the target routing controls will fail. This helps prevent "flapping" of state. The wait period is 5000 ms by default, but you can choose a custom value.</p>', 'GatingRuleUpdate$WaitPeriodMs' => '<p>An evaluation period, in milliseconds (ms), during which any request against the target routing controls will fail. This helps prevent "flapping" of state. The wait period is 5000 ms by default, but you can choose a custom value.</p>', 'NewAssertionRule$WaitPeriodMs' => '<p>An evaluation period, in milliseconds (ms), during which any request against the target routing controls will fail. This helps prevent "flapping" of state. The wait period is 5000 ms by default, but you can choose a custom value.</p>', 'NewGatingRule$WaitPeriodMs' => '<p>An evaluation period, in milliseconds (ms), during which any request against the target routing controls will fail. This helps prevent "flapping" of state. The wait period is 5000 ms by default, but you can choose a custom value.</p>', 'RuleConfig$Threshold' => '<p>The value of N, when you specify an ATLEAST rule type. That is, Threshold is the number of controls that must be set when you specify an ATLEAST type.</p>', ], ], '__listOfCluster' => [ 'base' => NULL, 'refs' => [ 'ListClustersResponse$Clusters' => '<p>An array of the clusters in an account.</p>', ], ], '__listOfClusterEndpoint' => [ 'base' => NULL, 'refs' => [ 'Cluster$ClusterEndpoints' => '<p>Endpoints for a cluster. Specify one of these endpoints when you want to set or retrieve a routing control state in the cluster.</p> <p>To get or update the routing control state, see the Amazon Route 53 Application Recovery Controller Routing Control Actions.</p>', ], ], '__listOfControlPanel' => [ 'base' => NULL, 'refs' => [ 'ListControlPanelsResponse$ControlPanels' => '<p>The result of a successful ListControlPanel request.</p>', ], ], '__listOfRoutingControl' => [ 'base' => NULL, 'refs' => [ 'ListRoutingControlsResponse$RoutingControls' => '<p>An array of routing controls.</p>', ], ], '__listOfRule' => [ 'base' => NULL, 'refs' => [ 'ListSafetyRulesResponse$SafetyRules' => '<p>The list of safety rules in a control panel.</p>', ], ], '__listOf__stringMax36PatternS' => [ 'base' => NULL, 'refs' => [ 'ListAssociatedRoute53HealthChecksResponse$HealthCheckIds' => '<p>Identifiers for the health checks.</p>', ], ], '__listOf__stringMin1Max256PatternAZaZ09' => [ 'base' => NULL, 'refs' => [ 'AssertionRule$AssertedControls' => '<p>The routing controls that are part of transactions that are evaluated to determine if a request to change a routing control state is allowed. For example, you might include three routing controls, one for each of three Amazon Web Services Regions.</p>', 'GatingRule$GatingControls' => '<p>An array of gating routing control Amazon Resource Names (ARNs). For a simple "on/off" switch, specify the ARN for one routing control. The gating routing controls are evaluated by the rule configuration that you specify to determine if the target routing control states can be changed.</p>', 'GatingRule$TargetControls' => '<p>An array of target routing control Amazon Resource Names (ARNs) for which the states can only be updated if the rule configuration that you specify evaluates to true for the gating routing control. As a simple example, if you have a single gating control, it acts as an overall "on/off" switch for a set of target routing controls. You can use this to manually override automated failover, for example.</p>', 'NewAssertionRule$AssertedControls' => '<p>The routing controls that are part of transactions that are evaluated to determine if a request to change a routing control state is allowed. For example, you might include three routing controls, one for each of three Amazon Web Services Regions.</p>', 'NewGatingRule$GatingControls' => '<p>The gating controls for the new gating rule. That is, routing controls that are evaluated by the rule configuration that you specify.</p>', 'NewGatingRule$TargetControls' => '<p>Routing controls that can only be set or unset if the specified RuleConfig evaluates to true for the specified GatingControls. For example, say you have three gating controls, one for each of three Amazon Web Services Regions. Now you specify ATLEAST 2 as your RuleConfig. With these settings, you can only change (set or unset) the routing controls that you have specified as TargetControls if that rule evaluates to true.</p> <p>In other words, your ability to change the routing controls that you have specified as TargetControls is gated by the rule that you set for the routing controls in GatingControls.</p>', ], ], '__mapOf__stringMin0Max256PatternS' => [ 'base' => NULL, 'refs' => [ 'CreateClusterRequest$Tags' => '<p>The tags associated with the cluster.</p>', 'CreateControlPanelRequest$Tags' => '<p>The tags associated with the control panel.</p>', 'CreateSafetyRuleRequest$Tags' => '<p>The tags associated with the safety rule.</p>', 'ListTagsForResourceResponse$Tags' => '<p>The tags associated with the resource.</p>', 'TagResourceRequest$Tags' => '<p>The tags associated with the resource.</p>', ], ], '__string' => [ 'base' => NULL, 'refs' => [ 'AccessDeniedException$Message' => NULL, 'ConflictException$Message' => NULL, 'InternalServerException$Message' => NULL, 'ResourceNotFoundException$Message' => NULL, 'ServiceQuotaExceededException$Message' => NULL, 'ThrottlingException$Message' => NULL, 'ValidationException$Message' => NULL, ], ], '__stringMax36PatternS' => [ 'base' => NULL, 'refs' => [ '__listOf__stringMax36PatternS$member' => NULL, ], ], '__stringMin0Max256PatternS' => [ 'base' => NULL, 'refs' => [ '__mapOf__stringMin0Max256PatternS$member' => NULL, ], ], '__stringMin1Max128PatternAZaZ09' => [ 'base' => NULL, 'refs' => [ 'ClusterEndpoint$Endpoint' => '<p>A cluster endpoint. Specify an endpoint and Amazon Web Services Region when you want to set or retrieve a routing control state in the cluster.</p> <p>To get or update the routing control state, see the Amazon Route 53 Application Recovery Controller Routing Control Actions.</p>', ], ], '__stringMin1Max256PatternAZaZ09' => [ 'base' => NULL, 'refs' => [ 'AssertionRule$ControlPanelArn' => '<p>The Amazon Resource Name (ARN) of the control panel.</p>', 'AssertionRule$SafetyRuleArn' => '<p>The Amazon Resource Name (ARN) of the assertion rule.</p>', 'AssertionRuleUpdate$SafetyRuleArn' => '<p>The Amazon Resource Name (ARN) of the assertion rule.</p>', 'Cluster$ClusterArn' => '<p>The Amazon Resource Name (ARN) of the cluster.</p>', 'ControlPanel$ClusterArn' => '<p>The Amazon Resource Name (ARN) of the cluster that includes the control panel.</p>', 'ControlPanel$ControlPanelArn' => '<p>The Amazon Resource Name (ARN) of the control panel.</p>', 'CreateControlPanelRequest$ClusterArn' => '<p>The Amazon Resource Name (ARN) of the cluster for the control panel.</p>', 'CreateRoutingControlRequest$ClusterArn' => '<p>The Amazon Resource Name (ARN) of the cluster that includes the routing control.</p>', 'CreateRoutingControlRequest$ControlPanelArn' => '<p>The Amazon Resource Name (ARN) of the control panel that includes the routing control.</p>', 'GatingRule$ControlPanelArn' => '<p>The Amazon Resource Name (ARN) of the control panel.</p>', 'GatingRule$SafetyRuleArn' => '<p>The Amazon Resource Name (ARN) of the gating rule.</p>', 'GatingRuleUpdate$SafetyRuleArn' => '<p>The Amazon Resource Name (ARN) of the gating rule.</p>', 'NewAssertionRule$ControlPanelArn' => '<p>The Amazon Resource Name (ARN) for the control panel.</p>', 'NewGatingRule$ControlPanelArn' => '<p>The Amazon Resource Name (ARN) of the control panel.</p>', 'RoutingControl$ControlPanelArn' => '<p>The Amazon Resource Name (ARN) of the control panel that includes the routing control.</p>', 'RoutingControl$RoutingControlArn' => '<p>The Amazon Resource Name (ARN) of the routing control.</p>', 'UpdateControlPanelRequest$ControlPanelArn' => '<p>The Amazon Resource Name (ARN) of the control panel.</p>', 'UpdateRoutingControlRequest$RoutingControlArn' => '<p>The Amazon Resource Name (ARN) of the routing control.</p>', '__listOf__stringMin1Max256PatternAZaZ09$member' => NULL, ], ], '__stringMin1Max32PatternS' => [ 'base' => NULL, 'refs' => [ 'ClusterEndpoint$Region' => '<p>The Amazon Web Services Region for a cluster endpoint.</p>', ], ], '__stringMin1Max64PatternS' => [ 'base' => NULL, 'refs' => [ 'AssertionRule$Name' => '<p>Name of the assertion rule. You can use any non-white space character in the name.</p>', 'AssertionRuleUpdate$Name' => '<p>The name of the assertion rule. You can use any non-white space character in the name.</p>', 'Cluster$Name' => '<p>The name of the cluster.</p>', 'ControlPanel$Name' => '<p>The name of the control panel. You can use any non-white space character in the name.</p>', 'CreateClusterRequest$ClientToken' => '<p>A unique, case-sensitive string of up to 64 ASCII characters. To make an idempotent API request with an action, specify a client token in the request.</p>', 'CreateClusterRequest$ClusterName' => '<p>The name of the cluster.</p>', 'CreateControlPanelRequest$ClientToken' => '<p>A unique, case-sensitive string of up to 64 ASCII characters. To make an idempotent API request with an action, specify a client token in the request.</p>', 'CreateControlPanelRequest$ControlPanelName' => '<p>The name of the control panel.</p>', 'CreateRoutingControlRequest$ClientToken' => '<p>A unique, case-sensitive string of up to 64 ASCII characters. To make an idempotent API request with an action, specify a client token in the request.</p>', 'CreateRoutingControlRequest$RoutingControlName' => '<p>The name of the routing control.</p>', 'CreateSafetyRuleRequest$ClientToken' => '<p>A unique, case-sensitive string of up to 64 ASCII characters. To make an idempotent API request with an action, specify a client token in the request.</p>', 'GatingRule$Name' => '<p>The name for the gating rule. You can use any non-white space character in the name.</p>', 'GatingRuleUpdate$Name' => '<p>The name for the gating rule. You can use any non-white space character in the name.</p>', 'NewAssertionRule$Name' => '<p>The name of the assertion rule. You can use any non-white space character in the name.</p>', 'NewGatingRule$Name' => '<p>The name for the new gating rule.</p>', 'RoutingControl$Name' => '<p>The name of the routing control.</p>', 'UpdateControlPanelRequest$ControlPanelName' => '<p>The name of the control panel.</p>', 'UpdateRoutingControlRequest$RoutingControlName' => '<p>The name of the routing control.</p>', ], ], '__stringMin1Max8096PatternS' => [ 'base' => NULL, 'refs' => [ 'ListAssociatedRoute53HealthChecksResponse$NextToken' => '<p>Next token for listing health checks.</p>', 'ListClustersResponse$NextToken' => '<p>The token that identifies which batch of results you want to see.</p>', 'ListControlPanelsResponse$NextToken' => '<p>The token that identifies which batch of results you want to see.</p>', 'ListRoutingControlsResponse$NextToken' => '<p>The token that identifies which batch of results you want to see.</p>', 'ListSafetyRulesResponse$NextToken' => '<p>The token that identifies which batch of results you want to see.</p>', ], ], ],];
