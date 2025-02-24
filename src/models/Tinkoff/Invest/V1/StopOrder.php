<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: stoporders.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Информация о стоп-заявке.
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.StopOrder</code>
 */
class StopOrder extends \Google\Protobuf\Internal\Message
{
    /**
     *Идентификатор-идентификатор стоп-заявки.
     *
     * Generated from protobuf field <code>string stop_order_id = 1;</code>
     */
    protected $stop_order_id = '';
    /**
     *Запрошено лотов.
     *
     * Generated from protobuf field <code>int64 lots_requested = 2;</code>
     */
    protected $lots_requested = 0;
    /**
     *Figi-идентификатор инструмента.
     *
     * Generated from protobuf field <code>string figi = 3;</code>
     */
    protected $figi = '';
    /**
     *Направление операции.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.StopOrderDirection direction = 4;</code>
     */
    protected $direction = 0;
    /**
     *Валюта стоп-заявки.
     *
     * Generated from protobuf field <code>string currency = 5;</code>
     */
    protected $currency = '';
    /**
     *Тип стоп-заявки.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.StopOrderType order_type = 6;</code>
     */
    protected $order_type = 0;
    /**
     *Дата и время выставления заявки в часовом поясе UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_date = 7;</code>
     */
    protected $create_date = null;
    /**
     *Дата и время конвертации стоп-заявки в биржевую в часовом поясе UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp activation_date_time = 8;</code>
     */
    protected $activation_date_time = null;
    /**
     *Дата и время снятия заявки в часовом поясе UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expiration_time = 9;</code>
     */
    protected $expiration_time = null;
    /**
     *Цена заявки за 1 инструмент. Для получения стоимости лота требуется умножить на лотность инструмента.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue price = 10;</code>
     */
    protected $price = null;
    /**
     *Цена активации стоп-заявки за 1 инструмент. Для получения стоимости лота требуется умножить на лотность инструмента.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue stop_price = 11;</code>
     */
    protected $stop_price = null;
    /**
     *instrument_uid идентификатор инструмента.
     *
     * Generated from protobuf field <code>string instrument_uid = 12;</code>
     */
    protected $instrument_uid = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $stop_order_id
     *          Идентификатор-идентификатор стоп-заявки.
     *     @type int|string $lots_requested
     *          Запрошено лотов.
     *     @type string $figi
     *          Figi-идентификатор инструмента.
     *     @type int $direction
     *          Направление операции.
     *     @type string $currency
     *          Валюта стоп-заявки.
     *     @type int $order_type
     *          Тип стоп-заявки.
     *     @type \Google\Protobuf\Timestamp $create_date
     *          Дата и время выставления заявки в часовом поясе UTC.
     *     @type \Google\Protobuf\Timestamp $activation_date_time
     *          Дата и время конвертации стоп-заявки в биржевую в часовом поясе UTC.
     *     @type \Google\Protobuf\Timestamp $expiration_time
     *          Дата и время снятия заявки в часовом поясе UTC.
     *     @type \Tinkoff\Invest\V1\MoneyValue $price
     *          Цена заявки за 1 инструмент. Для получения стоимости лота требуется умножить на лотность инструмента.
     *     @type \Tinkoff\Invest\V1\MoneyValue $stop_price
     *          Цена активации стоп-заявки за 1 инструмент. Для получения стоимости лота требуется умножить на лотность инструмента.
     *     @type string $instrument_uid
     *          instrument_uid идентификатор инструмента.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Stoporders::initOnce();
        parent::__construct($data);
    }

    /**
     *Идентификатор-идентификатор стоп-заявки.
     *
     * Generated from protobuf field <code>string stop_order_id = 1;</code>
     * @return string
     */
    public function getStopOrderId()
    {
        return $this->stop_order_id;
    }

    /**
     *Идентификатор-идентификатор стоп-заявки.
     *
     * Generated from protobuf field <code>string stop_order_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setStopOrderId($var)
    {
        GPBUtil::checkString($var, True);
        $this->stop_order_id = $var;

        return $this;
    }

    /**
     *Запрошено лотов.
     *
     * Generated from protobuf field <code>int64 lots_requested = 2;</code>
     * @return int|string
     */
    public function getLotsRequested()
    {
        return $this->lots_requested;
    }

    /**
     *Запрошено лотов.
     *
     * Generated from protobuf field <code>int64 lots_requested = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLotsRequested($var)
    {
        GPBUtil::checkInt64($var);
        $this->lots_requested = $var;

        return $this;
    }

    /**
     *Figi-идентификатор инструмента.
     *
     * Generated from protobuf field <code>string figi = 3;</code>
     * @return string
     */
    public function getFigi()
    {
        return $this->figi;
    }

    /**
     *Figi-идентификатор инструмента.
     *
     * Generated from protobuf field <code>string figi = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setFigi($var)
    {
        GPBUtil::checkString($var, True);
        $this->figi = $var;

        return $this;
    }

    /**
     *Направление операции.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.StopOrderDirection direction = 4;</code>
     * @return int
     */
    public function getDirection()
    {
        return $this->direction;
    }

    /**
     *Направление операции.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.StopOrderDirection direction = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setDirection($var)
    {
        GPBUtil::checkEnum($var, \Tinkoff\Invest\V1\StopOrderDirection::class);
        $this->direction = $var;

        return $this;
    }

    /**
     *Валюта стоп-заявки.
     *
     * Generated from protobuf field <code>string currency = 5;</code>
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     *Валюта стоп-заявки.
     *
     * Generated from protobuf field <code>string currency = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setCurrency($var)
    {
        GPBUtil::checkString($var, True);
        $this->currency = $var;

        return $this;
    }

    /**
     *Тип стоп-заявки.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.StopOrderType order_type = 6;</code>
     * @return int
     */
    public function getOrderType()
    {
        return $this->order_type;
    }

    /**
     *Тип стоп-заявки.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.StopOrderType order_type = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setOrderType($var)
    {
        GPBUtil::checkEnum($var, \Tinkoff\Invest\V1\StopOrderType::class);
        $this->order_type = $var;

        return $this;
    }

    /**
     *Дата и время выставления заявки в часовом поясе UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_date = 7;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateDate()
    {
        return isset($this->create_date) ? $this->create_date : null;
    }

    public function hasCreateDate()
    {
        return isset($this->create_date);
    }

    public function clearCreateDate()
    {
        unset($this->create_date);
    }

    /**
     *Дата и время выставления заявки в часовом поясе UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_date = 7;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateDate($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_date = $var;

        return $this;
    }

    /**
     *Дата и время конвертации стоп-заявки в биржевую в часовом поясе UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp activation_date_time = 8;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getActivationDateTime()
    {
        return isset($this->activation_date_time) ? $this->activation_date_time : null;
    }

    public function hasActivationDateTime()
    {
        return isset($this->activation_date_time);
    }

    public function clearActivationDateTime()
    {
        unset($this->activation_date_time);
    }

    /**
     *Дата и время конвертации стоп-заявки в биржевую в часовом поясе UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp activation_date_time = 8;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setActivationDateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->activation_date_time = $var;

        return $this;
    }

    /**
     *Дата и время снятия заявки в часовом поясе UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expiration_time = 9;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getExpirationTime()
    {
        return isset($this->expiration_time) ? $this->expiration_time : null;
    }

    public function hasExpirationTime()
    {
        return isset($this->expiration_time);
    }

    public function clearExpirationTime()
    {
        unset($this->expiration_time);
    }

    /**
     *Дата и время снятия заявки в часовом поясе UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expiration_time = 9;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setExpirationTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->expiration_time = $var;

        return $this;
    }

    /**
     *Цена заявки за 1 инструмент. Для получения стоимости лота требуется умножить на лотность инструмента.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue price = 10;</code>
     * @return \Tinkoff\Invest\V1\MoneyValue|null
     */
    public function getPrice()
    {
        return isset($this->price) ? $this->price : null;
    }

    public function hasPrice()
    {
        return isset($this->price);
    }

    public function clearPrice()
    {
        unset($this->price);
    }

    /**
     *Цена заявки за 1 инструмент. Для получения стоимости лота требуется умножить на лотность инструмента.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue price = 10;</code>
     * @param \Tinkoff\Invest\V1\MoneyValue $var
     * @return $this
     */
    public function setPrice($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\MoneyValue::class);
        $this->price = $var;

        return $this;
    }

    /**
     *Цена активации стоп-заявки за 1 инструмент. Для получения стоимости лота требуется умножить на лотность инструмента.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue stop_price = 11;</code>
     * @return \Tinkoff\Invest\V1\MoneyValue|null
     */
    public function getStopPrice()
    {
        return isset($this->stop_price) ? $this->stop_price : null;
    }

    public function hasStopPrice()
    {
        return isset($this->stop_price);
    }

    public function clearStopPrice()
    {
        unset($this->stop_price);
    }

    /**
     *Цена активации стоп-заявки за 1 инструмент. Для получения стоимости лота требуется умножить на лотность инструмента.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue stop_price = 11;</code>
     * @param \Tinkoff\Invest\V1\MoneyValue $var
     * @return $this
     */
    public function setStopPrice($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\MoneyValue::class);
        $this->stop_price = $var;

        return $this;
    }

    /**
     *instrument_uid идентификатор инструмента.
     *
     * Generated from protobuf field <code>string instrument_uid = 12;</code>
     * @return string
     */
    public function getInstrumentUid()
    {
        return $this->instrument_uid;
    }

    /**
     *instrument_uid идентификатор инструмента.
     *
     * Generated from protobuf field <code>string instrument_uid = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setInstrumentUid($var)
    {
        GPBUtil::checkString($var, True);
        $this->instrument_uid = $var;

        return $this;
    }

}

