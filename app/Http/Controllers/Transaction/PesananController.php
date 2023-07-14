<?php

namespace App\Http\Controllers\transaction;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pesanan;

class PesananController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $pesanan = Pesanan::where('no_pesanan', 'like', "%" . $request->search . "%")->latest()->paginate(10);
        } else {
            $pesanan = Pesanan::latest()->paginate(10);
        }
        return view('transaction.pesanan.index',compact('pesanan'));
    }

    public function create()
    {
        $pesanan = Pesanan::orderBy('id', 'desc')->first();
        if ($pesanan == null) {
            $no_pesanan = 'NP001';
        } else {
            $no_pesanan = 'NP' . sprintf("%03d", abs($pesanan->id + 1));
        }
        return view('transaction.pesanan.create',compact('no_pesanan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'no_pesanan' => 'required',
            'tanggal_pesanan' => 'required',
            'nama_supplier' => 'required',
            'nama_product' => 'required',
            'total' => 'required',
        ]);

        Pesanan::create($request->all());

        return redirect()->route('pesanan.index')
            ->with('success','Pesanan created successfully.');
    }

    public function show(Pesanan $pesanan)
    {
        return view('transaction.pesanan.show',compact('pesanan'));
    }

    public function edit(Pesanan $pesanan)
    {
        return view('transaction.pesanan.edit',compact('pesanan'));
    }

    public function update(Request $request, Pesanan $pesanan)
    {
        $request->validate([
            'no_pesanan' => 'required',
            'tanggal_pesanan' => 'required',
            'nama_supplier' => 'required',
            'nama_product' => 'required',
            'total' => 'required',
        ]);

        $pesanan->update($request->all());

        return redirect()->route('pesanan.index')
            ->with('success','Pesanan updated successfully');
    }

    public function destroy(Pesanan $pesanan)
    {
        $pesanan->delete();

        return redirect()->route('pesanan.index')
            ->with('success','Pesanan deleted successfully');
    }
}
