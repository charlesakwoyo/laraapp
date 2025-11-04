<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Service;
use App\Models\Booking;
use PDF;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsersExport;
use App\Exports\ServicesExport;
use App\Exports\BookingsExport;

class ReportController extends Controller
{
    public function index()
    {
        return view('admin.reports.index');
    }

    public function usersPdf()
    {
        $users = User::all();
        $pdf = PDF::loadView('admin.reports.users', compact('users'));
        return $pdf->download('users_report.pdf');
    }

    public function servicesPdf()
    {
        $services = Service::all();
        $pdf = PDF::loadView('admin.reports.services', compact('services'));
        return $pdf->download('services_report.pdf');
    }

    public function bookingsPdf()
    {
        $bookings = Booking::with('user', 'service')->get();
        $pdf = PDF::loadView('admin.reports.bookings', compact('bookings'));
        return $pdf->download('bookings_report.pdf');
    }

    // Excel exports
    public function usersExcel()
    {
        return Excel::download(new UsersExport, 'users_report.xlsx');
    }

    public function servicesExcel()
    {
        return Excel::download(new ServicesExport, 'services_report.xlsx');
    }

    public function bookingsExcel()
    {
        return Excel::download(new BookingsExport, 'bookings_report.xlsx');
    }
}
