<?php
// This file was auto-generated from sdk-root/src/data/sso-oidc/2019-06-10/examples-1.json
return [ 'version' => '1.0', 'examples' => [ 'CreateToken' => [ [ 'input' => [ 'clientId' => '_yzkThXVzLWVhc3QtMQEXAMPLECLIENTID', 'clientSecret' => 'VERYLONGSECRETeyJraWQiOiJrZXktMTU2NDAyODA5OSIsImFsZyI6IkhTMzg0In0', 'deviceCode' => 'yJraWQiOiJrZXktMTU2Njk2ODA4OCIsImFsZyI6IkhTMzIn0EXAMPLEDEVICECODE', 'grantType' => 'urn:ietf:params:oauth:grant-type:device-code', ], 'output' => [ 'accessToken' => 'aoal-YigITUDiNX1xZwOMXM5MxOWDL0E0jg9P6_C_jKQPxS_SKCP6f0kh1Up4g7TtvQqkMnD-GJiU_S1gvug6SrggAkc0:MGYCMQD3IatVjV7jAJU91kK3PkS/SfA2wtgWzOgZWDOR7sDGN9t0phCZz5It/aes/3C1Zj0CMQCKWOgRaiz6AIhza3DSXQNMLjRKXC8F8ceCsHlgYLMZ7hZidEXAMPLEACCESSTOKEN', 'expiresIn' => 1579729529, 'refreshToken' => 'aorvJYubGpU6i91YnH7Mfo-AT2fIVa1zCfA_Rvq9yjVKIP3onFmmykuQ7E93y2I-9Nyj-A_sVvMufaLNL0bqnDRtgAkc0:MGUCMFrRsktMRVlWaOR70XGMFGLL0SlcCw4DiYveIiOVx1uK9BbD0gvAddsW3UTLozXKMgIxAJ3qxUvjpnlLIOaaKOoa/FuNgqJVvr9GMwDtnAtlh9iZzAkEXAMPLEREFRESHTOKEN', 'tokenType' => 'Bearer', ], 'comments' => [ 'input' => [], 'output' => [], ], 'description' => '', 'id' => 'create-token-for-device-code', 'title' => 'Call OAuth/OIDC /token endpoint for Device Code grant with Secret authentication', ], [ 'input' => [ 'clientId' => '_yzkThXVzLWVhc3QtMQEXAMPLECLIENTID', 'clientSecret' => 'VERYLONGSECRETeyJraWQiOiJrZXktMTU2NDAyODA5OSIsImFsZyI6IkhTMzg0In0', 'grantType' => 'refresh_token', 'refreshToken' => 'aorvJYubGpU6i91YnH7Mfo-AT2fIVa1zCfA_Rvq9yjVKIP3onFmmykuQ7E93y2I-9Nyj-A_sVvMufaLNL0bqnDRtgAkc0:MGUCMFrRsktMRVlWaOR70XGMFGLL0SlcCw4DiYveIiOVx1uK9BbD0gvAddsW3UTLozXKMgIxAJ3qxUvjpnlLIOaaKOoa/FuNgqJVvr9GMwDtnAtlh9iZzAkEXAMPLEREFRESHTOKEN', 'scope' => [ 'codewhisperer:completions', ], ], 'output' => [ 'accessToken' => 'aoal-YigITUDiNX1xZwOMXM5MxOWDL0E0jg9P6_C_jKQPxS_SKCP6f0kh1Up4g7TtvQqkMnD-GJiU_S1gvug6SrggAkc0:MGYCMQD3IatVjV7jAJU91kK3PkS/SfA2wtgWzOgZWDOR7sDGN9t0phCZz5It/aes/3C1Zj0CMQCKWOgRaiz6AIhza3DSXQNMLjRKXC8F8ceCsHlgYLMZ7hZidEXAMPLEACCESSTOKEN', 'expiresIn' => 1579729529, 'refreshToken' => 'aorvJYubGpU6i91YnH7Mfo-AT2fIVa1zCfA_Rvq9yjVKIP3onFmmykuQ7E93y2I-9Nyj-A_sVvMufaLNL0bqnDRtgAkc0:MGUCMFrRsktMRVlWaOR70XGMFGLL0SlcCw4DiYveIiOVx1uK9BbD0gvAddsW3UTLozXKMgIxAJ3qxUvjpnlLIOaaKOoa/FuNgqJVvr9GMwDtnAtlh9iZzAkEXAMPLEREFRESHTOKEN', 'tokenType' => 'Bearer', ], 'comments' => [ 'input' => [], 'output' => [], ], 'description' => '', 'id' => 'create-token-for-refresh-token', 'title' => 'Call OAuth/OIDC /token endpoint for Refresh Token grant with Secret authentication', ], ], 'CreateTokenWithIAM' => [ [ 'input' => [ 'clientId' => 'arn:aws:sso::123456789012:application/ssoins-111111111111/apl-222222222222', 'code' => 'yJraWQiOiJrZXktMTU2Njk2ODA4OCIsImFsZyI6IkhTMzg0In0EXAMPLEAUTHCODE', 'grantType' => 'authorization_code', 'redirectUri' => 'https://mywebapp.example/redirect', 'scope' => [ 'openid', 'aws', 'sts:identity_context', ], ], 'output' => [ 'accessToken' => 'aoal-YigITUDiNX1xZwOMXM5MxOWDL0E0jg9P6_C_jKQPxS_SKCP6f0kh1Up4g7TtvQqkMnD-GJiU_S1gvug6SrggAkc0:MGYCMQD3IatVjV7jAJU91kK3PkS/SfA2wtgWzOgZWDOR7sDGN9t0phCZz5It/aes/3C1Zj0CMQCKWOgRaiz6AIhza3DSXQNMLjRKXC8F8ceCsHlgYLMZ7hZidEXAMPLEACCESSTOKEN', 'awsAdditionalDetails' => [ 'identityContext' => 'EXAMPLEIDENTITYCONTEXT', ], 'expiresIn' => 1579729529, 'idToken' => 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJhd3M6aWRlbnRpdHlfc3RvcmVfaWQiOiJkLTMzMzMzMzMzMzMiLCJzdWIiOiI3MzA0NDhmMi1lMGExLTcwYTctYzk1NC0wMDAwMDAwMDAwMDAiLCJhd3M6aW5zdGFuY2VfYWNjb3VudCI6IjExMTExMTExMTExMSIsInN0czppZGVudGl0eV9jb250ZXh0IjoiRVhBTVBMRUlERU5USVRZQ09OVEVYVCIsInN0czphdWRpdF9jb250ZXh0IjoiRVhBTVBMRUFVRElUQ09OVEVYVCIsImlzcyI6Imh0dHBzOi8vaWRlbnRpdHljZW50ZXIuYW1hem9uYXdzLmNvbS9zc29pbnMtMTExMTExMTExMTExIiwiYXdzOmlkZW50aXR5X3N0b3JlX2FybiI6ImFybjphd3M6aWRlbnRpdHlzdG9yZTo6MTExMTExMTExMTExOmlkZW50aXR5c3RvcmUvZC0zMzMzMzMzMzMzIiwiYXVkIjoiYXJuOmF3czpzc286OjEyMzQ1Njc4OTAxMjphcHBsaWNhdGlvbi9zc29pbnMtMTExMTExMTExMTExL2FwbC0yMjIyMjIyMjIyMjIiLCJhd3M6aW5zdGFuY2VfYXJuIjoiYXJuOmF3czpzc286OjppbnN0YW5jZS9zc29pbnMtMTExMTExMTExMTExIiwiYXdzOmNyZWRlbnRpYWxfaWQiOiJfWlIyTjZhVkJqMjdGUEtheWpfcEtwVjc3QVBERl80MXB4ZXRfWWpJdUpONlVJR2RBdkpFWEFNUExFQ1JFRElEIiwiYXV0aF90aW1lIjoiMjAyMC0wMS0yMlQxMjo0NToyOVoiLCJleHAiOjE1Nzk3Mjk1MjksImlhdCI6MTU3OTcyNTkyOX0.Xyah6qbk78qThzJ41iFU2yfGuRqqtKXHrJYwQ8L9Ip0', 'issuedTokenType' => 'urn:ietf:params:oauth:token-type:refresh_token', 'refreshToken' => 'aorvJYubGpU6i91YnH7Mfo-AT2fIVa1zCfA_Rvq9yjVKIP3onFmmykuQ7E93y2I-9Nyj-A_sVvMufaLNL0bqnDRtgAkc0:MGUCMFrRsktMRVlWaOR70XGMFGLL0SlcCw4DiYveIiOVx1uK9BbD0gvAddsW3UTLozXKMgIxAJ3qxUvjpnlLIOaaKOoa/FuNgqJVvr9GMwDtnAtlh9iZzAkEXAMPLEREFRESHTOKEN', 'scope' => [ 'openid', 'aws', 'sts:identity_context', ], 'tokenType' => 'Bearer', ], 'comments' => [ 'input' => [], 'output' => [], ], 'description' => '', 'id' => 'create-token-with-iam-for-auth-code', 'title' => 'Call OAuth/OIDC /token endpoint for Authorization Code grant with IAM authentication', ], [ 'input' => [ 'clientId' => 'arn:aws:sso::123456789012:application/ssoins-111111111111/apl-222222222222', 'grantType' => 'refresh_token', 'refreshToken' => 'aorvJYubGpU6i91YnH7Mfo-AT2fIVa1zCfA_Rvq9yjVKIP3onFmmykuQ7E93y2I-9Nyj-A_sVvMufaLNL0bqnDRtgAkc0:MGUCMFrRsktMRVlWaOR70XGMFGLL0SlcCw4DiYveIiOVx1uK9BbD0gvAddsW3UTLozXKMgIxAJ3qxUvjpnlLIOaaKOoa/FuNgqJVvr9GMwDtnAtlh9iZzAkEXAMPLEREFRESHTOKEN', ], 'output' => [ 'accessToken' => 'aoal-YigITUDiNX1xZwOMXM5MxOWDL0E0jg9P6_C_jKQPxS_SKCP6f0kh1Up4g7TtvQqkMnD-GJiU_S1gvug6SrggAkc0:MGYCMQD3IatVjV7jAJU91kK3PkS/SfA2wtgWzOgZWDOR7sDGN9t0phCZz5It/aes/3C1Zj0CMQCKWOgRaiz6AIhza3DSXQNMLjRKXC8F8ceCsHlgYLMZ7hZidEXAMPLEACCESSTOKEN', 'expiresIn' => 1579729529, 'issuedTokenType' => 'urn:ietf:params:oauth:token-type:refresh_token', 'refreshToken' => 'aorvJYubGpU6i91YnH7Mfo-AT2fIVa1zCfA_Rvq9yjVKIP3onFmmykuQ7E93y2I-9Nyj-A_sVvMufaLNL0bqnDRtgAkc0:MGUCMFrRsktMRVlWaOR70XGMFGLL0SlcCw4DiYveIiOVx1uK9BbD0gvAddsW3UTLozXKMgIxAJ3qxUvjpnlLIOaaKOoa/FuNgqJVvr9GMwDtnAtlh9iZzAkEXAMPLEREFRESHTOKEN', 'scope' => [ 'openid', 'aws', 'sts:identity_context', ], 'tokenType' => 'Bearer', ], 'comments' => [ 'input' => [], 'output' => [], ], 'description' => '', 'id' => 'create-token-with-iam-for-refresh-token', 'title' => 'Call OAuth/OIDC /token endpoint for Refresh Token grant with IAM authentication', ], [ 'input' => [ 'assertion' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImtpZCI6IjFMVE16YWtpaGlSbGFfOHoyQkVKVlhlV01xbyJ9.eyJ2ZXIiOiIyLjAiLCJpc3MiOiJodHRwczovL2xvZ2luLm1pY3Jvc29mdG9ubGluZS5jb20vOTEyMjA0MGQtNmM2Ny00YzViLWIxMTItMzZhMzA0YjY2ZGFkL3YyLjAiLCJzdWIiOiJBQUFBQUFBQUFBQUFBQUFBQUFBQUFJa3pxRlZyU2FTYUZIeTc4MmJidGFRIiwiYXVkIjoiNmNiMDQwMTgtYTNmNS00NmE3LWI5OTUtOTQwYzc4ZjVhZWYzIiwiZXhwIjoxNTM2MzYxNDExLCJpYXQiOjE1MzYyNzQ3MTEsIm5iZiI6MTUzNjI3NDcxMSwibmFtZSI6IkFiZSBMaW5jb2xuIiwicHJlZmVycmVkX3VzZXJuYW1lIjoiQWJlTGlAbWljcm9zb2Z0LmNvbSIsIm9pZCI6IjAwMDAwMDAwLTAwMDAtMDAwMC02NmYzLTMzMzJlY2E3ZWE4MSIsInRpZCI6IjkxMjIwNDBkLTZjNjctNGM1Yi1iMTEyLTM2YTMwNGI2NmRhZCIsIm5vbmNlIjoiMTIzNTIzIiwiYWlvIjoiRGYyVVZYTDFpeCFsTUNXTVNPSkJjRmF0emNHZnZGR2hqS3Y4cTVnMHg3MzJkUjVNQjVCaXN2R1FPN1lXQnlqZDhpUURMcSFlR2JJRGFreXA1bW5PcmNkcUhlWVNubHRlcFFtUnA2QUlaOGpZIn0.1AFWW-Ck5nROwSlltm7GzZvDwUkqvhSQpm55TQsmVo9Y59cLhRXpvB8n-55HCr9Z6G_31_UbeUkoz612I2j_Sm9FFShSDDjoaLQr54CreGIJvjtmS3EkK9a7SJBbcpL1MpUtlfygow39tFjY7EVNW9plWUvRrTgVk7lYLprvfzw-CIqw3gHC-T7IK_m_xkr08INERBtaecwhTeN4chPC4W3jdmw_lIxzC48YoQ0dB1L9-ImX98Egypfrlbm0IBL5spFzL6JDZIRRJOu8vecJvj1mq-IUhGt0MacxX8jdxYLP-KUu2d9MbNKpCKJuZ7p8gwTL5B7NlUdh_dmSviPWrw', 'clientId' => 'arn:aws:sso::123456789012:application/ssoins-111111111111/apl-222222222222', 'grantType' => 'urn:ietf:params:oauth:grant-type:jwt-bearer', ], 'output' => [ 'accessToken' => 'aoal-YigITUDiNX1xZwOMXM5MxOWDL0E0jg9P6_C_jKQPxS_SKCP6f0kh1Up4g7TtvQqkMnD-GJiU_S1gvug6SrggAkc0:MGYCMQD3IatVjV7jAJU91kK3PkS/SfA2wtgWzOgZWDOR7sDGN9t0phCZz5It/aes/3C1Zj0CMQCKWOgRaiz6AIhza3DSXQNMLjRKXC8F8ceCsHlgYLMZ7hZidEXAMPLEACCESSTOKEN', 'awsAdditionalDetails' => [ 'identityContext' => 'EXAMPLEIDENTITYCONTEXT', ], 'expiresIn' => 1579729529, 'idToken' => 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJhd3M6aWRlbnRpdHlfc3RvcmVfaWQiOiJkLTMzMzMzMzMzMzMiLCJzdWIiOiI3MzA0NDhmMi1lMGExLTcwYTctYzk1NC0wMDAwMDAwMDAwMDAiLCJhd3M6aW5zdGFuY2VfYWNjb3VudCI6IjExMTExMTExMTExMSIsInN0czppZGVudGl0eV9jb250ZXh0IjoiRVhBTVBMRUlERU5USVRZQ09OVEVYVCIsInN0czphdWRpdF9jb250ZXh0IjoiRVhBTVBMRUFVRElUQ09OVEVYVCIsImlzcyI6Imh0dHBzOi8vaWRlbnRpdHljZW50ZXIuYW1hem9uYXdzLmNvbS9zc29pbnMtMTExMTExMTExMTExIiwiYXdzOmlkZW50aXR5X3N0b3JlX2FybiI6ImFybjphd3M6aWRlbnRpdHlzdG9yZTo6MTExMTExMTExMTExOmlkZW50aXR5c3RvcmUvZC0zMzMzMzMzMzMzIiwiYXVkIjoiYXJuOmF3czpzc286OjEyMzQ1Njc4OTAxMjphcHBsaWNhdGlvbi9zc29pbnMtMTExMTExMTExMTExL2FwbC0yMjIyMjIyMjIyMjIiLCJhd3M6aW5zdGFuY2VfYXJuIjoiYXJuOmF3czpzc286OjppbnN0YW5jZS9zc29pbnMtMTExMTExMTExMTExIiwiYXdzOmNyZWRlbnRpYWxfaWQiOiJfWlIyTjZhVkJqMjdGUEtheWpfcEtwVjc3QVBERl80MXB4ZXRfWWpJdUpONlVJR2RBdkpFWEFNUExFQ1JFRElEIiwiYXV0aF90aW1lIjoiMjAyMC0wMS0yMlQxMjo0NToyOVoiLCJleHAiOjE1Nzk3Mjk1MjksImlhdCI6MTU3OTcyNTkyOX0.Xyah6qbk78qThzJ41iFU2yfGuRqqtKXHrJYwQ8L9Ip0', 'issuedTokenType' => 'urn:ietf:params:oauth:token-type:refresh_token', 'refreshToken' => 'aorvJYubGpU6i91YnH7Mfo-AT2fIVa1zCfA_Rvq9yjVKIP3onFmmykuQ7E93y2I-9Nyj-A_sVvMufaLNL0bqnDRtgAkc0:MGUCMFrRsktMRVlWaOR70XGMFGLL0SlcCw4DiYveIiOVx1uK9BbD0gvAddsW3UTLozXKMgIxAJ3qxUvjpnlLIOaaKOoa/FuNgqJVvr9GMwDtnAtlh9iZzAkEXAMPLEREFRESHTOKEN', 'scope' => [ 'openid', 'aws', 'sts:identity_context', ], 'tokenType' => 'Bearer', ], 'comments' => [ 'input' => [], 'output' => [], ], 'description' => '', 'id' => 'create-token-with-iam-for-jwt-bearer', 'title' => 'Call OAuth/OIDC /token endpoint for JWT Bearer grant with IAM authentication', ], [ 'input' => [ 'clientId' => 'arn:aws:sso::123456789012:application/ssoins-111111111111/apl-222222222222', 'grantType' => 'urn:ietf:params:oauth:grant-type:token-exchange', 'requestedTokenType' => 'urn:ietf:params:oauth:token-type:access_token', 'subjectToken' => 'aoak-Hig8TUDPNX1xZwOMXM5MxOWDL0E0jg9P6_C_jKQPxS_SKCP6f0kh1Up4g7TtvQqkMnD-GJiU_S1gvug6SrggAkc0:MGYCMQD3IatVjV7jAJU91kK3PkS/SfA2wtgWzOgZWDOR7sDGN9t0phCZz5It/aes/3C1Zj0CMQCKWOgRaiz6AIhza3DSXQNMLjRKXC8F8ceCsHlgYLMZ7hZDIFFERENTACCESSTOKEN', 'subjectTokenType' => 'urn:ietf:params:oauth:token-type:access_token', ], 'output' => [ 'accessToken' => 'aoal-YigITUDiNX1xZwOMXM5MxOWDL0E0jg9P6_C_jKQPxS_SKCP6f0kh1Up4g7TtvQqkMnD-GJiU_S1gvug6SrggAkc0:MGYCMQD3IatVjV7jAJU91kK3PkS/SfA2wtgWzOgZWDOR7sDGN9t0phCZz5It/aes/3C1Zj0CMQCKWOgRaiz6AIhza3DSXQNMLjRKXC8F8ceCsHlgYLMZ7hZidEXAMPLEACCESSTOKEN', 'awsAdditionalDetails' => [ 'identityContext' => 'EXAMPLEIDENTITYCONTEXT', ], 'expiresIn' => 1579729529, 'idToken' => 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJhd3M6aWRlbnRpdHlfc3RvcmVfaWQiOiJkLTMzMzMzMzMzMzMiLCJzdWIiOiI3MzA0NDhmMi1lMGExLTcwYTctYzk1NC0wMDAwMDAwMDAwMDAiLCJhd3M6aW5zdGFuY2VfYWNjb3VudCI6IjExMTExMTExMTExMSIsInN0czppZGVudGl0eV9jb250ZXh0IjoiRVhBTVBMRUlERU5USVRZQ09OVEVYVCIsImlzcyI6Imh0dHBzOi8vaWRlbnRpdHljZW50ZXIuYW1hem9uYXdzLmNvbS9zc29pbnMtMTExMTExMTExMTExIiwiYXdzOmlkZW50aXR5X3N0b3JlX2FybiI6ImFybjphd3M6aWRlbnRpdHlzdG9yZTo6MTExMTExMTExMTExOmlkZW50aXR5c3RvcmUvZC0zMzMzMzMzMzMzIiwiYXVkIjoiYXJuOmF3czpzc286OjEyMzQ1Njc4OTAxMjphcHBsaWNhdGlvbi9zc29pbnMtMTExMTExMTExMTExL2FwbC0yMjIyMjIyMjIyMjIiLCJhd3M6aW5zdGFuY2VfYXJuIjoiYXJuOmF3czpzc286OjppbnN0YW5jZS9zc29pbnMtMTExMTExMTExMTExIiwiYXdzOmNyZWRlbnRpYWxfaWQiOiJfWlIyTjZhVkJqMjdGUEtheWpfcEtwVjc3QVBERl80MXB4ZXRfWWpJdUpONlVJR2RBdkpFWEFNUExFQ1JFRElEIiwiYXV0aF90aW1lIjoiMjAyMC0wMS0yMlQxMjo0NToyOVoiLCJleHAiOjE1Nzk3Mjk1MjksImlhdCI6MTU3OTcyNTkyOX0.5SYiW1kMsuUr7nna-l5tlakM0GNbMHvIM2_n0QD23jM', 'issuedTokenType' => 'urn:ietf:params:oauth:token-type:access_token', 'scope' => [ 'openid', 'aws', 'sts:identity_context', ], 'tokenType' => 'Bearer', ], 'comments' => [ 'input' => [], 'output' => [], ], 'description' => '', 'id' => 'create-token-with-iam-for-token-exchange', 'title' => 'Call OAuth/OIDC /token endpoint for Token Exchange grant with IAM authentication', ], ], 'RegisterClient' => [ [ 'input' => [ 'clientName' => 'My IDE Plugin', 'clientType' => 'public', 'entitledApplicationArn' => 'arn:aws:sso::ACCOUNTID:application/ssoins-1111111111111111/apl-1111111111111111', 'grantTypes' => [ 'authorization_code', 'refresh_token', ], 'issuerUrl' => 'https://identitycenter.amazonaws.com/ssoins-1111111111111111', 'redirectUris' => [ '127.0.0.1:PORT/oauth/callback', ], 'scopes' => [ 'sso:account:access', 'codewhisperer:completions', ], ], 'output' => [ 'clientId' => '_yzkThXVzLWVhc3QtMQEXAMPLECLIENTID', 'clientIdIssuedAt' => 1579725929, 'clientSecret' => 'VERYLONGSECRETeyJraWQiOiJrZXktMTU2NDAyODA5OSIsImFsZyI6IkhTMzg0In0', 'clientSecretExpiresAt' => 1587584729, ], 'comments' => [ 'input' => [], 'output' => [], ], 'description' => '', 'id' => 'register-client', 'title' => 'Call OAuth/OIDC /register-client endpoint', ], ], 'StartDeviceAuthorization' => [ [ 'input' => [ 'clientId' => '_yzkThXVzLWVhc3QtMQEXAMPLECLIENTID', 'clientSecret' => 'VERYLONGSECRETeyJraWQiOiJrZXktMTU2NDAyODA5OSIsImFsZyI6IkhTMzg0In0', 'startUrl' => 'https://identitycenter.amazonaws.com/ssoins-111111111111', ], 'output' => [ 'deviceCode' => 'yJraWQiOiJrZXktMTU2Njk2ODA4OCIsImFsZyI6IkhTMzIn0EXAMPLEDEVICECODE', 'expiresIn' => 1579729529, 'interval' => 1, 'userCode' => 'makdfsk83yJraWQiOiJrZXktMTU2Njk2sImFsZyI6IkhTMzIn0EXAMPLEUSERCODE', 'verificationUri' => 'https://directory-alias-example.awsapps.com/start/#/device', 'verificationUriComplete' => 'https://directory-alias-example.awsapps.com/start/#/device?user_code=makdfsk83yJraWQiOiJrZXktMTU2Njk2sImFsZyI6IkhTMzIn0EXAMPLEUSERCODE', ], 'comments' => [ 'input' => [], 'output' => [], ], 'description' => '', 'id' => 'start-device-authorization', 'title' => 'Call OAuth/OIDC /start-device-authorization endpoint', ], ], ],];
