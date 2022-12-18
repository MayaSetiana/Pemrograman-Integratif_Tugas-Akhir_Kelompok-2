<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class barangController extends Controller
{
    protected $client;
    public function __construct()
    {
        $this->client = new Client([
            // Base URI is used with relative requests
            'base_uri' => env('BASE_API_URL'),
            // You can set any number of default request options.
            'timeout'  => 100,
        ]);
    }
    public function getAllBarang(Request $request)
    {
        $res = $this->client->request('GET', '/get-products');
        $data = json_decode($res->getBody()->getContents());
        // dd(($data->data));
        return view('pages.index', ['barang' => $data->data]);
    }

    public function editBarang(Request $request, $id)
    {

        $res = $this->client->request('GET', '/get-product/' . $id);
        $data = json_decode($res->getBody()->getContents());
        // dd(($data->data));
        return view('pages.edit', ['barang' => $data->data]);
    }

    public function updateBarang(Request $request, $id)
    {
        $data = [
            'id' => $id,
            'kode' => $request->kode,
            'nama' => $request->nama,
            'berat' => $request->berat,
            'qty' => $request->qty,
        ];

        $res = $this->client->request('POST', '/update-product/' . $id, [
            'json' => $data,
        ]);
        // dd($res->getBody()->getContents());
        if ($res->getStatusCode() != 200) {
        }
        $data = json_decode($res->getBody()->getContents());
        // dd(($data->data));
        return redirect('/')->with('success', 'Data Berhasil diupdate');
    }
    
    public function createBarang(Request $request)
    {
        $data = [
            'kode' => $request->kode,
            'nama' => $request->nama,
            'berat' => $request->berat,
            'qty' => $request->qty,
        ];

        $res = $this->client->request('POST', '/insert-product', [
            'json' => $data,
        ]);
        // dd($res->getBody()->getContents());
        if ($res->getStatusCode() != 200) {
            redirect('/')->with('error', 'Data Tidak Berhasil Ditambahkan');
        }
        $data = json_decode($res->getBody()->getContents());
        // dd(($data->data));
        return redirect('/')->with('success', 'Data Berhasil ditambahkan');
    }

    public function showAddForm()
    {
        return view('pages.add');
    }

    public function deleteBarang(Request $request, $id)
    {
        $res = $this->client->request('GET', '/delete-product/'. $id);
        if($res->getStatusCode() != 200){
            return redirect('/')->with('error', 'Data gagal dihapus');
        }
        return redirect('/')->with('success', 'Data berhasil dihapus');
    }
    
    public function cekOngkir(Request $request, $id)
    {
        $res = $this->client->request('POST', '/cek-ongkir/'. $id);
        if($res->getStatusCode() != 200){
            // return redirect('/')->with('error', 'Data gagal dihapus');
        }
        $data = json_decode($res->getBody()->getContents());
        // dd($data);
        $ongkir = [
            'jne' => $data->data->jne,
            'pos' => $data->data->pos,
            'tiki' => $data->data->tiki,
        ];
        return view('pages.ongkir', ['data' => $ongkir, 'barang' => $data->barang] );
    }
}
