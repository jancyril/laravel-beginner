---
title: Directly upload to AWS S3 using PlUpload with Temporary Credentials
excerpt: Use AWS temporary credentials to be used on your PlUpload
date: July 24, 2017
category: Tutorial
---

@extends('_layouts.master')

@section('contents')
    <article>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <p>
                        If you are searching for a solution on how to upload directly to your S3 bucket, just like what I did recently, then you came to the right place. In this post, I am going to show you how to directly upload your files to S3 via PlUpload and using AWS temporary credentials to generate short-lived <strong>ACCESS KEY</strong> and <strong>SECRET ACCESS KEY</strong> to be used by PlUpload in your Laravel application.
                    </p>

                    <p>
                        <h3>Prerequisites:</h3>
                        <ul>
                            <li>
                                <a href="https://packagist.org/packages/aws/aws-sdk-php" target="_blank">AWS SDK PHP</a>
                            </li>
                            <li><a href="http://www.plupload.com/" target="_blank">PlUpload</a></li>
                            <li>AWS S3 Bucket</li>
                            <li>An IAM user with write access to your S3 bucket</li>
                        </ul>
                    </p>

                    <p>
                        In your controllers folder, create a new controller called <strong>UploadController.php</strong> and add these lines
                        of code.

                        <script src="https://gist.github.com/jancyril/90d744890fdeb9d0c70e9117e3eae802.js"></script>
                    </p>

                    <p>
                        In your JavaScript, add these lines of code.

                        <script src="https://gist.github.com/jancyril/c34b2e812c79077a95498f11eb01be59.js"></script>
                    </p>

                    <p>
                        The code shown above are almost similar to the example provided by PlUpload in their <a href="http://www.plupload.com/docs/v2/Upload-to-Amazon-S3" target="_blank">documentation</a>, but with some tweaks to use AWS temporary credentials.
                    </p>

                    <p>
                        Now what I did here is I created a new instance of <strong><em>StsClient</em></strong> and provided the basic configuration that it requires, which is the region and version. After a new instance has been created, I called the <strong><em>getSessionToken()</em></strong> method to generate the temporary credentials. This method will then return an array of data that contains the temporary Access Key, Secret Access Key and a Session Token.
                    </p>

                    <p>
                        Next in the <strong><em>$policy</em></strong>, the unique key that I added here is the <strong><em>x-amz-security-token</em></strong> with a value of the generated Session Token, this is what will allow AWS to verify that the request to upload is valid. Without this key, AWS will return a 403 Access Forbidden error.
                    </p>

                    <p>
                        Then I will pass the $policy, $signature, $accessKeyId and $token to my view because I will need for the JavaScript part.
                    </p>

                    <p>
                        In the JavaScript part of this snippets, again, it is almost similar to PlUpload's documentation. The only unique thing that I added here is the <strong><em>x-amz-security-token</em></strong> in the multipart_params with a value of the generated Session Token (PHP variable $token).
                    </p>

                    <p>
                        And that's it, you may now upload directly to your S3 bucket, the good thing with direct upload to S3 is that you would not exhaust your web server's resources and you can upload large file sizes.
                    </p>
                </div>
            </div>
        </div>
    </article>
@endsection
