<?php
namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Models\Currency;

class CurrencyComposer
{
    protected $currencies;
    
    public function compose(View $view)
    {        
        $this->currencies = Currency::all();

        return $view->with('currencies', $this->currencies);
    }
}