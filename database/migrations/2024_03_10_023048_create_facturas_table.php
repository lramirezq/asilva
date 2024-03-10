<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->id();
            $table->string("UrlPdf")->nullable();
            $table->string("UrlXml")->nullable();
            $table->string("UrlJson")->nullable();
            $table->string("BarCodeText")->nullable();
            $table->string("GlobalDocumentId")->nullable();
            $table->string("CountryDocumentId")->nullable();
            $table->string("ExternalId")->nullable();
            $table->string("CountryId")->nullable();
            $table->string("Date")->nullable();
            $table->integer("DocumentTypeId")->nullable();
            $table->string("DocumentTypeName")->nullable();
            $table->double("NetAmount")->nullable();
            $table->double("FreeAmount")->nullable();
            $table->double("TaxAmount")->nullable();
            $table->double("TotalAmount")->nullable();
            $table->string("CurrencyType")->nullable();
            $table->string("SeriesNumber")->nullable();
            $table->string("Series")->nullable();
            $table->integer("Number")->unique();
            $table->string("NumberStr")->nullable();
            $table->string("DocumentSenderCode")->nullable();
            $table->string("DocumentSenderName")->nullable();
            $table->string("DocumentReceiverCode")->nullable();
            $table->string("DocumentReceiverName")->nullable();
            $table->string("DocumentFinancialOwnerCode")->nullable();
            $table->string("DocumentFinancialOwnerName")->nullable();
            $table->string("FinancialDate")->nullable();
            $table->string("EstimatedPaymentDate")->nullable();
            $table->string("DocumentTimeStamp")->nullable();
            $table->string("AuthorityTimeStamp")->nullable();
            $table->string("SyncPoint")->nullable();
            $table->jsonb("DocumentTags")->nullable();
            $table->string("TwoCheck")->nullable();
            $table->jsonb("Notes")->nullable();
            $table->string("Offers")->nullable();
            $table->jsonb("Fields")->nullable();
            $table->string("Author")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facturas');
    }
};
