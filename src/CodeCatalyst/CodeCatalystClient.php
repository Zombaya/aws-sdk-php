<?php

namespace Aws\CodeCatalyst;

use Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon CodeCatalyst** service.
 * @method \Aws\Result createAccessToken(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAccessTokenAsync(array $args = [])
 * @method \Aws\Result createDevEnvironment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDevEnvironmentAsync(array $args = [])
 * @method \Aws\Result createProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createProjectAsync(array $args = [])
 * @method \Aws\Result createSourceRepositoryBranch(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSourceRepositoryBranchAsync(array $args = [])
 * @method \Aws\Result deleteAccessToken(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAccessTokenAsync(array $args = [])
 * @method \Aws\Result deleteDevEnvironment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDevEnvironmentAsync(array $args = [])
 * @method \Aws\Result getDevEnvironment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDevEnvironmentAsync(array $args = [])
 * @method \Aws\Result getProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getProjectAsync(array $args = [])
 * @method \Aws\Result getSourceRepositoryCloneUrls(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSourceRepositoryCloneUrlsAsync(array $args = [])
 * @method \Aws\Result getSpace(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSpaceAsync(array $args = [])
 * @method \Aws\Result getSubscription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSubscriptionAsync(array $args = [])
 * @method \Aws\Result getUserDetails(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getUserDetailsAsync(array $args = [])
 * @method \Aws\Result listAccessTokens(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAccessTokensAsync(array $args = [])
 * @method \Aws\Result listDevEnvironments(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDevEnvironmentsAsync(array $args = [])
 * @method \Aws\Result listEventLogs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listEventLogsAsync(array $args = [])
 * @method \Aws\Result listProjects(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listProjectsAsync(array $args = [])
 * @method \Aws\Result listSourceRepositories(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSourceRepositoriesAsync(array $args = [])
 * @method \Aws\Result listSourceRepositoryBranches(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSourceRepositoryBranchesAsync(array $args = [])
 * @method \Aws\Result listSpaces(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSpacesAsync(array $args = [])
 * @method \Aws\Result startDevEnvironment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startDevEnvironmentAsync(array $args = [])
 * @method \Aws\Result startDevEnvironmentSession(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startDevEnvironmentSessionAsync(array $args = [])
 * @method \Aws\Result stopDevEnvironment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopDevEnvironmentAsync(array $args = [])
 * @method \Aws\Result stopDevEnvironmentSession(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopDevEnvironmentSessionAsync(array $args = [])
 * @method \Aws\Result updateDevEnvironment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDevEnvironmentAsync(array $args = [])
 * @method \Aws\Result verifySession(array $args = [])
 * @method \GuzzleHttp\Promise\Promise verifySessionAsync(array $args = [])
 */
class CodeCatalystClient extends AwsClient
{
}
