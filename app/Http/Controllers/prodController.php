<?php

namespace App\Http\Controllers;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class prodController extends Controller
{

    function login(Request $req)
    {
        $data=$req->input();
        $req->session()->put('user',$data['username']);
        return redirect('list');

    }

    function add(Request $req)
    {
        
        $file = $req->file('image');
        $extension = $file->getClientOriginalExtension(); // you can also use file name
        $fileName = time().'.'.$extension;
        $path = public_path();
        $uplaod = $file->move($path,$fileName);


        $pro=new product();

        $pro->name=$req->name;
        $pro->price=$req->price;
        $pro->image=$fileName;
        
        $istrue = false;

        if($req->optradio == "on"){
            $istrue=true;
        }
        
        $pro->status=$istrue;
        $pro->save();
        $req->session()->flash('status','product entered successfully');
        return redirect('list');
    }

    function delete($id){

        product::find($id)->delete();

        Session::flash('status','Product deleted successfully');
        return redirect('list');
       }

       function edit($id){

        $data = product::find($id);
        return view('edit',['data'=>$data]);

  
       }
  
    function update(Request $req){
        
        $fileName = "";

        if($req->image != null){
            $file = $req->file('image');
            $extension = $file->getClientOriginalExtension(); // you can also use file name
            $fileName = time().'.'.$extension;
            $path = public_path();
            $uplaod = $file->move($path,$fileName);

            $data=product::find($req->id);

            $data->name=$req->name;
            $data->price=$req->price;
            $data->image=$fileName;
        }
        else{
            $data=product::find($req->id);

            $data->name=$req->name;
            $data->price=$req->price;
        }

        
        

        $istrue = false;

        if($req->optradio == "on"){
            $istrue=true;
            $data->status=$istrue;
        }elseif($req->optradio =="off"){
            $istrue=false;
            $data->status=$istrue;
        }
        $data->save();
        $req->session()->flash('status','Product updated successfully');
        return redirect('list');

    return redirect()->route('list')
            ->with('success','Product updated successfully');
    }

    function list(){

        $data =  product::all();
        return view('list',["data"=>$data]);
    }



    public function store(Request $req)
    {
        
        //dd($req -> all());
        
        $req->validate([
            'name' => 'required',
            'price' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $input = $req->all();
  
        if ($image = $req->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
    
        Product::create($input);
     
        return redirect()->route('list')
                        ->with('success','Product created successfully.');
    }

    function view($id){
        
    
  
        $data = product::find($id);
        return view('view',["data"=>$data]);
    
         
  
    }
}


