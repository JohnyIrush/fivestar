<?php

namespace Softwarescares\Inteliform\app\Http\Controllers;

use Softwarescares\Inteliform\app\Models\Option;
use Softwarescares\Inteliform\app\Models\FieldSetting;
use Softwarescares\Inteliform\app\Models\Field;
use Softwarescares\Inteliform\app\Models\FormSection;
use Softwarescares\Inteliform\app\Models\FormTemplate;
use Softwarescares\Inteliform\app\Http\Requests\StoreFormTemplateRequest;
use Softwarescares\Inteliform\app\Http\Requests\UpdateFormTemplateRequest;

use Softwarescares\Intelilibrary\app\Actions\Model\Store;
use Softwarescares\Intelilibrary\app\Actions\Model\Update;
use Softwarescares\Intelilibrary\app\Actions\Model\Delete;

use Softwarescares\Intelilibrary\app\Plugins\Model\Form;
use Softwarescares\Intelilibrary\app\Plugins\Model\Table;
use Softwarescares\Intelilibrary\app\Plugins\Model\Card;

use Softwarescares\Inteliform\app\plugins\Model\Record;

use Illuminate\Http\Request;

use DB;

use Softwarescares\Inteliform\app\Http\Controllers\Controller;

class FormTemplateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(FormTemplate::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFormTemplateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFormTemplateRequest $request, Store $store, FormTemplate $formTemplate)
    {
              Vote::updateOrCreate(
                  ['id' => $request->id],
                  ['votes' => $votes]
              );        

        $formTemplate = $store->store($request, $formTemplate);

        return response()->json($formTemplate);
    }

    public function formBuilderLastId(Record $record, FormTemplate $formTemplate, FormSection $formSection, Field $field, FieldSetting $fieldSetting, Option $option)
    {
        return response()->json([
            'form' => ($formTemplate::count() >= 1)? $record->lastRecord($formTemplate)->id: 0,
            /*
            'section' => ($formSection::count() >= 1)? $record->lastRecord($formSection)->id: 0,
            'field' => ($field::count() >= 1)? $record->lastRecord($field)->id: 0,
            'setting' => ($fieldSetting::count() >= 1)? $record->lastRecord($fieldSetting)->id: 0,
            'option' => ($option::count() >= 1)? $record->lastRecord($option)->id: 0,
            */
        ]);
    }


    public function storeForm(StoreFormTemplateRequest $request)
    {  
        //return response()->json($request);

        $formTemplate = [];

        $formdetails = FormTemplate::updateOrCreate(
            ['id' => $request->id],
            [
            "title" => $request->title,
            "cover" => $request->cover,
            "description" => $request->description,
            "sections" => json_encode($request->input("sections")),
            "image" => $request->image,
           ]
        );

        $formTemplate['id'] = $formdetails->id;
        $formTemplate['title'] = $formdetails->title;
        $formTemplate['image'] = $formdetails->image;
        $formTemplate['description'] = $formdetails->description;
        $formTemplate['cover'] = $request->input("sections");
        $formTemplate['sections'] = $formdetails->sections;

        /*
        $formdetails = FormTemplate::updateOrCreate(
            ['id' => $request->id],
            [
            "title" => $request->title,
            "cover" => $request->cover,
            "description" => $request->description,
             "sections" => $request->sections
           ]
        );

        $formTemplate = [
            "id" => '',
            "title" => '',
            "description" => '',
            "cover" => '',
            "sections" => [
                ]
           ];

                $formdetails = FormTemplate::updateOrCreate(
                    ['id' => $request->id],
                    [
                    "title" => $request->title,
                    "cover" => $request->cover,
                    "description" => $request->description,
                     "sections" => $request->sections
                   ]
                ); 
                //return response()->json($formdetails);
                $formTemplate['id'] = $formdetails->id;
                $formTemplate['title'] = $formdetails->title;
                $formTemplate['description'] = $formdetails->description;
                $formTemplate['cover'] = $formdetails->cover;

                foreach ($request->sections as $sectionkey => $section)
                {
                  //return response()->json($formdetails);
                  $formSection = FormSection::updateOrCreate(
                      ['id' => $section['id']],
                      [
                      'form_template_id' => $formdetails->id,
                      "title" => $section['title'],
                      "cover" => $section['cover'],
                      "description" => $section['description'],
                      ]
                      );

                  $formTemplate['sections'][$sectionkey] = [
                       'id' => $formSection->id,
                       'title' => $formSection->title,
                       'description' => $formSection->description,
                       'cover' => $formSection->cover,
                       "fields" => [
                       ]
                  ];


                  foreach ($section['fields'] as $fieldkey => $field)
                  {
                    $sectionField = Field::updateOrCreate(
                        ['id' => $field['id']],
                         ['form_section_id' => $formSection['id'],
                         'title' => $field['title'],
                         'image' => $field['image'],
                         'value' => $field['value'],
                         'description' => $field['description'],
                         'name' => $field['name'],]
                    );

                    $formTemplate['sections'][$sectionkey]['fields'][$fieldkey] = [
                         'id' => $sectionField->id,
                         'title' => $sectionField->title,
                         'image' => $sectionField->image,
                         'value' => $sectionField->value,
                         'description' => $sectionField->description,
                         'name' => $sectionField->name,
                         'settings' => [

                         ],
                         'options' => [

                         ]
                    ];

                    foreach ($field['settings'] as $settingkey => $setting)
                    {
                      $fieldSetting = FieldSetting::updateOrCreate(
                          ['id' => $setting['id']],
                           [
                            'field_id' => $sectionField['id'],
                            'key' => $settingkey,
                            'value' => $setting[$settingkey]
                           ]
                      );

                      $formTemplate['sections'][$sectionkey]['fields'][$fieldkey]['settings'][$settingkey] = [
                                       'id' => $fieldSetting->id,
                                       $fieldSetting->key => $fieldSetting->value
                                    ];
                    }

                    if (array_key_exists('options', $field))
                    {
                        foreach ($field['options'] as $optionkey => $option)
                        {
                          $fieldOption = Option::updateOrCreate(
                              ['id' => $option['id']],
                              [
                              'field_id' => $sectionField['id'],
                              'key' => $option['name'],
                              'value' =>  $option['value']
                              ]
                          );

                          $formTemplate['sections'][$sectionkey]['fields'][$fieldkey]['options'][$optionkey] = 
                                           [
                                           'id' => $fieldOption->id,
                                           'name' => $fieldOption->key, 
                                           'value' => $fieldOption->value
                                        ];
                        }
                    }

                  }
                }*/  

        return json_encode($formTemplate);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FormTemplate  $formTemplate
     * @return \Illuminate\Http\Response
     */
    public function show(FormTemplate $formTemplate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FormTemplate  $formTemplate
     * @return \Illuminate\Http\Response
     */
    public function edit(FormTemplate $formTemplate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFormTemplateRequest  $request
     * @param  \App\Models\FormTemplate  $formTemplate
     * @return \Illuminate\Http\Response
     */

    public function update(UpdateFormTemplateRequest $request, FormTemplate $formTemplate, Update $update)
    {
        $formTemplate = $update->update($request, $formTemplate,["id" => $request->input("id")]);

        return response()->json($formTemplate);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FormTemplate  $formTemplate
     * @return \Illuminate\Http\Response
     */

    public function destroy(Request $request, FormTemplate $formTemplate, Delete $delete)
    {
        $formTemplate::find($request->input("id"))->formSections()->delete();
        
        $formTemplate = $delete->delete($request, $formTemplate,["id" => $request->input("id")]);

        return response()->json($formTemplate);

    }
}
