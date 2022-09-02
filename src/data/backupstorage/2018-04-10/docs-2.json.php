<?php
// This file was auto-generated from sdk-root/src/data/backupstorage/2018-04-10/docs-2.json
return [ 'version' => '2.0', 'service' => 'The frontend service for Cryo Storage.', 'operations' => [ 'DeleteObject' => 'Delete Object from the incremental base Backup.', 'GetChunk' => 'Gets the specified object\'s chunk.', 'GetObjectMetadata' => 'Get metadata associated with an Object.', 'ListChunks' => 'List chunks in a given Object', 'ListObjects' => 'List all Objects in a given Backup.', 'NotifyObjectComplete' => 'Complete upload', 'PutChunk' => 'Upload chunk.', 'PutObject' => 'Upload object that can store object metadata String and data blob in single API call using inline chunk field.', 'StartObject' => 'Start upload containing one or many chunks.', ], 'shapes' => [ 'AccessDeniedException' => [ 'base' => NULL, 'refs' => [], ], 'BackupObject' => [ 'base' => 'Object', 'refs' => [ 'ObjectList$member' => NULL, ], ], 'Chunk' => [ 'base' => 'Chunk', 'refs' => [ 'ChunkList$member' => NULL, ], ], 'ChunkList' => [ 'base' => NULL, 'refs' => [ 'ListChunksOutput$ChunkList' => 'List of chunks', ], ], 'DataAlreadyExistsException' => [ 'base' => 'Non-retryable exception. Attempted to create already existing object or chunk. This message contains a checksum of already presented data.', 'refs' => [], ], 'DataChecksumAlgorithm' => [ 'base' => NULL, 'refs' => [ 'Chunk$ChecksumAlgorithm' => 'Checksum algorithm', 'GetChunkOutput$ChecksumAlgorithm' => 'Checksum algorithm', 'GetObjectMetadataOutput$MetadataBlobChecksumAlgorithm' => 'Checksum algorithm.', 'NotifyObjectCompleteInput$MetadataBlobChecksumAlgorithm' => 'Checksum algorithm.', 'PutChunkInput$ChecksumAlgorithm' => 'Checksum algorithm', 'PutChunkOutput$ChunkChecksumAlgorithm' => 'Checksum algorithm', 'PutObjectOutput$InlineChunkChecksumAlgorithm' => 'Inline chunk checksum algorithm', ], ], 'DeleteObjectInput' => [ 'base' => NULL, 'refs' => [], ], 'GetChunkInput' => [ 'base' => NULL, 'refs' => [], ], 'GetChunkOutput' => [ 'base' => NULL, 'refs' => [], ], 'GetObjectMetadataInput' => [ 'base' => NULL, 'refs' => [], ], 'GetObjectMetadataOutput' => [ 'base' => NULL, 'refs' => [], ], 'IllegalArgumentException' => [ 'base' => 'Non-retryable exception, indicates client error (wrong argument passed to API). See exception message for details.', 'refs' => [], ], 'KMSInvalidKeyUsageException' => [ 'base' => 'Non-retryable exception. Indicates the KMS key usage is incorrect. See exception message for details.', 'refs' => [], ], 'ListChunksInput' => [ 'base' => NULL, 'refs' => [], ], 'ListChunksOutput' => [ 'base' => NULL, 'refs' => [], ], 'ListObjectsInput' => [ 'base' => NULL, 'refs' => [], ], 'ListObjectsOutput' => [ 'base' => NULL, 'refs' => [], ], 'MaxResults' => [ 'base' => NULL, 'refs' => [ 'ListChunksInput$MaxResults' => 'Maximum number of chunks', 'ListObjectsInput$MaxResults' => 'Maximum objects count', ], ], 'MetadataString' => [ 'base' => NULL, 'refs' => [ 'NotifyObjectCompleteInput$MetadataString' => 'Optional metadata associated with an Object. Maximum string length is 256 bytes.', ], ], 'NotReadableInputStreamException' => [ 'base' => 'Retryalble exception. Indicated issues while reading an input stream due to the networking issues or connection drop on the client side.', 'refs' => [], ], 'NotifyObjectCompleteInput' => [ 'base' => NULL, 'refs' => [], ], 'NotifyObjectCompleteOutput' => [ 'base' => NULL, 'refs' => [], ], 'ObjectList' => [ 'base' => NULL, 'refs' => [ 'ListObjectsOutput$ObjectList' => 'Object list', ], ], 'OptionalLong' => [ 'base' => NULL, 'refs' => [ 'BackupObject$ChunksCount' => 'Number of chunks in object', ], ], 'PayloadBlob' => [ 'base' => NULL, 'refs' => [ 'GetChunkOutput$Data' => 'Chunk data', 'GetObjectMetadataOutput$MetadataBlob' => 'Metadata blob.', 'NotifyObjectCompleteInput$MetadataBlob' => 'Optional metadata associated with an Object. Maximum length is 4MB.', 'PutChunkInput$Data' => 'Data to be uploaded', 'PutObjectInput$InlineChunk' => 'Inline chunk data to be uploaded.', ], ], 'PutChunkInput' => [ 'base' => NULL, 'refs' => [], ], 'PutChunkOutput' => [ 'base' => NULL, 'refs' => [], ], 'PutObjectInput' => [ 'base' => NULL, 'refs' => [], ], 'PutObjectOutput' => [ 'base' => NULL, 'refs' => [], ], 'ResourceNotFoundException' => [ 'base' => 'Non-retryable exception. Attempted to make an operation on non-existing or expired resource.', 'refs' => [], ], 'RetryableException' => [ 'base' => 'Retryable exception. In general indicates internal failure that can be fixed by retry.', 'refs' => [], ], 'ServiceErrorMessage' => [ 'base' => NULL, 'refs' => [ 'AccessDeniedException$Message' => NULL, ], ], 'ServiceInternalException' => [ 'base' => 'Deprecated. To be removed from the model.', 'refs' => [], ], 'ServiceUnavailableException' => [ 'base' => 'Retryable exception, indicates internal server error.', 'refs' => [], ], 'StartObjectInput' => [ 'base' => NULL, 'refs' => [], ], 'StartObjectOutput' => [ 'base' => NULL, 'refs' => [], ], 'SummaryChecksumAlgorithm' => [ 'base' => NULL, 'refs' => [ 'BackupObject$ObjectChecksumAlgorithm' => 'Checksum algorithm', 'NotifyObjectCompleteInput$ObjectChecksumAlgorithm' => 'Checksum algorithm', 'NotifyObjectCompleteOutput$ObjectChecksumAlgorithm' => 'Checksum algorithm', 'PutObjectInput$ObjectChecksumAlgorithm' => 'object checksum algorithm', 'PutObjectOutput$ObjectChecksumAlgorithm' => 'object checksum algorithm', ], ], 'ThrottlingException' => [ 'base' => 'Increased rate over throttling limits. Can be retried with exponential backoff.', 'refs' => [], ], 'boolean' => [ 'base' => NULL, 'refs' => [ 'PutObjectInput$ThrowOnDuplicate' => 'Throw an exception if Object name is already exist.', 'StartObjectInput$ThrowOnDuplicate' => 'Throw an exception if Object name is already exist.', ], ], 'long' => [ 'base' => NULL, 'refs' => [ 'Chunk$Index' => 'Chunk index', 'Chunk$Length' => 'Chunk length', 'GetChunkOutput$Length' => 'Data length', 'GetObjectMetadataOutput$MetadataBlobLength' => 'The size of MetadataBlob.', 'NotifyObjectCompleteInput$MetadataBlobLength' => 'The size of MetadataBlob.', 'PutChunkInput$ChunkIndex' => 'Describes this chunk\'s position relative to the other chunks', 'PutChunkInput$Length' => 'Data length', 'PutObjectInput$InlineChunkLength' => 'Length of the inline chunk data.', ], ], 'string' => [ 'base' => NULL, 'refs' => [ 'BackupObject$Name' => 'Object name', 'BackupObject$MetadataString' => 'Metadata string associated with the Object', 'BackupObject$ObjectChecksum' => 'Object checksum', 'BackupObject$ObjectToken' => 'Object token', 'Chunk$Checksum' => 'Chunk checksum', 'Chunk$ChunkToken' => 'Chunk token', 'DataAlreadyExistsException$Message' => NULL, 'DataAlreadyExistsException$Checksum' => 'Data checksum used', 'DataAlreadyExistsException$ChecksumAlgorithm' => 'Checksum algorithm used', 'DeleteObjectInput$BackupJobId' => 'Backup job Id for the in-progress backup.', 'DeleteObjectInput$ObjectName' => 'The name of the Object.', 'GetChunkInput$StorageJobId' => 'Storage job id', 'GetChunkInput$ChunkToken' => 'Chunk token', 'GetChunkOutput$Checksum' => 'Data checksum', 'GetObjectMetadataInput$StorageJobId' => 'Backup job id for the in-progress backup.', 'GetObjectMetadataInput$ObjectToken' => 'Object token.', 'GetObjectMetadataOutput$MetadataString' => 'Metadata string.', 'GetObjectMetadataOutput$MetadataBlobChecksum' => 'MetadataBlob checksum.', 'IllegalArgumentException$Message' => NULL, 'KMSInvalidKeyUsageException$Message' => NULL, 'ListChunksInput$StorageJobId' => 'Storage job id', 'ListChunksInput$ObjectToken' => 'Object token', 'ListChunksInput$NextToken' => 'Pagination token', 'ListChunksOutput$NextToken' => 'Pagination token', 'ListObjectsInput$StorageJobId' => 'Storage job id', 'ListObjectsInput$StartingObjectName' => 'Optional, specifies the starting Object name to list from. Ignored if NextToken is not NULL', 'ListObjectsInput$StartingObjectPrefix' => 'Optional, specifies the starting Object prefix to list from. Ignored if NextToken is not NULL', 'ListObjectsInput$NextToken' => 'Pagination token', 'ListObjectsOutput$NextToken' => 'Pagination token', 'NotReadableInputStreamException$Message' => NULL, 'NotifyObjectCompleteInput$BackupJobId' => 'Backup job Id for the in-progress backup', 'NotifyObjectCompleteInput$UploadId' => 'Upload Id for the in-progress upload', 'NotifyObjectCompleteInput$ObjectChecksum' => 'Object checksum', 'NotifyObjectCompleteInput$MetadataBlobChecksum' => 'Checksum of MetadataBlob.', 'NotifyObjectCompleteOutput$ObjectChecksum' => 'Object checksum', 'PutChunkInput$BackupJobId' => 'Backup job Id for the in-progress backup.', 'PutChunkInput$UploadId' => 'Upload Id for the in-progress upload.', 'PutChunkInput$Checksum' => 'Data checksum', 'PutChunkOutput$ChunkChecksum' => 'Chunk checksum', 'PutObjectInput$BackupJobId' => 'Backup job Id for the in-progress backup.', 'PutObjectInput$ObjectName' => 'The name of the Object to be uploaded.', 'PutObjectInput$MetadataString' => 'Store user defined metadata like backup checksum, disk ids, restore metadata etc.', 'PutObjectInput$InlineChunkChecksum' => 'Inline chunk checksum', 'PutObjectInput$InlineChunkChecksumAlgorithm' => 'Inline chunk checksum algorithm', 'PutObjectInput$ObjectChecksum' => 'object checksum', 'PutObjectOutput$InlineChunkChecksum' => 'Inline chunk checksum', 'PutObjectOutput$ObjectChecksum' => 'object checksum', 'ResourceNotFoundException$Message' => NULL, 'RetryableException$Message' => NULL, 'ServiceInternalException$Message' => NULL, 'ServiceUnavailableException$Message' => NULL, 'StartObjectInput$BackupJobId' => 'Backup job Id for the in-progress backup', 'StartObjectInput$ObjectName' => 'Name for the object.', 'StartObjectOutput$UploadId' => 'Upload Id for a given upload.', 'ThrottlingException$Message' => NULL, ], ], 'timestamp' => [ 'base' => NULL, 'refs' => [ 'ListObjectsInput$CreatedBefore' => '(Optional) Created before filter', 'ListObjectsInput$CreatedAfter' => '(Optional) Created after filter', ], ], ],];
