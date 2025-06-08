#!/bin/bash
set -e

# brew install grpcurl grpc protobuf

# Get protoset file from your starlink
echo -e "\033[0;32m→ Retrieving protoset file from your Starlink \033[0m"
grpcurl -plaintext -protoset-out "assets/starlink.protoset" "192.168.100.1:9200" describe SpaceX.API.Device.Device

# Convert protoset to proto
echo -e "\033[0;32m→ Converting protoset to proto \033[0m"
rm -rf proto
./vendor/bin/protoset-converter "assets/starlink.protoset" "./proto/"

# Remove google and grpc .proto files
echo -e "\033[0;32m→ Removing google and grpc .proto files \033[0m"
rm -rf proto/google
rm -rf proto/grpc

echo -e "\033[0;32m→ Generating PHP client \033[0m"
rm -rf generated/
mkdir -p generated/

# Find all .proto files recursively
PROTO_FILES=$(find proto -name "*.proto")

protoc \
  --php_out=generated/ \
  --grpc_out=generated/ \
  --plugin=protoc-gen-grpc="$(which grpc_php_plugin)" \
  -I./proto \
  $PROTO_FILES

echo -e "\033[0;32m→ Linting .php files \033[0m"
./vendor/bin/pint

composer dump-autoload