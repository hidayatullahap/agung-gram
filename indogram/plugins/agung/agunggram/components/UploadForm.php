<?php namespace Agung\Agunggram\Components;

use Cms\Classes\ComponentBase;
use Input;
use Validator;
use ValidationException;
use Redirect;
use Agung\Agunggram\Models\Imageuploads;
use Flash;
use System\Models\File;

class UploadForm extends ComponentBase
{

    public function componentDetails(){
        return [
            'name' => 'Upload Form',
            'description' => 'Upload your image'
        ];
    }


    public function onSave(){

        $validator = Validator::make(
            $form = Input::all(),[
                'description' => 'required',
                'imagename' => 'required' 
            ]
        );

        if($validator->fails()){
            throw new ValidationException($validator);
        }

       $imageupload = new Imageuploads();
       $imageupload->uploader_name = Input::get('uploader_name');
       $postDescription = Input::get('description');
       $imageupload->description = $postDescription;
       $slug = $this->createSlug($postDescription,'-');
       $imageupload->slug = $slug;
       $fileName = Input::file('imagename')->getClientOriginalName();
       Input::file('imagename')->move('storage/app/media/', $fileName);
       $imageupload->imagename = $fileName;
       $imageupload->save();
       Flash::success('Upload sent!');
       return Redirect::back();
    }

    public function createSlug($str, $delimiter = '-'){
        $slug = strtolower(trim(preg_replace('/[\s-]+/', $delimiter, 
        preg_replace('/[^A-Za-z0-9-]+/', $delimiter, 
        preg_replace('/[&]/', 'and', preg_replace('/[\']/', '', iconv('UTF-8', 'ASCII//TRANSLIT', $str))))), $delimiter));
        return $slug;
    } 

    public function onImageUpload(){
        $image = Input::all();
        $file = (new File())->frompost($image['imagename']);

        return[
            '#imageResult' => '<img src="' . $file->getThumb(150,150,['mode' => 'crop']) .'">'
        ];
    }

}