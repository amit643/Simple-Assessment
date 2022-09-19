<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use GuzzleHttp\Client;
use App\Models\Product;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ProductController extends Controller
{
    public function shopList(Request $request)
    {

        $products = Product::search($request->search)->whereNull('deleted_at')->latest()->paginate(12);
        // return view('welcome',$products);
        return view('welcome',["products"=> $products]);
    }

    public function index()
    {
        return view('admin.product.view');
    }

    public function getProduct(Request $request)
    {
        // dd($request->all());
        if ($request->ajax()) {
            $data = Product::whereNull('deleted_at')->latest()->get();
            // dd($data);
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('name', function($row){
                   
                    return $row->title;
                })
                ->addColumn('author', function($row){
                   
                    return $row->author;
                })
                ->addColumn('publisher', function($row){
                   
                    return $row->publisher;
                })
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="' . route('product.edit', $row->id) . '" class="edit btn btn-outline-success btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                    </a> <a href="' . route('product.delete', $row->id) . '" class="delete btn btn-outline-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i> Delete
                    </a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }
 
    public function create()
    {
      
        return view('admin.product.addEdit');
    }  

    public function store(Request $request)
    {
        unset($request['']);
       $data = Product::create($request->all());
      

       return redirect()->route('product.list')->with('success', 'Product Created Successfully');
    }

  
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        return view('admin.product.addEdit',["product"=> Product::where('id',$id)->first()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // dd($request->all());
        unset($request['_token']);
        $data = Product::where('id',$request->id)->update($request->all()); 
           
           return redirect()->route('product.list')->with('success', 'Product Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Product::where('id',$id)
        ->update([
            'deleted_at' => Carbon::now(),
           ]);
     
           return redirect()->route('product.list')->with('success', 'Product Deleted Successfully');
    }

    public function dataMigration($limit){
        $client = new Client();
        $res = $client->request('get', 'https://fakerapi.it/api/v1/books?_quantity='.$limit);
        if ($res->getStatusCode() == 200) { // 200 OK
            $response_data =(array) json_decode($res->getBody());
            // dd($response_data);
            foreach($response_data['data'] as $data){
                Product::updateOrCreate(["title" => $data->title],(array)$data);
            }
        }
        echo "data Migrate successfully";
    }
}
