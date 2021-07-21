<?php

namespace App\Repositories;

use App\Repositories\Interfaces\BaseRepositoryInterface;
use App\Models\Invoice;
use App\Models\InvoiceItem;

class InvoiceRepository implements BaseRepositoryInterface
{
    private $invoice;
    private $invoiceItem;
    private $invoiceRow;

    public function __construct(Invoice $invoice, InvoiceItem $invoiceItem)
    {
        $this->invoice = $invoice;
        $this->invoiceItem = $invoiceItem;
    }

    public function create(array $data)
    {
        return "create";
    }

    public function read()
    {
        return $this->invoice->all()->toJson();
    }

    public function update(array $data, $id)
    {
        return "update";
    }

    public function delete($id)
    {
        return "delete";
    }

    public function readById($id)
    {
        $this->invoiceRow = $this->invoice->find($id);

        if ($this->invoiceRow != null) {

            $this->invoiceRow->invoiceItems;

            return $this->invoiceRow->toJson();

        }
    }
}
