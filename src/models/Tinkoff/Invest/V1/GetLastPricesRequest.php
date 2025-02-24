<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: marketdata.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Запрос получения цен последних сделок.
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.GetLastPricesRequest</code>
 */
class GetLastPricesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *Deprecated Figi-идентификатор инструмента. Необходимо использовать instrument_id.
     *
     * Generated from protobuf field <code>repeated string figi = 1;</code>
     */
    private $figi;
    /**
     *Массив идентификаторов инструмента, принимает значения figi или instrument_uid.
     *
     * Generated from protobuf field <code>repeated string instrument_id = 2;</code>
     */
    private $instrument_id;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $figi
     *          Deprecated Figi-идентификатор инструмента. Необходимо использовать instrument_id.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $instrument_id
     *          Массив идентификаторов инструмента, принимает значения figi или instrument_uid.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Marketdata::initOnce();
        parent::__construct($data);
    }

    /**
     *Deprecated Figi-идентификатор инструмента. Необходимо использовать instrument_id.
     *
     * Generated from protobuf field <code>repeated string figi = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFigi()
    {
        return $this->figi;
    }

    /**
     *Deprecated Figi-идентификатор инструмента. Необходимо использовать instrument_id.
     *
     * Generated from protobuf field <code>repeated string figi = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFigi($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->figi = $arr;

        return $this;
    }

    /**
     *Массив идентификаторов инструмента, принимает значения figi или instrument_uid.
     *
     * Generated from protobuf field <code>repeated string instrument_id = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInstrumentId()
    {
        return $this->instrument_id;
    }

    /**
     *Массив идентификаторов инструмента, принимает значения figi или instrument_uid.
     *
     * Generated from protobuf field <code>repeated string instrument_id = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInstrumentId($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->instrument_id = $arr;

        return $this;
    }

}

