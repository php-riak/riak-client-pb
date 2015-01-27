# Riak Protocol Buffers Messages For PHP [![Build Status](https://secure.travis-ci.org/php-riak/riak-pb.png?branch=master)](http://travis-ci.org/php-riak/riak-client-pb)


To generate the protobuf php code
```bash
composer install
php ./vendor/bin/protoc-gen-php.php -o ./src/ -i ./ riak.proto -Dmultifile
```
