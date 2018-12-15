<?php

namespace Sago\Php;


class StatusCode
{
    //common
    const SUCCESS = 0;
    const PARAM_ERROR = 99;

    //status code for array
    const ARRAY_CAPACITY_FULL = 100;
    const ARRAY_INDEX_OUT_OF_BOUND = 101;
    const ARRAY_EMPTY_INDEX_OF_VALUE = 102;

    //linked list
    const LINKED_LIST_EMPTY = 201;
    const LINKED_LIST_OUT_OF_BOUND = 202;
    const LINKED_LIST_NODE_NOT_EXIST = 203;
    const LINKED_LIST_LESS_THAN_TWO_NODES = 204;

    //stack
    const STACK_FULL_CAPACITY = 301;
    const STACK_EMPTY = 302;

    //queue
    const QUEUE_FULL_CAPACITY = 401;
    const QUEUE_EMPTY = 402;
}