@extends('welcome')

@section("content")

<table>
<tr><th>InvoiceId</th><td>{{$invoice->InvoiceId}}</td></tr>
<tr><th>InvoiceNumber</th><td>{{$invoice->InvoiceNumber}}</td></tr>
<tr><th>InvoiceCurrency</th><td>{{$invoice->InvoiceCurrency}}</td></tr>
<tr><th>PaymentCurrency</th><td>{{$invoice->PaymentCurrency}}</td></tr>
<tr><th>InvoiceAmount</th><td>{{$invoice->InvoiceAmount}}</td></tr>
<tr><th>InvoiceDate</th><td>{{$invoice->InvoiceDate}}</td></tr>
<tr><th>BusinessUnit</th><td>{{$invoice->BusinessUnit}}</td></tr>
<tr><th>Supplier</th><td>{{$invoice->Supplier}}</td></tr>
<tr><th>SupplierNumber</th><td>{{$invoice->SupplierNumber}}</td></tr>
<tr><th>ProcurementBU</th><td>{{$invoice->ProcurementBU}}</td></tr>
<tr><th>SupplierSite</th><td>{{$invoice->SupplierSite}}</td></tr>
<tr><th>RequesterId</th><td>{{$invoice->RequesterId}}</td></tr>
<tr><th>Requester</th><td>{{$invoice->Requester}}</td></tr>
<tr><th>InvoiceGroup</th><td>{{$invoice->InvoiceGroup}}</td></tr>
<tr><th>ConversionRateType</th><td>{{$invoice->ConversionRateType}}</td></tr>
<tr><th>ConversionDate</th><td>{{$invoice->ConversionDate}}</td></tr>
<tr><th>ConversionRate</th><td>{{$invoice->ConversionRate}}</td></tr>
<tr><th>AccountingDate</th><td>{{$invoice->AccountingDate}}</td></tr>
<tr><th>Description</th><td>{{$invoice->Description}}</td></tr>{{-- 
<tr><th>DeliveryChannelCode</th><td>null</td></tr>
<tr><th>DeliveryChannel</th><td>null</td></tr>
<tr><th>PayAloneFlag</th><td>false</td></tr>
<tr><th>InvoiceSourceCode</th><td>"External"</td></tr>
<tr><th>InvoiceSource</th><td>"External"</td></tr>
<tr><th>InvoiceType</th><td>"Standard"</td></tr>
<tr><th>PayGroup</th><td>"Standard"</td></tr>
<tr><th>InvoiceReceivedDate</th><td>null</td></tr>
<tr><th>PaymentReasonCode</th><td>null</td></tr>
<tr><th>PaymentReason</th><td>null</td></tr>
<tr><th>PaymentReasonComments</th><td>null</td></tr>
<tr><th>RemittanceMessageOne</th><td>null</td></tr>
<tr><th>RemittanceMessageTwo</th><td>null</td></tr>
<tr><th>RemittanceMessageThree</th><td>null</td></tr>
<tr><th>PaymentTerms</th><td>"2/10 Net 30"</td></tr>
<tr><th>TermsDate</th><td>"2016-02-03"</td></tr>
<tr><th>GoodsReceivedDate</th><td>"2016-02-03"</td></tr>
<tr><th>PaymentMethodCode</th><td>"CHECK"</td></tr>
<tr><th>PaymentMethod</th><td>"Check"</td></tr>
<tr><th>SupplierTaxRegistrationNumber</th><td>null</td></tr>
<tr><th>FirstPartyTaxRegistrationId</th><td>null</td></tr>
<tr><th>FirstPartyTaxRegistrationNumber</th><td>null</td></tr>
<tr><th>LegalEntity</th><td>"UK Legal Entity"</td></tr>
<tr><th>LegalEntityIdentifier</th><td>"LE_UK_1"</td></tr>
<tr><th>LiabilityDistribution</th><td>"303.30.2210.000.000.000"</td></tr>
<tr><th>DocumentCategory</th><td>null</td></tr>
<tr><th>DocumentSequence</th><td>null</td></tr>
<tr><th>VoucherNumber</th><td>null</td></tr>
<tr><th>ValidationStatus</th><td>"Validated"</td></tr>
<tr><th>ApprovalStatus</th><td>"Not required"</td></tr>
<tr><th>PaidStatus</th><td>"Paid"</td></tr>
<tr><th>AccountingStatus</th><td>"Accounted"</td></tr>
<tr><th>ApplyAfterDate</th><td>null</td></tr>
<tr><th>CanceledFlag</th><td>false</td></tr>
<tr><th>AmountPaid</th><td>6429.6</td></tr>
<tr><th>BaseAmount</th><td>null</td></tr>
<tr><th>PurchaseOrderNumber</th><td>null</td></tr>
<tr><th>Party</th><td>"Progressive Corp"</td></tr>
<tr><th>PartySite</th><td>"Progressive UK"</td></tr>
<tr><th>ControlAmount</th><td>null</td></tr>
<tr><th>DocumentFiscalClassificationCodePath</th><td>null</td></tr>
<tr><th>TaxationCountry</th><td>"United Kingdom"</td></tr>
<tr><th>RoutingAttribute1</th><td>null</td></tr>
<tr><th>RoutingAttribute2</th><td>null</td></tr>
<tr><th>RoutingAttribute3</th><td>null</td></tr>
<tr><th>RoutingAttribute4</th><td>null</td></tr>
<tr><th>RoutingAttribute5</th><td>null</td></tr>
<tr><th>AccountCodingStatus</th><td>null</td></tr>
<tr><th>BudgetDate</th><td>"2016-02-03"</td></tr>
<tr><th>FundsStatus</th><td>null</td></tr>
<tr><th>CanceledDate</th><td>null</td></tr>
<tr><th>CanceledBy</th><td>null</td></tr>
<tr><th>UniqueRemittanceIdentifier</th><td>null</td></tr>
<tr><th>UniqueRemittanceIdentifierCheckDigit</th><td>null</td></tr>
<tr><th>CreationDate</th><td>"2016-02-12T10:27:36+00:00"</td></tr>
<tr><th>CreatedBy</th><td>"JAMES.BIRD"</td></tr>
<tr><th>LastUpdatedBy</th><td>"JAMES.BIRD"</td></tr>
<tr><th>LastUpdateDate</th><td>"2017-05-29T03:54:50+00:00"</td></tr>
<tr><th>LastUpdateLogin</th><td>"2B8E08BE4E301FA6E053790B548C947D"</td></tr>
<tr><th>BankAccount</th><td>"XXXX1274"</td></tr>
<tr><th>SupplierIBAN</th><td>null</td></tr>
<tr><th>ExternalBankAccountId</th><td>23</td></tr>
<tr><th>BankChargeBearer</th><td>null</td></tr>
<tr><th>SettlementPriority</th><td>null</td></tr>
<tr><th>ReferenceKeyOne</th><td>null</td></tr>
<tr><th>ReferenceKeyTwo</th><td>null</td></tr>
<tr><th>ReferenceKeyThree</th><td>null</td></tr>
<tr><th>ReferenceKeyFour</th><td>null</td></tr>
<tr><th>ReferenceKeyFive</th><td>null</td></tr>
<tr><th>ProductTable</th><td>null</td></tr>
<tr><th>ImageDocumentNumber</th><td>null</td></tr> --}}
</table>
@endsection