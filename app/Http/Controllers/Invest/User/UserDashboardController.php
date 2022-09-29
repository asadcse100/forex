<?php


namespace App\Http\Controllers\Invest\User;

use App\Enums\TransactionType;
use App\Enums\TransactionStatus;
use App\Enums\PaymentMethodStatus;

use App\Models\Invest\Transaction;
use App\Models\Invest\PaymentMethod;

use App\Http\Controllers\Invest\Controller;

class UserDashboardController extends Controller
{
    public function index()
    {
        $paymentMethods = PaymentMethod::where('status', PaymentMethodStatus::ACTIVE)
            ->get()->keyBy('slug')->toArray();

        $recentTransactions = Transaction::with(['ledger'])
            ->whereIn('status', [TransactionStatus::ONHOLD, TransactionStatus::CONFIRMED, TransactionStatus::COMPLETED])
            ->whereNotIn('type', [TransactionType::REFERRAL])
            ->where('user_id', auth()->user()->id)
            ->orderBy('id', 'desc')
            ->limit(5)->get();

        return view('user.dashboard', compact('paymentMethods','recentTransactions'));
    }
}
