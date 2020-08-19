<?php

namespace App\Http\Controllers;

use App\File;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function index(){
      
        $data = File::all();
        return view('admin.file.index',compact('data'));
    }

    public function create()
    {
        //
        return view('admin.file.create');
    }

     public function storeMedia(Request $request)
    {
        $path = storage_path('public/files');

        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }
    
        $file = $request->file('file');
        //dd($file);
        $name = uniqid() . '_' . trim($file->getClientOriginalName());
    
        $file->move($path, $name);
    
        return response()->json([
            'name'          => $name,
            'original_name' => $file->getClientOriginalName(),
        ]);
       /* request()->validate([
            'filename' => 'required',
            'filename.*' => 'mimes:doc,docx,pdf,txt,jpeg,png,jpg,gif,svg'
           ]);
    
           if ($files = $request->file('filename')) {
               $destinationPath = 'public/files/'; // upload path
               $filename = date('YmdHis') . "." . $files->getClientOriginalExtension();
               $files->move($destinationPath, $filename);
               $insert['filename'] = "$filename";
            }
            
            $check = File::insertGetId($insert);
    
        return response()->json(['success' => $filename]);*/
    }

    /*public function store(StoreFileRequest $request)
    {
        $file = File::create($request->all());
    
        foreach ($request->input('filename', []) as $file) {
            $file->addMedia(storage_path('public/files' . $file))->toMediaCollection('filename');
        }
        
        return redirect()->route('file.index');
    }*/
    public function store(Request $request)

    {



        $this->validate($request, [

                'filename' => 'required',

                'filename.*' => 'mimes:doc,pdf,docx,zip,csv'

        ]);



        if($request->hasfile('filename'))

         {

            foreach($request->file('filename') as $file)

            {
                $name = time().'.'.$file->extension();
              //  $name = date("F j, Y, g:i:s a").'-'.$file->getClientOriginalName();
                //dd($name);

                $file->move(public_path().'/files/', $name);  
               // dd($file);

                $data[] = $name;  
               

            }

         }



         $file= new File();

         $file->filename=json_encode($data);

         $file->save();



       // return back()->with('success', 'Data Your files has been successfully added');

       return redirect('admin/file');
    }
}
