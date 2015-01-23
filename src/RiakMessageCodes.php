<?php

namespace Riak\Client\ProtoBuf;

class RiakMessageCodes
{
    const ERROR_RESP = 0;
    const PING_REQ = 1;
    const PING_RESP = 2;
    const GET_CLIENT_ID_REQ = 3;
    const GET_CLIENT_ID_RESP = 4;
    const SET_CLIENT_ID_REQ = 5;
    const SET_CLIENT_ID_RESP = 6;
    const GET_SERVER_INFO_REQ = 7;
    const GET_SERVER_INFO_RESP = 8;
    const GET_REQ = 9;
    const GET_RESP = 10;
    const PUT_REQ = 11;
    const PUT_RESP = 12;
    const DEL_REQ = 13;
    const DEL_RESP = 14;
    const LIST_BUCKETS_REQ = 15;
    const LIST_BUCKETS_RESP = 16;
    const LIST_KEYS_REQ = 17;
    const LIST_KEYS_RESP = 18;
    const GET_BUCKET_REQ = 19;
    const GET_BUCKET_RESP = 20;
    const SET_BUCKET_REQ = 21;
    const SET_BUCKET_RESP = 22;
    const MAPRED_REQ = 23;
    const MAPRED_RESP = 24;
    const INDEX_REQ = 25;
    const INDEX_RESP = 26;
    const SEARCH_QUERY_REQ = 27;
    const SEARCH_QUERY_RESP = 28;
    const RESET_BUCKET_REQ = 29;
    const RESET_BUCKETRESP = 30;
    const GET_BUCKET_TYPE_REQ = 31;
    const SET_BUCKET_TYPE_REQ = 32;
    const CS_BUCKET_REQ = 40;
    const CS_BUCKET_RESP = 41;
    const COUNTER_UPDATE_REQ = 50;
    const COUNTER_UPDATE_RESP = 51;
    const COUNTER_GET_REQ = 52;
    const COUNTER_GET_RESP = 53;
    const YOKOZUNA_INDEX_GET_REQ = 54;
    const YOKOZUNA_INDEX_GET_RESP = 55;
    const YOKOZUNA_INDEX_PUT_REQ = 56;
    const YOKOZUNA_INDEX_DELETE_REQ = 57;
    const YOKOZUNA_SCHEMA_GET_REQ = 58;
    const YOKOZUNA_SCHEMA_GET_RESP = 59;
    const YOKOZUNA_SCHEMA_PUT_REQ = 60;
    const DT_FETCH_REQ = 80;
    const DT_FETCH_RESP = 81;
    const DT_UPDATE_REQ = 82;
    const DT_UPDATE_RESP = 83;
    const AUTH_REQ = 253;
    const AUTH_RESP = 254;
    const START_TLS = 255;
}
