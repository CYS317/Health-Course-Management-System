<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;

class RegisterController extends Controller
{
    public function add()
    {
        return view('addRegister');
    }

    public function store(Request $request)
    {
        $r = $request;

        Register::create([
            'name' => $r->name,
            'email' => $r->email,
            'phone' => $r->phone,
            'day_of_week' => ucfirst(strtolower($r->day_of_week)),
            'course' => $r->course,
            'coach' => $r->coach,
            'price' => floatval(str_replace('RM', '', trim($r->price))),
            'message' => $r->message,
        ]);

        return redirect()->route('showRegister')->with('success', 'Registration successfully added!');
    }

    public function show()
    {
        $viewRegister = Register::all();
        return view('showRegister')->with('registers', $viewRegister);
    }

    public function item()
    {
        return view('items');
    }

    public function fetchItems()
    {
        $items = Register::all();
        return response()->json($items);
    }

    public function edit($id)
    {
        $registers = Register::where('id', $id)->get();

        if ($registers->isEmpty()) {
            return redirect()->route('showRegister')->with('error', 'Registration not found!');
        }

        return view('editRegister')->with('registers', $registers);
    }

    public function update(Request $request)
    {
        $r = $request;

        $id = $r->input('id');
        $register = Register::find($id);

        if (!$register) {
            return redirect()->route('showRegister')->with('error', 'Registration not found!');
        }

        $register->name = $r->name;
        $register->email = $r->email;
        $register->phone = $r->phone;
        $register->day_of_week = ucfirst(strtolower($r->day_of_week));
        $register->course = $r->course;
        $register->coach = $r->coach;
        $register->price = floatval(str_replace('RM', '', trim($r->price)));
        $register->message = $r->message;

        $register->save();

        return redirect()->route('showRegister')->with('success', 'Registration updated successfully!');
    }

    public function delete($id)
    {
        $register = Register::find($id);

        if (!$register) {
            return redirect()->route('showRegister')->with('error', 'Registration not found!');
        }

        $register->delete();
        return redirect()->route('showRegister')->with('success', 'Registration deleted successfully!');
    }

    public function search(Request $request)
    {
        $query = trim($request->input('query'));

        if (empty($query)) {
            return redirect()->route('showRegister')->with('error', 'Please enter a search term.');
        }

        $query = preg_replace('/\s+/', ' ', $query);

        $registers = Register::query()
            ->whereRaw('LOWER(name) like ?', ['%' . strtolower($query) . '%'])
            ->orWhereRaw('LOWER(email) like ?', ['%' . strtolower($query) . '%'])
            ->orWhereRaw('LOWER(course) like ?', ['%' . strtolower($query) . '%'])
            ->orWhereRaw('LOWER(phone) like ?', ['%' . strtolower($query) . '%'])
            ->orWhereRaw('LOWER(coach) like ?', ['%' . strtolower($query) . '%'])
            ->orWhereRaw('LOWER(day_of_week) like ?', ['%' . strtolower($query) . '%'])
            ->when(is_numeric($query), function ($queryBuilder) use ($query) {
                $queryBuilder->orWhere('price', $query);
            })
            ->when(!is_numeric($query), function ($queryBuilder) use ($query) {
                $queryBuilder->orWhere('message', 'like', "%" . strtolower($query) . "%");
            })
            ->get();

        return view('showRegister', compact('registers'));
    }

    public function detail($id)
    {
        $registers = Register::where('id', $id)->get();

        if ($registers->isEmpty()) {
            return redirect()->route('showRegister')->with('error', 'Registration not found!');
        }

        return view('registerDetail')->with('registers', $registers);
    }
}
