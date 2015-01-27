# Riak Protocol Buffers Messages For PHP [![Build Status](https://travis-ci.org/php-riak/riak-client-pb.svg?branch=master)](https://travis-ci.org/php-riak/riak-client-pb)


To generate the protobuf php code
```bash
composer install
php ./vendor/bin/protoc-gen-php.php -o ./src/ -i ./ riak.proto -Dmultifile
```
