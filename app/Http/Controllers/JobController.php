<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JobController extends Controller
{
    public function showCancellations()
    {
        $cancellations = Job::with('users')->where('cancel', 1)->get();
        
        $title = 'Pembatalan';
        return view('admin.pembatalan', compact('cancellations', 'title'));
    }

    public function showCancellationsDetail(Job $job)
    {
        $client = User::find($job->client_id);
        $tukang = User::find($job->artisan_id);

        $title = 'Detail Pembatalan';
        return view('admin.detail_pembatalan', ['cancel' => $job, 'client' => $client, 'tukang' => $tukang, 'title' => $title]);
    }

    public function updateStatusCancellation($id, $status)
    {
        $data = Job::find($id);

        $data->cancel = $status;

        $data->save();

        return redirect()->route('cancel.index');
    }
}
