<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ImageeditorController extends Controller
{
    //
    function __construct() {
        
    }
    
    public function index(Request $request){
        
        $data['title'] = 'CKEditor - Demo';
        $data['css'] = array();
        $data['plugincss'] = array();
        $data['pluginjs'] = array();
        $data['js'] = array();
        $data['funinit'] = array(); 
        return view('admin.pages.imgaeeditor',$data);
    }
}
