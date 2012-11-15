<?php

return array(
    'amazon-s3.access-key' => $_ENV['S3_ACCESS_KEY'],
    'amazon-s3.secret-key' => $_ENV['S3_SECRET_KEY'],
    'storage.s3.bucket' => $_ENV['S3_BUCKET']
) + phabricator_read_config_file('default');

