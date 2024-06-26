<?php

namespace IntraCompany\Commons\Traits;

use IntraCompany\Commons\Models\Currency;

/**
 * Ojo, no usar con Currencyable
 *
 */
trait CurrencyableCx
{

    public function currency()
    {
        return $this->belongsTo(Currency::class, 'currency_id', 'currency_cx_id');
    }

}
