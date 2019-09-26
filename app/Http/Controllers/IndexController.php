<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guest;
use App\Ticket;

class IndexController extends Controller
{
	public function register() {
		return view('register');
	}

	public function dashboard() {
		return view('dashboard');
	}

	public function raffle() {
		return view('raffle');
	}

	public function fillup() {
		return view('fillup');
	}

	public function validation() {
		$guests = Guest::pluck('ticket_no');
		return $guests;
	}

	public function guest_id($ticket) {
		$ticket = Ticket::where('ticket_no', '=', $ticket)->get();
		$guest = Guest::where('id', '=', $ticket[0]->guest_id)->get();
		return $guest[0];
	}
}
