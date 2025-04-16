<?php
// This file was auto-generated from sdk-root/src/data/dsql/2018-05-10/examples-1.json
return [ 'version' => '1.0', 'examples' => [ 'CreateCluster' => [ [ 'input' => [ 'deletionProtectionEnabled' => false, 'tags' => [ 'MyKey' => 'MyValue', ], ], 'id' => 'example-1', 'title' => 'Create Cluster', ], ], 'CreateMultiRegionClusters' => [ [ 'input' => [ 'linkedRegionList' => [ 'us-east-1', 'us-east-2', ], 'witnessRegion' => 'us-west-2', ], 'output' => [ 'linkedClusterArns' => [ 'arn:aws:dsql:us-east-1:111122223333:cluster/abcdefghijklmnopqrst12345', 'arn:aws:dsql:us-east-2:111122223333:cluster/klmnopqrstuvwxyzabcd54321', ], ], 'id' => 'example-1', 'title' => 'Create Multi Region Clusters', ], ], 'DeleteCluster' => [ [ 'input' => [ 'identifier' => 'kiqenqglxyl2snyvkvnj2c3s2e', ], 'id' => 'example-1', 'title' => 'Delete Cluster', ], ], 'DeleteMultiRegionClusters' => [ [ 'input' => [ 'linkedClusterArns' => [ 'arn:aws:dsql:us-east-1:111122223333:cluster/abcdefghijklmnopqrst12345', 'arn:aws:dsql:us-east-2:111122223333:cluster/klmnopqrstuvwxyzabcd54321', ], ], 'id' => 'example-1', 'title' => 'Delete Multi Region Clusters', ], ], 'GetCluster' => [ [ 'input' => [ 'identifier' => 'kiqenqglxyl2snyvkvnj2c3s2e', ], 'id' => 'example-1', 'title' => 'Get Cluster', ], ], 'GetVpcEndpointServiceName' => [ [ 'input' => [ 'identifier' => 'kiqenqglxyl2snyvkvnj2c3s2e', ], 'id' => 'example-1', 'title' => 'Get VPC Endpoint Service Name', ], ], 'ListClusters' => [ [ 'input' => [ 'maxResults' => 20, ], 'id' => 'example-1', 'title' => 'List Clusters', ], ], 'ListTagsForResource' => [ [ 'input' => [ 'resourceArn' => 'arn:aws:dsql:us-east-1:111111222222:cluster/kiqenqglxyl2snyvkvnj2c3s2e', ], 'id' => 'example-1', 'title' => 'List Tags For Resource', ], ], 'TagResource' => [ [ 'input' => [ 'resourceArn' => 'arn:aws:dsql:us-east-1:111111222222:cluster/kiqenqglxyl2snyvkvnj2c3s2e', 'tags' => [ 'MyKey' => 'MyValue', ], ], 'id' => 'example-1', 'title' => 'Tag Resource', ], ], 'UntagResource' => [ [ 'input' => [ 'resourceArn' => 'arn:aws:dsql:us-east-1:111111222222:cluster/kiqenqglxyl2snyvkvnj2c3s2e', 'tagKeys' => [ 'MyKeyA', 'MyKeyB', ], ], 'id' => 'example-1', 'title' => 'Untag Resource', ], ], 'UpdateCluster' => [ [ 'input' => [ 'deletionProtectionEnabled' => false, 'identifier' => 'kiqenqglxyl2snyvkvnj2c3s2e', ], 'id' => 'example-1', 'title' => 'Update Cluster', ], ], ],];
