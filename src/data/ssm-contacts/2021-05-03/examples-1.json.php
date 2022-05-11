<?php
// This file was auto-generated from sdk-root/src/data/ssm-contacts/2021-05-03/examples-1.json
return [ 'version' => '1.0', 'examples' => [ 'AcceptPage' => [ [ 'input' => [ 'AcceptCode' => '425440', 'AcceptType' => 'READ', 'PageId' => 'arn:aws:ssm-contacts:us-east-2:682428703967:page/akuam/94ea0c7b-56d9-46c3-b84a-a37c8b067ad3', ], 'output' => [], 'comments' => [], 'description' => 'The following accept-page operation uses an accept code sent to the contact channel to accept a page.', 'id' => 'to-accept-a-page-during-and-engagement-1630357840187', 'title' => 'To accept a page during and engagement', ], ], 'ActivateContactChannel' => [ [ 'input' => [ 'ActivationCode' => '466136', 'ContactChannelId' => 'arn:aws:ssm-contacts:us-east-2:111122223333:contact-channel/akuam/fc7405c4-46b2-48b7-87b2-93e2f225b90d', ], 'output' => [], 'comments' => [], 'description' => 'The following activate-contact-channel example activates a contact channel and makes it usable as part of an incident.', 'id' => 'activate-a-contacts-contact-channel-1630359780075', 'title' => 'Activate a contact\'s contact channel', ], ], 'CreateContact' => [ [ 'input' => [ 'Alias' => 'akuam', 'DisplayName' => 'Akua Mansa', 'Plan' => [ 'Stages' => [], ], 'Type' => 'PERSONAL', ], 'output' => [ 'ContactArn' => 'arn:aws:ssm-contacts:us-east-2:111122223333:contact/akuam', ], 'comments' => [], 'description' => 'The following create-contact example creates a contact in your environment with a blank plan. The plan can be updated after creating contact channels. Use the create-contact-channel operation with the output ARN of this command. After you have created contact channels for this contact use update-contact to update the plan.', 'id' => 'to-create-a-contact-1630360152750', 'title' => 'To create a contact', ], ], 'CreateContactChannel' => [ [ 'input' => [ 'ContactId' => 'arn:aws:ssm-contacts:us-east-1:111122223333:contact/akuam', 'DeliveryAddress' => [ 'SimpleAddress' => '+15005550199', ], 'Name' => 'akuas sms-test', 'Type' => 'SMS', ], 'output' => [ 'ContactChannelArn' => 'arn:aws:ssm-contacts:us-east-1:111122223333:contact-channel/akuam/02f506b9-ea5d-4764-af89-2daa793ff024', ], 'comments' => [ 'input' => [], 'output' => [], ], 'description' => 'Creates a contact channel of type SMS for the contact Akua Mansa. Contact channels can be created of type SMS, EMAIL, or VOICE.', 'id' => 'to-create-a-contact-channel-1630360447010', 'title' => 'To create a contact channel', ], ], 'DeactivateContactChannel' => [ [ 'input' => [ 'ContactChannelId' => 'arn:aws:ssm-contacts:us-east-2:111122223333:contact-channel/akuam/fc7405c4-46b2-48b7-87b2-93e2f225b90d', ], 'output' => [], 'comments' => [], 'description' => 'The following ``deactivate-contact-channel`` example deactivates a contact channel. Deactivating a contact channel means the contact channel will no longer be paged during an incident. You can also reactivate a contact channel at any time using the activate-contact-channel operation.', 'id' => 'to-deactivate-a-contact-channel-1630360853894', 'title' => 'To deactivate a contact channel', ], ], 'DeleteContact' => [ [ 'input' => [ 'ContactId' => 'arn:aws:ssm-contacts:us-east-1:111122223333:contact/alejr', ], 'output' => [], 'comments' => [], 'description' => 'The following delete-contact example deletes a contact. The contact will no longer be reachable from any escalation plan that refers to them.', 'id' => 'to-delete-a-contact-1630361093863', 'title' => 'To delete a contact', ], ], 'DeleteContactChannel' => [ [ 'input' => [ 'ContactChannelId' => 'arn:aws:ssm-contacts:us-east-1:111122223333:contact-channel/akuam/13149bad-52ee-45ea-ae1e-45857f78f9b2', ], 'output' => [], 'comments' => [ 'input' => [], 'output' => [], ], 'description' => 'The following delete-contact-channel example deletes a contact channel. Deleting a contact channel ensures the contact channel will not be paged during an incident.', 'id' => 'to-delete-a-contact-channel-1630364616682', 'title' => 'To delete a contact channel', ], ], 'DescribeEngagement' => [ [ 'input' => [ 'EngagementId' => 'arn:aws:ssm-contacts:us-east-2:111122223333:engagement/example_escalation/69e40ce1-8dbb-4d57-8962-5fbe7fc53356', ], 'output' => [ 'ContactArn' => 'arn:aws:ssm-contacts:us-east-2:111122223333:contact/example_escalation', 'Content' => 'Testing engagements', 'EngagementArn' => 'arn:aws:ssm-contacts:us-east-2:111122223333:engagement/example_escalation/69e40ce1-8dbb-4d57-8962-5fbe7fc53356', 'PublicContent' => 'Testing engagements', 'PublicSubject' => 'test', 'Sender' => 'tester', 'StartTime' => '2021-05-18T18:25:41.151000+00:00', 'Subject' => 'test', ], 'comments' => [], 'description' => 'The following describe-engagement example lists the details of an engagement to a contact or escalation plan. The subject and content are sent to the contact channels.', 'id' => 'to-describe-the-details-of-an-engagement-1630364719475', 'title' => 'To describe the details of an engagement', ], ], 'DescribePage' => [ [ 'input' => [ 'PageId' => 'arn:aws:ssm-contacts:us-east-2:111122223333:page/akuam/ad0052bd-e606-498a-861b-25726292eb93', ], 'output' => [ 'ContactArn' => 'arn:aws:ssm-contacts:us-east-2:111122223333:contact/akuam', 'Content' => 'Testing engagements', 'DeliveryTime' => '2021-05-18T18:43:55.265000+00:00', 'EngagementArn' => 'arn:aws:ssm-contacts:us-east-2:111122223333:engagement/akuam/78a29753-3674-4ac5-9f83-0468563567f0', 'PageArn' => 'arn:aws:ssm-contacts:us-east-2:111122223333:page/akuam/ad0052bd-e606-498a-861b-25726292eb93', 'PublicContent' => 'Testing engagements', 'PublicSubject' => 'test', 'ReadTime' => '2021-05-18T18:43:55.708000+00:00', 'Sender' => 'tester', 'SentTime' => '2021-05-18T18:43:29.301000+00:00', 'Subject' => 'test', ], 'comments' => [], 'description' => 'The following describe-page example lists details of a page to a contact channel. The page will include the subject and content provided.', 'id' => 'to-list-the-details-of-a-page-to-a-contact-channel-1630364907282', 'title' => 'To list the details of a page to a contact channel', ], ], 'GetContact' => [ [ 'input' => [ 'ContactId' => 'arn:aws:ssm-contacts:us-east-2:111122223333:contact/akuam', ], 'output' => [ 'Alias' => 'akuam', 'ContactArn' => 'arn:aws:ssm-contacts:us-east-2:111122223333:contact/akuam', 'DisplayName' => 'Akua Mansa', 'Plan' => [ 'Stages' => [ [ 'DurationInMinutes' => 5, 'Targets' => [ [ 'ChannelTargetInfo' => [ 'ContactChannelId' => 'arn:aws:ssm-contacts:us-east-2:111122223333:contact-channel/akuam/beb25840-5ac8-4644-95cc-7a8de390fa65', 'RetryIntervalInMinutes' => 1, ], ], ], ], [ 'DurationInMinutes' => 5, 'Targets' => [ [ 'ChannelTargetInfo' => [ 'ContactChannelId' => 'arn:aws:ssm-contacts:us-east-2:111122223333:contact-channel/akuam/49f3c24d-5f9f-4638-ae25-3f49e04229ad', 'RetryIntervalInMinutes' => 1, ], ], ], ], [ 'DurationInMinutes' => 5, 'Targets' => [ [ 'ChannelTargetInfo' => [ 'ContactChannelId' => 'arn:aws:ssm-contacts:us-east-2:111122223333:contact-channel/akuam/77d4f447-f619-4954-afff-85551e369c2a', 'RetryIntervalInMinutes' => 1, ], ], ], ], ], ], 'Type' => 'PERSONAL', ], 'comments' => [], 'description' => 'The following get-contact example describes a contact.', 'id' => 'example-1-to-describe-a-contact-plan-1630365360005', 'title' => 'Example 1: To describe a contact plan', ], [ 'input' => [ 'ContactId' => 'arn:aws:ssm-contacts:us-east-2:111122223333:contact/example_escalation', ], 'output' => [ 'Alias' => 'example_escalation', 'ContactArn' => 'arn:aws:ssm-contacts:us-east-2:111122223333:contact/example_escalation', 'DisplayName' => 'Example Escalation Plan', 'Plan' => [ 'Stages' => [ [ 'DurationInMinutes' => 5, 'Targets' => [ [ 'ContactTargetInfo' => [ 'ContactId' => 'arn:aws:ssm-contacts:us-east-2:111122223333:contact/akuam', 'IsEssential' => true, ], ], ], ], [ 'DurationInMinutes' => 5, 'Targets' => [ [ 'ContactTargetInfo' => [ 'ContactId' => 'arn:aws:ssm-contacts:us-east-2:111122223333:contact/alejr', 'IsEssential' => false, ], ], ], ], [ 'DurationInMinutes' => 0, 'Targets' => [ [ 'ContactTargetInfo' => [ 'ContactId' => 'arn:aws:ssm-contacts:us-east-2:111122223333:contact/anasi', 'IsEssential' => false, ], ], ], ], ], ], 'Type' => 'ESCALATION', ], 'comments' => [], 'description' => 'The following get-contact example describes an escalation plan.', 'id' => 'example-2-to-describe-an-escalation-plan-1630365515731', 'title' => 'Example 2: To describe an escalation plan', ], ], 'GetContactChannel' => [ [ 'input' => [ 'ContactChannelId' => 'arn:aws:ssm-contacts:us-east-2:111122223333:contact-channel/akuam/fc7405c4-46b2-48b7-87b2-93e2f225b90d', ], 'output' => [ 'ActivationStatus' => 'ACTIVATED', 'ContactArn' => 'arn:aws:ssm-contacts:us-east-2:111122223333:contact/akuam', 'ContactChannelArn' => 'arn:aws:ssm-contacts:us-east-2:111122223333:contact-channel/akuam/fc7405c4-46b2-48b7-87b2-93e2f225b90d', 'DeliveryAddress' => [ 'SimpleAddress' => '+15005550199', ], 'Name' => 'akuas sms', 'Type' => 'SMS', ], 'comments' => [], 'description' => 'The following get-contact-channel example lists the details of a contact channel.', 'id' => 'to-list-the-details-of-a-contact-channel-1630365682730', 'title' => 'To list the details of a contact channel', ], ], 'GetContactPolicy' => [ [ 'input' => [ 'ContactArn' => 'arn:aws:ssm-contacts:us-east-1:111122223333:contact/akuam', ], 'output' => [ 'ContactArn' => 'arn:aws:ssm-contacts:us-east-1:111122223333:contact/akuam', 'Policy' => '{"Version":"2012-10-17","Statement":[{"Sid":"SharePolicyForDocumentationDralia","Effect":"Allow","Principal":{"AWS":"222233334444"},"Action":["ssm-contacts:GetContact","ssm-contacts:StartEngagement","ssm-contacts:DescribeEngagement","ssm-contacts:ListPagesByEngagement","ssm-contacts:StopEngagement"],"Resource":["arn:aws:ssm-contacts:*:111122223333:contact/akuam","arn:aws:ssm-contacts:*:111122223333:engagement/akuam/*"]}]}', ], 'comments' => [], 'description' => 'The following get-contact-policy example lists the resource policies associated with the specified contact.', 'id' => 'to-list-the-details-of-a-contact-channel-1630365682730', 'title' => 'To list the resource policies of a contact', ], ], 'ListContactChannels' => [ [ 'input' => [ 'ContactId' => 'arn:aws:ssm-contacts:us-east-2:111122223333:contact/akuam', ], 'output' => [ 'ContactChannels' => [ [ 'ActivationStatus' => 'ACTIVATED', 'ContactArn' => 'arn:aws:ssm-contacts:us-east-2:111122223333:contact/akuam', 'ContactChannelArn' => 'arn:aws:ssm-contacts:us-east-2:111122223333:contact-channel/akuam/fc7405c4-46b2-48b7-87b2-93e2f225b90d', 'DeliveryAddress' => [ 'SimpleAddress' => '+15005550100', ], 'Name' => 'akuas sms', 'Type' => 'SMS', ], ], ], 'comments' => [], 'description' => 'The following list-contact-channels example lists the available contact channels of the specified contact.', 'id' => 'to-list-the-contact-channels-of-a-contact-1630366544252', 'title' => 'To list the contact channels of a contact', ], ], 'ListContacts' => [ [ 'input' => [], 'output' => [ 'Contacts' => [ [ 'Alias' => 'akuam', 'ContactArn' => 'arn:aws:ssm-contacts:us-east-2:111122223333:contact/akuam', 'DisplayName' => 'Akua Mansa', 'Type' => 'PERSONAL', ], [ 'Alias' => 'alejr', 'ContactArn' => 'arn:aws:ssm-contacts:us-east-2:111122223333:contact/alejr', 'DisplayName' => 'Alejandro Rosalez', 'Type' => 'PERSONAL', ], [ 'Alias' => 'anasi', 'ContactArn' => 'arn:aws:ssm-contacts:us-east-2:111122223333:contact/anasi', 'DisplayName' => 'Ana Carolina Silva', 'Type' => 'PERSONAL', ], [ 'Alias' => 'example_escalation', 'ContactArn' => 'arn:aws:ssm-contacts:us-east-2:111122223333:contact/example_escalation', 'DisplayName' => 'Example Escalation', 'Type' => 'ESCALATION', ], ], ], 'comments' => [], 'description' => 'The following list-contacts example lists the contacts and escalation plans in your account.', 'id' => 'to-list-all-escalation-plans-and-contacts-1630367103082', 'title' => 'To list all escalation plans and contacts', ], ], 'ListEngagements' => [ [ 'input' => [], 'output' => [ 'Engagements' => [ [ 'ContactArn' => 'arn:aws:ssm-contacts:us-east-2:111122223333:contact/akuam', 'EngagementArn' => 'arn:aws:ssm-contacts:us-east-2:111122223333:engagement/akuam/91792571-0b53-4821-9f73-d25d13d9e529', 'Sender' => 'cli', 'StartTime' => '2021-05-18T20:37:50.300000+00:00', ], [ 'ContactArn' => 'arn:aws:ssm-contacts:us-east-2:111122223333:contact/akuam', 'EngagementArn' => 'arn:aws:ssm-contacts:us-east-2:111122223333:engagement/akuam/78a29753-3674-4ac5-9f83-0468563567f0', 'Sender' => 'cli', 'StartTime' => '2021-05-18T18:40:26.666000+00:00', ], [ 'ContactArn' => 'arn:aws:ssm-contacts:us-east-2:111122223333:contact/example_escalation', 'EngagementArn' => 'arn:aws:ssm-contacts:us-east-2:111122223333:engagement/example_escalation/69e40ce1-8dbb-4d57-8962-5fbe7fc53356', 'Sender' => 'cli', 'StartTime' => '2021-05-18T18:25:41.151000+00:00', ], [ 'ContactArn' => 'arn:aws:ssm-contacts:us-east-2:111122223333:contact/akuam', 'EngagementArn' => 'arn:aws:ssm-contacts:us-east-2:111122223333:engagement/akuam/607ced0e-e8fa-4ea7-8958-a237b8803f8f', 'Sender' => 'cli', 'StartTime' => '2021-05-18T18:20:58.093000+00:00', ], ], ], 'comments' => [], 'description' => 'The following list-engagements example lists engagements to escalation plans and contacts. You can also list engagements for a single incident.', 'id' => 'to-list-all-engagements-1630367432635', 'title' => 'To list all engagements', ], ], 'ListPageReceipts' => [ [ 'input' => [ 'PageId' => 'arn:aws:ssm-contacts:us-east-2:111122223333:page/akuam/94ea0c7b-56d9-46c3-b84a-a37c8b067ad3', ], 'output' => [ 'Receipts' => [ [ 'ContactChannelArn' => 'arn:aws:ssm-contacts:us-east-2:111122223333:contact-channel/akuam/fc7405c4-46b2-48b7-87b2-93e2f225b90d', 'ReceiptInfo' => '425440', 'ReceiptTime' => '2021-05-18T20:42:57.485000+00:00', 'ReceiptType' => 'DELIVERED', ], [ 'ContactChannelArn' => 'arn:aws:ssm-contacts:us-east-2:111122223333:contact-channel/akuam/fc7405c4-46b2-48b7-87b2-93e2f225b90d', 'ReceiptInfo' => '425440', 'ReceiptTime' => '2021-05-18T20:42:57.907000+00:00', 'ReceiptType' => 'READ', ], [ 'ContactChannelArn' => 'arn:aws:ssm-contacts:us-east-2:111122223333:contact-channel/akuam/fc7405c4-46b2-48b7-87b2-93e2f225b90d', 'ReceiptInfo' => 'SM6656c19132f1465f9c9c1123a5dde7c9', 'ReceiptTime' => '2021-05-18T20:40:52.962000+00:00', 'ReceiptType' => 'SENT', ], ], ], 'comments' => [], 'description' => 'The following command-name example lists whether a page was received or not by a contact.', 'id' => 'to-list-page-receipts-1630367706869', 'title' => 'To list page receipts', ], ], 'ListPagesByContact' => [ [ 'input' => [ 'ContactId' => 'arn:aws:ssm-contacts:us-east-2:111122223333:contact/akuam', ], 'output' => [ 'Pages' => [ [ 'ContactArn' => 'arn:aws:ssm-contacts:us-east-2:111122223333:contact/akuam', 'DeliveryTime' => '2021-05-18T18:43:55.265000+00:00', 'EngagementArn' => 'arn:aws:ssm-contacts:us-east-2:111122223333:engagement/akuam/78a29753-3674-4ac5-9f83-0468563567f0', 'PageArn' => 'arn:aws:ssm-contacts:us-east-2:111122223333:page/akuam/ad0052bd-e606-498a-861b-25726292eb93', 'ReadTime' => '2021-05-18T18:43:55.708000+00:00', 'Sender' => 'cli', 'SentTime' => '2021-05-18T18:43:29.301000+00:00', ], ], ], 'comments' => [], 'description' => 'The following list-pages-by-contact example lists all pages to the specified contact.', 'id' => 'to-list-pages-by-contact-1630435789132', 'title' => 'To list pages by contact', ], ], 'ListPagesByEngagement' => [ [ 'input' => [ 'EngagementId' => 'arn:aws:ssm-contacts:us-east-2:111122223333:engagement/akuam/78a29753-3674-4ac5-9f83-0468563567f0', ], 'output' => [ 'Pages' => [ [ 'ContactArn' => 'arn:aws:ssm-contacts:us-east-2:111122223333:contact/akuam', 'EngagementArn' => 'arn:aws:ssm-contacts:us-east-2:111122223333:engagement/akuam/78a29753-3674-4ac5-9f83-0468563567f0', 'PageArn' => 'arn:aws:ssm-contacts:us-east-2:111122223333:page/akuam/ad0052bd-e606-498a-861b-25726292eb93', 'Sender' => 'cli', 'SentTime' => '2021-05-18T18:40:27.245000+00:00', ], ], ], 'comments' => [], 'description' => 'The following list-pages-by-engagement example lists the pages that occurred while engaging the defined engagement plan.', 'id' => 'to-list-pages-to-contact-channels-started-from-an-engagement-1630435864674', 'title' => 'To list pages to contact channels started from an engagement.', ], ], 'ListTagsForResource' => [ [ 'input' => [ 'ResourceARN' => 'arn:aws:ssm-contacts:us-east-1:111122223333:contact/akuam', ], 'output' => [ 'Tags' => [ [ 'Key' => 'group1', 'Value' => '1', ], ], ], 'comments' => [], 'description' => 'The following list-tags-for-resource example lists the tags of the specified contact.', 'id' => 'to-list-tags-for-a-contact-1630436051681', 'title' => 'To list tags for a contact', ], ], 'PutContactPolicy' => [ [ 'input' => [ 'ContactArn' => 'arn:aws:ssm-contacts:us-east-1:111122223333:contact/akuam', 'Policy' => '{"Version":"2012-10-17","Statement":[{"Sid":"ExampleResourcePolicy","Action":["ssm-contacts:GetContact","ssm-contacts:StartEngagement","ssm-contacts:DescribeEngagement","ssm-contacts:ListPagesByEngagement","ssm-contacts:StopEngagement"],"Principal":{"AWS":"222233334444"},"Effect":"Allow","Resource":["arn:aws:ssm-contacts:*:111122223333:contact/akuam","arn:aws:ssm-contacts:*:111122223333:engagement/akuam/*"]}]}', ], 'output' => [], 'comments' => [], 'description' => 'The following put-contact-policy example adds a resource policy to the contact Akua that shares the contact and related engagements with the principal.', 'id' => 'to-share-a-contact-and-engagements-1630436278898', 'title' => 'To share a contact and engagements', ], ], 'SendActivationCode' => [ [ 'input' => [ 'ContactChannelId' => 'arn:aws:ssm-contacts:us-east-1:111122223333:contact-channel/akuam/8ddae2d1-12c8-4e45-b852-c8587266c400', ], 'output' => [], 'comments' => [], 'description' => 'The following send-activation-code example sends an activation code and message to the specified contact channel.', 'id' => 'to-send-an-activation-code-1630436453574', 'title' => 'To send an activation code', ], ], 'StartEngagement' => [ [ 'input' => [ 'ContactId' => 'arn:aws:ssm-contacts:us-east-2:111122223333:contact/akuam', 'Content' => 'Testing engagements', 'PublicContent' => 'Testing engagements', 'PublicSubject' => 'test', 'Sender' => 'tester', 'Subject' => 'test', ], 'output' => [ 'EngagementArn' => 'arn:aws:ssm-contacts:us-east-2:111122223333:engagement/akuam/607ced0e-e8fa-4ea7-8958-a237b8803f8f', ], 'comments' => [], 'description' => 'The following start-engagement pages contact\'s contact channels. Sender, subject, public-subject, and public-content are all free from fields. Incident Manager sends the subject and content to the provided VOICE or EMAIL contact channels. Incident Manager sends the public-subject and public-content to the provided SMS contact channels. Sender is used to track who started the engagement.', 'id' => 'example-1-to-page-a-contacts-contact-channels-1630436634872', 'title' => 'Example 1: To page a contact\'s contact channels', ], [ 'input' => [ 'ContactId' => 'arn:aws:ssm-contacts:us-east-2:111122223333:contact/example_escalation', 'Content' => 'Testing engagements', 'PublicContent' => 'Testing engagements', 'PublicSubject' => 'test', 'Sender' => 'tester', 'Subject' => 'test', ], 'output' => [ 'EngagementArn' => 'arn:aws:ssm-contacts:us-east-2:111122223333:engagement/example_escalation/69e40ce1-8dbb-4d57-8962-5fbe7fc53356', ], 'comments' => [], 'description' => 'The following start-engagement engages contact\'s through an escalation plan. Each contact is paged according to their engagement plan.', 'id' => 'example-2-to-page-a-contact-in-the-provided-escalation-plan-1630436808480', 'title' => 'Example 2: To page a contact in the provided escalation plan.', ], ], 'StopEngagement' => [ [ 'input' => [ 'EngagementId' => 'arn:aws:ssm-contacts:us-east-2:111122223333:engagement/example_escalation/69e40ce1-8dbb-4d57-8962-5fbe7fc53356', ], 'output' => [], 'comments' => [], 'description' => 'The following stop-engagement example stops an engagement from paging further contacts and contact channels.', 'id' => 'to-stop-an-engagement-1630436882864', 'title' => 'To stop an engagement', ], ], 'TagResource' => [ [ 'input' => [ 'ResourceARN' => 'arn:aws:ssm-contacts:us-east-1:111122223333:contact/akuam', 'Tags' => [ [ 'Key' => 'group1', 'Value' => '1', ], ], ], 'output' => [], 'comments' => [], 'description' => 'The following tag-resource example tags a specified contact with the provided tag key value pair.', 'id' => 'to-tag-a-contact-1630437124572', 'title' => 'To tag a contact', ], ], 'UntagResource' => [ [ 'input' => [ 'ResourceARN' => 'arn:aws:ssm-contacts:us-east-1:111122223333:contact/akuam', 'TagKeys' => [ 'group1', ], ], 'output' => [], 'comments' => [], 'description' => 'The following untag-resource example removes the group1 tag from the specified contact.', 'id' => 'to-remove-tags-from-a-contact-1630437251110', 'title' => 'To remove tags from a contact', ], ], 'UpdateContact' => [ [ 'input' => [ 'ContactId' => 'arn:aws:ssm-contacts:us-east-2:111122223333:contact/akuam', 'Plan' => [ 'Stages' => [ [ 'DurationInMinutes' => 5, 'Targets' => [ [ 'ChannelTargetInfo' => [ 'ContactChannelId' => 'arn:aws:ssm-contacts:us-east-2:111122223333:contact-channel/akuam/beb25840-5ac8-4644-95cc-7a8de390fa65', 'RetryIntervalInMinutes' => 1, ], ], ], ], [ 'DurationInMinutes' => 5, 'Targets' => [ [ 'ChannelTargetInfo' => [ 'ContactChannelId' => 'arn:aws:ssm-contacts:us-east-2:111122223333:contact-channel/akuam/49f3c24d-5f9f-4638-ae25-3f49e04229ad', 'RetryIntervalInMinutes' => 1, ], ], ], ], [ 'DurationInMinutes' => 5, 'Targets' => [ [ 'ChannelTargetInfo' => [ 'ContactChannelId' => 'arn:aws:ssm-contacts:us-east-2:111122223333:contact-channel/akuam/77d4f447-f619-4954-afff-85551e369c2a', 'RetryIntervalInMinutes' => 1, ], ], ], ], ], ], ], 'output' => [], 'comments' => [], 'description' => 'The following update-contact example updates the engagement plan of the contact Akua to include the three types of contacts channels. This is done after creating contact channels for Akua.', 'id' => 'to-update-the-engagement-plan-of-contact-1630437436599', 'title' => 'To update the engagement plan of contact', ], ], 'UpdateContactChannel' => [ [ 'input' => [ 'ContactChannelId' => 'arn:aws:ssm-contacts:us-east-2:111122223333:contact-channel/akuam/49f3c24d-5f9f-4638-ae25-3f49e04229ad', 'DeliveryAddress' => [ 'SimpleAddress' => '+15005550198', ], 'Name' => 'akuas voice channel', ], 'output' => [], 'comments' => [], 'description' => 'The following update-contact-channel example updates the name and delivery address of a contact channel.', 'id' => 'to-update-a-contact-channel-1630437610256', 'title' => 'To update a contact channel', ], ], ],];
