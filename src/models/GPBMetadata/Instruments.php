<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: instruments.proto

namespace GPBMetadata;

class Instruments
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Common::initOnce();
        $pool->internalAddGeneratedFile(
            '
��
instruments.proto%tinkoff.public.invest.api.contract.v1common.proto"}
TradingSchedulesRequest
exchange (	(
from (2.google.protobuf.Timestamp&
to (2.google.protobuf.Timestamp"e
TradingSchedulesResponseI
	exchanges (26.tinkoff.public.invest.api.contract.v1.TradingSchedule"d
TradingSchedule
exchange (	?
days (21.tinkoff.public.invest.api.contract.v1.TradingDay"�

TradingDay(
date (2.google.protobuf.Timestamp
is_trading_day (.

start_time (2.google.protobuf.Timestamp,
end_time (2.google.protobuf.Timestamp>
opening_auction_start_time (2.google.protobuf.Timestamp<
closing_auction_end_time (2.google.protobuf.TimestampF
"evening_opening_auction_start_time	 (2.google.protobuf.Timestamp6
evening_start_time
 (2.google.protobuf.Timestamp4
evening_end_time (2.google.protobuf.Timestamp7
clearing_start_time (2.google.protobuf.Timestamp5
clearing_end_time (2.google.protobuf.Timestamp8
premarket_start_time (2.google.protobuf.Timestamp6
premarket_end_time (2.google.protobuf.TimestampJJ"}
InstrumentRequestH
id_type (27.tinkoff.public.invest.api.contract.v1.InstrumentIdType

class_code (	

id (	"h
InstrumentsRequestR
instrument_status (27.tinkoff.public.invest.api.contract.v1.InstrumentStatus"O
BondResponse?

instrument (2+.tinkoff.public.invest.api.contract.v1.Bond"Q
BondsResponse@
instruments (2+.tinkoff.public.invest.api.contract.v1.Bond"w
GetBondCouponsRequest
figi (	(
from (2.google.protobuf.Timestamp&
to (2.google.protobuf.Timestamp"W
GetBondCouponsResponse=
events (2-.tinkoff.public.invest.api.contract.v1.Coupon"�
Coupon
figi (	/
coupon_date (2.google.protobuf.Timestamp
coupon_number (,
fix_date (2.google.protobuf.TimestampG
pay_one_bond (21.tinkoff.public.invest.api.contract.v1.MoneyValueF
coupon_type (21.tinkoff.public.invest.api.contract.v1.CouponType5
coupon_start_date (2.google.protobuf.Timestamp3
coupon_end_date (2.google.protobuf.Timestamp
coupon_period	 ("W
CurrencyResponseC

instrument (2/.tinkoff.public.invest.api.contract.v1.Currency"Z
CurrenciesResponseD
instruments (2/.tinkoff.public.invest.api.contract.v1.Currency"M
EtfResponse>

instrument (2*.tinkoff.public.invest.api.contract.v1.Etf"O
EtfsResponse?
instruments (2*.tinkoff.public.invest.api.contract.v1.Etf"S
FutureResponseA

instrument (2-.tinkoff.public.invest.api.contract.v1.Future"U
FuturesResponseB
instruments (2-.tinkoff.public.invest.api.contract.v1.Future"S
OptionResponseA

instrument (2-.tinkoff.public.invest.api.contract.v1.Option"U
OptionsResponseB
instruments (2-.tinkoff.public.invest.api.contract.v1.Option"�
Option
uid (	
position_uid (	
ticker (	

class_code (	 
basic_asset_position_uid (	T
trading_status (2<.tinkoff.public.invest.api.contract.v1.SecurityTradingStatusJ
real_exchange (23.tinkoff.public.invest.api.contract.v1.RealExchangeI
	direction) (26.tinkoff.public.invest.api.contract.v1.OptionDirectionN
payment_type* (28.tinkoff.public.invest.api.contract.v1.OptionPaymentTypeA
style+ (22.tinkoff.public.invest.api.contract.v1.OptionStyleT
settlement_type, (2;.tinkoff.public.invest.api.contract.v1.OptionSettlementType
namee (	
currencyo (	
settlement_currencyp (	

asset_type� (	
basic_asset� (	
exchange� (	
country_of_risk� (	
country_of_risk_name� (	
sector� (	
lot� (K
basic_asset_size� (20.tinkoff.public.invest.api.contract.v1.Quotation@
klong� (20.tinkoff.public.invest.api.contract.v1.QuotationA
kshort� (20.tinkoff.public.invest.api.contract.v1.Quotation@
dlong� (20.tinkoff.public.invest.api.contract.v1.QuotationA
dshort� (20.tinkoff.public.invest.api.contract.v1.QuotationD
	dlong_min� (20.tinkoff.public.invest.api.contract.v1.QuotationE

dshort_min� (20.tinkoff.public.invest.api.contract.v1.QuotationN
min_price_increment� (20.tinkoff.public.invest.api.contract.v1.QuotationH
strike_price� (21.tinkoff.public.invest.api.contract.v1.MoneyValue4
expiration_date� (2.google.protobuf.Timestamp5
first_trade_date� (2.google.protobuf.Timestamp4
last_trade_date� (2.google.protobuf.Timestamp;
first_1min_candle_date� (2.google.protobuf.Timestamp;
first_1day_candle_date� (2.google.protobuf.Timestamp
short_enabled_flag� (
for_iis_flag� (
otc_flag� (
buy_available_flag� (
sell_available_flag� (
for_qual_investor_flag� (
weekend_flag� (
blocked_tca_flag� (!
api_trade_available_flag� ("Q
ShareResponse@

instrument (2,.tinkoff.public.invest.api.contract.v1.Share"S
SharesResponseA
instruments (2,.tinkoff.public.invest.api.contract.v1.Share"�
Bond
figi (	
ticker (	

class_code (	
isin (	
lot (
currency (	?
klong (20.tinkoff.public.invest.api.contract.v1.Quotation@
kshort (20.tinkoff.public.invest.api.contract.v1.Quotation?
dlong	 (20.tinkoff.public.invest.api.contract.v1.Quotation@
dshort
 (20.tinkoff.public.invest.api.contract.v1.QuotationC
	dlong_min (20.tinkoff.public.invest.api.contract.v1.QuotationD

dshort_min (20.tinkoff.public.invest.api.contract.v1.Quotation
short_enabled_flag (
name (	
exchange (	 
coupon_quantity_per_year (1
maturity_date (2.google.protobuf.TimestampB
nominal (21.tinkoff.public.invest.api.contract.v1.MoneyValueJ
initial_nominal (21.tinkoff.public.invest.api.contract.v1.MoneyValue2
state_reg_date (2.google.protobuf.Timestamp2
placement_date (2.google.protobuf.TimestampJ
placement_price (21.tinkoff.public.invest.api.contract.v1.MoneyValueD
	aci_value (21.tinkoff.public.invest.api.contract.v1.MoneyValue
country_of_risk (	
country_of_risk_name (	
sector (	

issue_kind (	

issue_size (
issue_size_plan (T
trading_status (2<.tinkoff.public.invest.api.contract.v1.SecurityTradingStatus
otc_flag  (
buy_available_flag! (
sell_available_flag" (
floating_coupon_flag# (
perpetual_flag$ (
amortization_flag% (M
min_price_increment& (20.tinkoff.public.invest.api.contract.v1.Quotation 
api_trade_available_flag\' (
uid( (	J
real_exchange) (23.tinkoff.public.invest.api.contract.v1.RealExchange
position_uid* (	
for_iis_flag3 (
for_qual_investor_flag4 (
weekend_flag5 (
blocked_tca_flag6 (:
first_1min_candle_date= (2.google.protobuf.Timestamp:
first_1day_candle_date> (2.google.protobuf.Timestamp"�

Currency
figi (	
ticker (	

class_code (	
isin (	
lot (
currency (	?
klong (20.tinkoff.public.invest.api.contract.v1.Quotation@
kshort (20.tinkoff.public.invest.api.contract.v1.Quotation?
dlong	 (20.tinkoff.public.invest.api.contract.v1.Quotation@
dshort
 (20.tinkoff.public.invest.api.contract.v1.QuotationC
	dlong_min (20.tinkoff.public.invest.api.contract.v1.QuotationD

dshort_min (20.tinkoff.public.invest.api.contract.v1.Quotation
short_enabled_flag (
name (	
exchange (	B
nominal (21.tinkoff.public.invest.api.contract.v1.MoneyValue
country_of_risk (	
country_of_risk_name (	T
trading_status (2<.tinkoff.public.invest.api.contract.v1.SecurityTradingStatus
otc_flag (
buy_available_flag (
sell_available_flag (
iso_currency_name (	M
min_price_increment (20.tinkoff.public.invest.api.contract.v1.Quotation 
api_trade_available_flag (
uid (	J
real_exchange (23.tinkoff.public.invest.api.contract.v1.RealExchange
position_uid (	
for_iis_flag) (
for_qual_investor_flag4 (
weekend_flag5 (
blocked_tca_flag6 (:
first_1min_candle_date8 (2.google.protobuf.Timestamp:
first_1day_candle_date9 (2.google.protobuf.Timestamp"�
Etf
figi (	
ticker (	

class_code (	
isin (	
lot (
currency (	?
klong (20.tinkoff.public.invest.api.contract.v1.Quotation@
kshort (20.tinkoff.public.invest.api.contract.v1.Quotation?
dlong	 (20.tinkoff.public.invest.api.contract.v1.Quotation@
dshort
 (20.tinkoff.public.invest.api.contract.v1.QuotationC
	dlong_min (20.tinkoff.public.invest.api.contract.v1.QuotationD

dshort_min (20.tinkoff.public.invest.api.contract.v1.Quotation
short_enabled_flag (
name (	
exchange (	J
fixed_commission (20.tinkoff.public.invest.api.contract.v1.Quotation

focus_type (	1
released_date (2.google.protobuf.TimestampD

num_shares (20.tinkoff.public.invest.api.contract.v1.Quotation
country_of_risk (	
country_of_risk_name (	
sector (	
rebalancing_freq (	T
trading_status (2<.tinkoff.public.invest.api.contract.v1.SecurityTradingStatus
otc_flag (
buy_available_flag (
sell_available_flag (M
min_price_increment (20.tinkoff.public.invest.api.contract.v1.Quotation 
api_trade_available_flag (
uid (	J
real_exchange  (23.tinkoff.public.invest.api.contract.v1.RealExchange
position_uid! (	
for_iis_flag) (
for_qual_investor_flag* (
weekend_flag+ (
blocked_tca_flag, (:
first_1min_candle_date8 (2.google.protobuf.Timestamp:
first_1day_candle_date9 (2.google.protobuf.Timestamp"�
Future
figi (	
ticker (	

class_code (	
lot (
currency (	?
klong (20.tinkoff.public.invest.api.contract.v1.Quotation@
kshort (20.tinkoff.public.invest.api.contract.v1.Quotation?
dlong (20.tinkoff.public.invest.api.contract.v1.Quotation@
dshort	 (20.tinkoff.public.invest.api.contract.v1.QuotationC
	dlong_min
 (20.tinkoff.public.invest.api.contract.v1.QuotationD

dshort_min (20.tinkoff.public.invest.api.contract.v1.Quotation
short_enabled_flag (
name (	
exchange (	4
first_trade_date (2.google.protobuf.Timestamp3
last_trade_date (2.google.protobuf.Timestamp
futures_type (	

asset_type (	
basic_asset (	J
basic_asset_size (20.tinkoff.public.invest.api.contract.v1.Quotation
country_of_risk (	
country_of_risk_name (	
sector (	3
expiration_date (2.google.protobuf.TimestampT
trading_status (2<.tinkoff.public.invest.api.contract.v1.SecurityTradingStatus
otc_flag (
buy_available_flag (
sell_available_flag (M
min_price_increment (20.tinkoff.public.invest.api.contract.v1.Quotation 
api_trade_available_flag (
uid (	J
real_exchange  (23.tinkoff.public.invest.api.contract.v1.RealExchange
position_uid! (	 
basic_asset_position_uid" (	
for_iis_flag) (
for_qual_investor_flag* (
weekend_flag+ (
blocked_tca_flag, (:
first_1min_candle_date8 (2.google.protobuf.Timestamp:
first_1day_candle_date9 (2.google.protobuf.Timestamp"�
Share
figi (	
ticker (	

class_code (	
isin (	
lot (
currency (	?
klong (20.tinkoff.public.invest.api.contract.v1.Quotation@
kshort (20.tinkoff.public.invest.api.contract.v1.Quotation?
dlong	 (20.tinkoff.public.invest.api.contract.v1.Quotation@
dshort
 (20.tinkoff.public.invest.api.contract.v1.QuotationC
	dlong_min (20.tinkoff.public.invest.api.contract.v1.QuotationD

dshort_min (20.tinkoff.public.invest.api.contract.v1.Quotation
short_enabled_flag (
name (	
exchange (	,
ipo_date (2.google.protobuf.Timestamp

issue_size (
country_of_risk (	
country_of_risk_name (	
sector (	
issue_size_plan (B
nominal (21.tinkoff.public.invest.api.contract.v1.MoneyValueT
trading_status (2<.tinkoff.public.invest.api.contract.v1.SecurityTradingStatus
otc_flag (
buy_available_flag (
sell_available_flag (
div_yield_flag (D

share_type (20.tinkoff.public.invest.api.contract.v1.ShareTypeM
min_price_increment (20.tinkoff.public.invest.api.contract.v1.Quotation 
api_trade_available_flag  (
uid! (	J
real_exchange" (23.tinkoff.public.invest.api.contract.v1.RealExchange
position_uid# (	
for_iis_flag. (
for_qual_investor_flag/ (
weekend_flag0 (
blocked_tca_flag1 (:
first_1min_candle_date8 (2.google.protobuf.Timestamp:
first_1day_candle_date9 (2.google.protobuf.Timestamp"|
GetAccruedInterestsRequest
figi (	(
from (2.google.protobuf.Timestamp&
to (2.google.protobuf.Timestamp"p
GetAccruedInterestsResponseQ
accrued_interests (26.tinkoff.public.invest.api.contract.v1.AccruedInterest"�
AccruedInterest(
date (2.google.protobuf.Timestamp?
value (20.tinkoff.public.invest.api.contract.v1.QuotationG
value_percent (20.tinkoff.public.invest.api.contract.v1.QuotationA
nominal (20.tinkoff.public.invest.api.contract.v1.Quotation"\'
GetFuturesMarginRequest
figi (	"�
GetFuturesMarginResponseP
initial_margin_on_buy (21.tinkoff.public.invest.api.contract.v1.MoneyValueQ
initial_margin_on_sell (21.tinkoff.public.invest.api.contract.v1.MoneyValueM
min_price_increment (20.tinkoff.public.invest.api.contract.v1.QuotationT
min_price_increment_amount (20.tinkoff.public.invest.api.contract.v1.Quotation"[
InstrumentResponseE

instrument (21.tinkoff.public.invest.api.contract.v1.Instrument"�	

Instrument
figi (	
ticker (	

class_code (	
isin (	
lot (
currency (	?
klong (20.tinkoff.public.invest.api.contract.v1.Quotation@
kshort (20.tinkoff.public.invest.api.contract.v1.Quotation?
dlong	 (20.tinkoff.public.invest.api.contract.v1.Quotation@
dshort
 (20.tinkoff.public.invest.api.contract.v1.QuotationC
	dlong_min (20.tinkoff.public.invest.api.contract.v1.QuotationD

dshort_min (20.tinkoff.public.invest.api.contract.v1.Quotation
short_enabled_flag (
name (	
exchange (	
country_of_risk (	
country_of_risk_name (	
instrument_type (	T
trading_status (2<.tinkoff.public.invest.api.contract.v1.SecurityTradingStatus
otc_flag (
buy_available_flag (
sell_available_flag (M
min_price_increment (20.tinkoff.public.invest.api.contract.v1.Quotation 
api_trade_available_flag (
uid (	J
real_exchange (23.tinkoff.public.invest.api.contract.v1.RealExchange
position_uid (	
for_iis_flag$ (
for_qual_investor_flag% (
weekend_flag& (
blocked_tca_flag\' (:
first_1min_candle_date8 (2.google.protobuf.Timestamp:
first_1day_candle_date9 (2.google.protobuf.Timestamp"u
GetDividendsRequest
figi (	(
from (2.google.protobuf.Timestamp&
to (2.google.protobuf.Timestamp"Z
GetDividendsResponseB
	dividends (2/.tinkoff.public.invest.api.contract.v1.Dividend"�
DividendG
dividend_net (21.tinkoff.public.invest.api.contract.v1.MoneyValue0
payment_date (2.google.protobuf.Timestamp1
declared_date (2.google.protobuf.Timestamp1
last_buy_date (2.google.protobuf.Timestamp
dividend_type (	/
record_date (2.google.protobuf.Timestamp

regularity (	F
close_price (21.tinkoff.public.invest.api.contract.v1.MoneyValueE
yield_value	 (20.tinkoff.public.invest.api.contract.v1.Quotation.

created_at
 (2.google.protobuf.Timestamp"
AssetRequest

id (	"P
AssetResponse?
asset (20.tinkoff.public.invest.api.contract.v1.AssetFull"
AssetsRequest"N
AssetsResponse<
assets (2,.tinkoff.public.invest.api.contract.v1.Asset"�
	AssetFull
uid (	>
type (20.tinkoff.public.invest.api.contract.v1.AssetType
name (	

name_brief (	
description (	.

deleted_at (2.google.protobuf.Timestamp
required_tests (	H
currency (24.tinkoff.public.invest.api.contract.v1.AssetCurrencyH H
security	 (24.tinkoff.public.invest.api.contract.v1.AssetSecurityH 
gos_reg_code
 (	
cfi (	
code_nsd (	
status (	;
brand (2,.tinkoff.public.invest.api.contract.v1.Brand.

updated_at (2.google.protobuf.Timestamp
br_code (	
br_code_name (	K
instruments (26.tinkoff.public.invest.api.contract.v1.AssetInstrumentB
ext"�
Asset
uid (	>
type (20.tinkoff.public.invest.api.contract.v1.AssetType
name (	K
instruments (26.tinkoff.public.invest.api.contract.v1.AssetInstrument"&
AssetCurrency
base_currency (	"�
AssetSecurity
isin (	
type (	B
share (21.tinkoff.public.invest.api.contract.v1.AssetShareH @
bond (20.tinkoff.public.invest.api.contract.v1.AssetBondH K
sp (2=.tinkoff.public.invest.api.contract.v1.AssetStructuredProductH >
etf (2/.tinkoff.public.invest.api.contract.v1.AssetEtfH _
clearing_certificate (2?.tinkoff.public.invest.api.contract.v1.AssetClearingCertificateH B
ext"�

AssetShare>
type (20.tinkoff.public.invest.api.contract.v1.ShareTypeD

issue_size (20.tinkoff.public.invest.api.contract.v1.QuotationA
nominal (20.tinkoff.public.invest.api.contract.v1.Quotation
nominal_currency (	
primary_index (	G
dividend_rate (20.tinkoff.public.invest.api.contract.v1.Quotation
preferred_share_type (	,
ipo_date (2.google.protobuf.Timestamp1
registry_date	 (2.google.protobuf.Timestamp
div_yield_flag
 (

issue_kind (	2
placement_date (2.google.protobuf.Timestamp
repres_isin (	I
issue_size_plan (20.tinkoff.public.invest.api.contract.v1.QuotationE
total_float (20.tinkoff.public.invest.api.contract.v1.Quotation"�
	AssetBondI
current_nominal (20.tinkoff.public.invest.api.contract.v1.Quotation
borrow_name (	D

issue_size (20.tinkoff.public.invest.api.contract.v1.QuotationA
nominal (20.tinkoff.public.invest.api.contract.v1.Quotation
nominal_currency (	

issue_kind (	
interest_kind (	 
coupon_quantity_per_year (
indexed_nominal_flag	 (
subordinated_flag
 (
collateral_flag (
tax_free_flag (
amortization_flag (
floating_coupon_flag (
perpetual_flag (1
maturity_date (2.google.protobuf.Timestamp
return_condition (	2
state_reg_date (2.google.protobuf.Timestamp2
placement_date (2.google.protobuf.TimestampI
placement_price (20.tinkoff.public.invest.api.contract.v1.QuotationI
issue_size_plan (20.tinkoff.public.invest.api.contract.v1.Quotation"�
AssetStructuredProduct
borrow_name (	A
nominal (20.tinkoff.public.invest.api.contract.v1.Quotation
nominal_currency (	J
type (2<.tinkoff.public.invest.api.contract.v1.StructuredProductType
logic_portfolio (	D

asset_type (20.tinkoff.public.invest.api.contract.v1.AssetType
basic_asset (	H
safety_barrier (20.tinkoff.public.invest.api.contract.v1.Quotation1
maturity_date	 (2.google.protobuf.TimestampI
issue_size_plan
 (20.tinkoff.public.invest.api.contract.v1.QuotationD

issue_size (20.tinkoff.public.invest.api.contract.v1.Quotation2
placement_date (2.google.protobuf.Timestamp

issue_kind (	"�

AssetEtfG
total_expense (20.tinkoff.public.invest.api.contract.v1.QuotationE
hurdle_rate (20.tinkoff.public.invest.api.contract.v1.QuotationI
performance_fee (20.tinkoff.public.invest.api.contract.v1.QuotationJ
fixed_commission (20.tinkoff.public.invest.api.contract.v1.Quotation
payment_type (	
watermark_flag (E
buy_premium (20.tinkoff.public.invest.api.contract.v1.QuotationG
sell_discount (20.tinkoff.public.invest.api.contract.v1.Quotation
rebalancing_flag	 (
rebalancing_freq
 (	
management_type (	
primary_index (	

focus_type (	
leveraged_flag (C
	num_share (20.tinkoff.public.invest.api.contract.v1.Quotation

ucits_flag (1
released_date (2.google.protobuf.Timestamp
description (	!
primary_index_description (	
primary_index_company (	O
index_recovery_period (20.tinkoff.public.invest.api.contract.v1.Quotation
	inav_code (	
div_yield_flag (L
expense_commission (20.tinkoff.public.invest.api.contract.v1.QuotationV
primary_index_tracking_error (20.tinkoff.public.invest.api.contract.v1.Quotation
rebalancing_plan (	
tax_rate (	5
rebalancing_dates (2.google.protobuf.Timestamp

issue_kind (	A
nominal (20.tinkoff.public.invest.api.contract.v1.Quotation
nominal_currency (	"w
AssetClearingCertificateA
nominal (20.tinkoff.public.invest.api.contract.v1.Quotation
nominal_currency (	"�
Brand
uid (	
name (	
description (	
info (	
company (	
sector (	
country_of_risk (	
country_of_risk_name (	"�
AssetInstrument
uid (	
figi (	
instrument_type (	
ticker (	

class_code (	D
links (25.tinkoff.public.invest.api.contract.v1.InstrumentLink"6
InstrumentLink
type (	
instrument_uid (	"
GetFavoritesRequest"o
GetFavoritesResponseW
favorite_instruments (29.tinkoff.public.invest.api.contract.v1.FavoriteInstrument"�
FavoriteInstrument
figi (	
ticker (	

class_code (	
isin (	
instrument_type (	
otc_flag ( 
api_trade_available_flag ("�
EditFavoritesRequestZ
instruments (2E.tinkoff.public.invest.api.contract.v1.EditFavoritesRequestInstrumentS
action_type (2>.tinkoff.public.invest.api.contract.v1.EditFavoritesActionType".
EditFavoritesRequestInstrument
figi (	"p
EditFavoritesResponseW
favorite_instruments (29.tinkoff.public.invest.api.contract.v1.FavoriteInstrument"
GetCountriesRequest"a
GetCountriesResponseI
	countries (26.tinkoff.public.invest.api.contract.v1.CountryResponse"Y
CountryResponse
alfa_two (	

alfa_three (	
name (	

name_brief (	"&
FindInstrumentRequest
query (	"e
FindInstrumentResponseK
instruments (26.tinkoff.public.invest.api.contract.v1.InstrumentShort"�
InstrumentShort
isin (	
figi (	
ticker (	

class_code (	
instrument_type (	
name (	
uid (	
position_uid (	 
api_trade_available_flag (
for_iis_flag (:
first_1min_candle_date (2.google.protobuf.Timestamp:
first_1day_candle_date (2.google.protobuf.Timestamp
for_qual_investor_flag (
weekend_flag (
blocked_tca_flag ("
GetBrandsRequest"
GetBrandRequest

id (	"Q
GetBrandsResponse<
brands (2,.tinkoff.public.invest.api.contract.v1.Brand*�

CouponType
COUPON_TYPE_UNSPECIFIED 
COUPON_TYPE_CONSTANT
COUPON_TYPE_FLOATING
COUPON_TYPE_DISCOUNT
COUPON_TYPE_MORTGAGE
COUPON_TYPE_FIX
COUPON_TYPE_VARIABLE
COUPON_TYPE_OTHER*h
OptionDirection 
OPTION_DIRECTION_UNSPECIFIED 
OPTION_DIRECTION_PUT
OPTION_DIRECTION_CALL*{
OptionPaymentType#
OPTION_PAYMENT_TYPE_UNSPECIFIED 
OPTION_PAYMENT_TYPE_PREMIUM 
OPTION_PAYMENT_TYPE_MARGINAL*a
OptionStyle
OPTION_STYLE_UNSPECIFIED 
OPTION_STYLE_AMERICAN
OPTION_STYLE_EUROPEAN*�
OptionSettlementType%
!OPTION_EXECUTION_TYPE_UNSPECIFIED +
\'OPTION_EXECUTION_TYPE_PHYSICAL_DELIVERY)
%OPTION_EXECUTION_TYPE_CASH_SETTLEMENT*�
InstrumentIdType
INSTRUMENT_ID_UNSPECIFIED 
INSTRUMENT_ID_TYPE_FIGI
INSTRUMENT_ID_TYPE_TICKER
INSTRUMENT_ID_TYPE_UID#
INSTRUMENT_ID_TYPE_POSITION_UID*l
InstrumentStatus!
INSTRUMENT_STATUS_UNSPECIFIED 
INSTRUMENT_STATUS_BASE
INSTRUMENT_STATUS_ALL*�
	ShareType
SHARE_TYPE_UNSPECIFIED 
SHARE_TYPE_COMMON
SHARE_TYPE_PREFERRED
SHARE_TYPE_ADR
SHARE_TYPE_GDR
SHARE_TYPE_MLP
SHARE_TYPE_NY_REG_SHRS
SHARE_TYPE_CLOSED_END_FUND
SHARE_TYPE_REIT*�
	AssetType
ASSET_TYPE_UNSPECIFIED 
ASSET_TYPE_CURRENCY
ASSET_TYPE_COMMODITY
ASSET_TYPE_INDEX
ASSET_TYPE_SECURITY*f
StructuredProductType
SP_TYPE_UNSPECIFIED 
SP_TYPE_DELIVERABLE
SP_TYPE_NON_DELIVERABLE*�
EditFavoritesActionType*
&EDIT_FAVORITES_ACTION_TYPE_UNSPECIFIED "
EDIT_FAVORITES_ACTION_TYPE_ADD"
EDIT_FAVORITES_ACTION_TYPE_DEL*s
RealExchange
REAL_EXCHANGE_UNSPECIFIED 
REAL_EXCHANGE_MOEX
REAL_EXCHANGE_RTS
REAL_EXCHANGE_OTC2�
InstrumentsService�
TradingSchedules>.tinkoff.public.invest.api.contract.v1.TradingSchedulesRequest?.tinkoff.public.invest.api.contract.v1.TradingSchedulesResponsew
BondBy8.tinkoff.public.invest.api.contract.v1.InstrumentRequest3.tinkoff.public.invest.api.contract.v1.BondResponsex
Bonds9.tinkoff.public.invest.api.contract.v1.InstrumentsRequest4.tinkoff.public.invest.api.contract.v1.BondsResponse�
GetBondCoupons<.tinkoff.public.invest.api.contract.v1.GetBondCouponsRequest=.tinkoff.public.invest.api.contract.v1.GetBondCouponsResponse

CurrencyBy8.tinkoff.public.invest.api.contract.v1.InstrumentRequest7.tinkoff.public.invest.api.contract.v1.CurrencyResponse�

Currencies9.tinkoff.public.invest.api.contract.v1.InstrumentsRequest9.tinkoff.public.invest.api.contract.v1.CurrenciesResponseu
EtfBy8.tinkoff.public.invest.api.contract.v1.InstrumentRequest2.tinkoff.public.invest.api.contract.v1.EtfResponsev
Etfs9.tinkoff.public.invest.api.contract.v1.InstrumentsRequest3.tinkoff.public.invest.api.contract.v1.EtfsResponse{
FutureBy8.tinkoff.public.invest.api.contract.v1.InstrumentRequest5.tinkoff.public.invest.api.contract.v1.FutureResponse|
Futures9.tinkoff.public.invest.api.contract.v1.InstrumentsRequest6.tinkoff.public.invest.api.contract.v1.FuturesResponse{
OptionBy8.tinkoff.public.invest.api.contract.v1.InstrumentRequest5.tinkoff.public.invest.api.contract.v1.OptionResponse|
Options9.tinkoff.public.invest.api.contract.v1.InstrumentsRequest6.tinkoff.public.invest.api.contract.v1.OptionsResponsey
ShareBy8.tinkoff.public.invest.api.contract.v1.InstrumentRequest4.tinkoff.public.invest.api.contract.v1.ShareResponsez
Shares9.tinkoff.public.invest.api.contract.v1.InstrumentsRequest5.tinkoff.public.invest.api.contract.v1.SharesResponse�
GetAccruedInterestsA.tinkoff.public.invest.api.contract.v1.GetAccruedInterestsRequestB.tinkoff.public.invest.api.contract.v1.GetAccruedInterestsResponse�
GetFuturesMargin>.tinkoff.public.invest.api.contract.v1.GetFuturesMarginRequest?.tinkoff.public.invest.api.contract.v1.GetFuturesMarginResponse�
GetInstrumentBy8.tinkoff.public.invest.api.contract.v1.InstrumentRequest9.tinkoff.public.invest.api.contract.v1.InstrumentResponse�
GetDividends:.tinkoff.public.invest.api.contract.v1.GetDividendsRequest;.tinkoff.public.invest.api.contract.v1.GetDividendsResponsew

GetAssetBy3.tinkoff.public.invest.api.contract.v1.AssetRequest4.tinkoff.public.invest.api.contract.v1.AssetResponsex
	GetAssets4.tinkoff.public.invest.api.contract.v1.AssetsRequest5.tinkoff.public.invest.api.contract.v1.AssetsResponse�
GetFavorites:.tinkoff.public.invest.api.contract.v1.GetFavoritesRequest;.tinkoff.public.invest.api.contract.v1.GetFavoritesResponse�
EditFavorites;.tinkoff.public.invest.api.contract.v1.EditFavoritesRequest<.tinkoff.public.invest.api.contract.v1.EditFavoritesResponse�
GetCountries:.tinkoff.public.invest.api.contract.v1.GetCountriesRequest;.tinkoff.public.invest.api.contract.v1.GetCountriesResponse�
FindInstrument<.tinkoff.public.invest.api.contract.v1.FindInstrumentRequest=.tinkoff.public.invest.api.contract.v1.FindInstrumentResponse~
	GetBrands7.tinkoff.public.invest.api.contract.v1.GetBrandsRequest8.tinkoff.public.invest.api.contract.v1.GetBrandsResponser

GetBrandBy6.tinkoff.public.invest.api.contract.v1.GetBrandRequest,.tinkoff.public.invest.api.contract.v1.BrandBa
ru.tinkoff.piapi.contract.v1PZ./;investapi�TIAPI�Tinkoff.InvestApi.V1�Tinkoff\\Invest\\V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

