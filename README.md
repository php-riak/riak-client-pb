# Riak Protocol Buffers Messages For PHP [![Build Status](https://secure.travis-ci.org/FabioBatSilva/riak-pb.png?branch=2.0.x)](http://travis-ci.org/FabioBatSilva/riak-pb)


To generate the protobuf php code
```bash
composer install
php ./vendor/bin/protoc-gen-php.php -o ./src/ -i ./ riak.proto -Dmultifile
```
