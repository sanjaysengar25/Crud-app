<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Device;
use Validator;

class DeviceController extends Controller
    {
   
 public function store(Request $req)
    {
      $this->validate($req,[
        'name' => 'required',
        'email' => 'required|email|unique:devices',
        
    ]);
       $device=new Device;
        $device->name=$req->input('name');
        $device->email=$req->input('email');
        $device->save();
   
        return response()->json($device);
      }

public function show(Device $device)
    {
    $device= Device::all();
         return $device;
        }
 public function edit(Device $device,$id)
    {
        try {
        $devices= Device::find($id);
        if(is_null($devices)){
        return response()->json(['message'=>'Record is not found'],401);
            }else {
                $devices= Device::find($id);
                return response()->json($devices,200);
          }}catch (\Exception $e){
            return response()->json(['message'=>$e->getMessage()],401);
    
          } 
        }
    public function update(Request $request, Device $device)
       {
      try {
        $this->validate($request,[
          'name' => 'required',
          'email' => 'required|email|unique:devices',
          
      ]);
        $res= Device::find($request->id);
        $res->name= $request->input('name');
        $res->email= $request->input('email');
         $res->save();
         return response()->json(['message'=>'Record save in database'],200);
       }catch (\Exception $e){
        return response()->json(['message'=>$e->getMessage()],401);

      } 
  }
      public function destroy(Device $device,$id)
       {
        $devices= Device::find($id);
        if(!is_null($devices)){
        $devices->delete();
        return response()->json('record delete from db');  
    }else {
        return response()->json('Record not found',401);
      }
    }
}
