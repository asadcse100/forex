<?php

namespace App\Http\Livewire\Contract\Trade;

use App\Models\TradeLog;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Box extends Component
{
    public function render()
    {
        $user = Auth::user();
        $contracts = TradeLog::where('user_id', $user->id)->latest()->paginate(getPaginate());
        return view('livewire.contract.trade.box', compact('contracts'));
    }
}
